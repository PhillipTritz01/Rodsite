<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('sort_order')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'page_subtitle' => 'nullable|string',
            'features' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image_type' => 'required|in:upload,url',
            'image_file' => 'required_if:image_type,upload|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'image_url' => 'required_if:image_type,url|nullable|url|max:500',
            'price_from' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
            'page_template' => 'nullable|string|in:default,photography,film'
        ]);

        $data = $request->except(['image_type', 'image_file']);
        $data['slug'] = Str::slug($request->title);
        $data['featured'] = $request->has('featured');
        $data['published'] = $request->has('published');
        $data['has_dedicated_page'] = $request->has('has_dedicated_page') ? 1 : 0;

        // Handle image upload or URL
        if ($request->image_type === 'upload' && $request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('services', 'public');
            $data['image_path'] = $path;
            $data['image_url'] = null;
        } else {
            $data['image_url'] = $request->image_url;
            $data['image_path'] = null;
        }

        // Convert features from textarea to array if needed
        if ($data['features']) {
            $data['features'] = json_encode(array_filter(array_map('trim', explode("\n", $data['features']))));
        }

        $service = Service::create($data);

        // Redirect to sections management if dedicated page is enabled
        if ($data['has_dedicated_page']) {
            return redirect()->route('admin.services.sections.index', $service)
                           ->with('success', 'Service created successfully! Now add sections for the dedicated page.');
        }

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'page_subtitle' => 'nullable|string',
            'features' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image_type' => 'required|in:upload,url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'image_url' => 'nullable|url|max:500',
            'price_from' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
            'page_template' => 'nullable|string|in:default,photography,film'
        ]);

        $data = $request->except(['image_type', 'image_file']);
        $data['slug'] = Str::slug($request->title);
        $data['featured'] = $request->has('featured');
        $data['published'] = $request->has('published');
        $data['has_dedicated_page'] = $request->has('has_dedicated_page') ? 1 : 0;

        // Handle image upload or URL
        if ($request->image_type === 'upload' && $request->hasFile('image_file')) {
            // Delete old image if exists
            if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
                Storage::disk('public')->delete($service->image_path);
            }
            
            $path = $request->file('image_file')->store('services', 'public');
            $data['image_path'] = $path;
            $data['image_url'] = null;
        } elseif ($request->image_type === 'url') {
            // Delete old image if switching to URL
            if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
                Storage::disk('public')->delete($service->image_path);
            }
            
            $data['image_url'] = $request->image_url;
            $data['image_path'] = null;
        }

        // Convert features from textarea to array if needed
        if ($data['features']) {
            $data['features'] = json_encode(array_filter(array_map('trim', explode("\n", $data['features']))));
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // Delete associated image if exists
        if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
            Storage::disk('public')->delete($service->image_path);
        }

        // Delete associated section images
        foreach ($service->sections as $section) {
            if ($section->image_path && Storage::disk('public')->exists($section->image_path)) {
                Storage::disk('public')->delete($section->image_path);
            }
        }

        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'features' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image_url' => 'nullable|url|max:500',
            'price_from' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['featured'] = $request->has('featured');
        $data['published'] = $request->has('published');

        // Convert features from textarea to array if needed
        if ($data['features']) {
            $data['features'] = json_encode(array_filter(array_map('trim', explode("\n", $data['features']))));
        }

        Service::create($data);

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
            'features' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image_url' => 'nullable|url|max:500',
            'price_from' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['featured'] = $request->has('featured');
        $data['published'] = $request->has('published');

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
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully!');
    }
}

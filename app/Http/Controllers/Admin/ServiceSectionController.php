<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceSectionController extends Controller
{
    public function index(Service $service)
    {
        $sections = $service->sections()->ordered()->get();
        return view('admin.services.sections.index', compact('service', 'sections'));
    }

    public function create(Service $service)
    {
        return view('admin.services.sections.create', compact('service'));
    }

    public function store(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'image_type' => 'required|in:upload,url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'image_url' => 'nullable|url',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        $data = [
            'service_id' => $service->id,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'button_text' => $validated['button_text'] ?? 'Learn More',
            'button_url' => $validated['button_url'],
            'sort_order' => $validated['sort_order'] ?? $service->sections()->max('sort_order') + 1,
            'published' => $request->has('published')
        ];

        // Handle image upload or URL (image optional)
        if ($validated['image_type'] === 'upload' && $request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('service-sections', 'public');
            $data['image_path'] = $path;
            $data['image_url'] = null;
        } elseif ($validated['image_type'] === 'url' && !empty($validated['image_url'])) {
            $data['image_url'] = $validated['image_url'];
            $data['image_path'] = null;
        } else {
            // No image provided
            $data['image_url'] = null;
            $data['image_path'] = null;
        }

        $service->sections()->create($data);

        return redirect()->route('admin.services.sections.index', $service)
                        ->with('success', 'Service section created successfully!');
    }

    public function show(Service $service, ServiceSection $section)
    {
        return view('admin.services.sections.show', compact('service', 'section'));
    }

    public function edit(Service $service, ServiceSection $section)
    {
        return view('admin.services.sections.edit', compact('service', 'section'));
    }

    public function update(Request $request, Service $service, ServiceSection $section)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'image_type' => 'required|in:upload,url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'image_url' => 'nullable|url',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'button_text' => $validated['button_text'] ?? 'Learn More',
            'button_url' => $validated['button_url'],
            'sort_order' => $validated['sort_order'] ?? $section->sort_order,
            'published' => $request->has('published')
        ];

        // Handle image upload or URL (image optional)
        if ($validated['image_type'] === 'upload' && $request->hasFile('image_file')) {
            // Delete old image if exists
            if ($section->image_path && Storage::disk('public')->exists($section->image_path)) {
                Storage::disk('public')->delete($section->image_path);
            }
            
            $path = $request->file('image_file')->store('service-sections', 'public');
            $data['image_path'] = $path;
            $data['image_url'] = null;
        } elseif ($validated['image_type'] === 'url' && !empty($validated['image_url'])) {
            // Delete old image if switching to URL
            if ($section->image_path && Storage::disk('public')->exists($section->image_path)) {
                Storage::disk('public')->delete($section->image_path);
            }
            
            $data['image_url'] = $validated['image_url'];
            $data['image_path'] = null;
        } else {
            // If neither provided, keep existing image values or null out
            if (!$section->image_path && !$section->image_url) {
                $data['image_url'] = null;
                $data['image_path'] = null;
            }
        }

        $section->update($data);

        return redirect()->route('admin.services.sections.index', $service)
                        ->with('success', 'Service section updated successfully!');
    }

    public function destroy(Service $service, ServiceSection $section)
    {
        // Delete associated image if exists
        if ($section->image_path && Storage::disk('public')->exists($section->image_path)) {
            Storage::disk('public')->delete($section->image_path);
        }

        $section->delete();

        return redirect()->route('admin.services.sections.index', $service)
                        ->with('success', 'Service section deleted successfully!');
    }
} 
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotographySection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotographySectionController extends Controller
{
    public function index()
    {
        $sections = PhotographySection::ordered()->paginate(15);
        return view('admin.photography-sections.index', compact('sections'));
    }

    public function create()
    {
        return view('admin.photography-sections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('photography-sections', 'public');
            $validated['image_path'] = $imagePath;
        }

        $validated['published'] = $request->has('published');
        
        PhotographySection::create($validated);

        return redirect()->route('admin.photography-sections.index')
            ->with('success', 'Photography section created successfully!');
    }

    public function show(PhotographySection $photographySection)
    {
        return view('admin.photography-sections.show', compact('photographySection'));
    }

    public function edit(PhotographySection $photographySection)
    {
        return view('admin.photography-sections.edit', compact('photographySection'));
    }

    public function update(Request $request, PhotographySection $photographySection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image_file')) {
            // Delete old image if exists
            if ($photographySection->image_path && Storage::disk('public')->exists($photographySection->image_path)) {
                Storage::disk('public')->delete($photographySection->image_path);
            }
            
            $imagePath = $request->file('image_file')->store('photography-sections', 'public');
            $validated['image_path'] = $imagePath;
        }

        $validated['published'] = $request->has('published');
        
        $photographySection->update($validated);

        return redirect()->route('admin.photography-sections.index')
            ->with('success', 'Photography section updated successfully!');
    }

    public function destroy(PhotographySection $photographySection)
    {
        // Delete associated image if exists
        if ($photographySection->image_path && Storage::disk('public')->exists($photographySection->image_path)) {
            Storage::disk('public')->delete($photographySection->image_path);
        }
        
        $photographySection->delete();

        return redirect()->route('admin.photography-sections.index')
            ->with('success', 'Photography section deleted successfully!');
    }
} 
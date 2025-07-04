<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:film,photography,graphic_design,other',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'video_url' => 'nullable|url',
            'client' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'featured' => 'boolean',
            'published' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'gallery_files' => 'nullable|array',
            'gallery_files.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:25600',
        ]);

        // Handle image upload
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('project-images', 'public');
            $validated['image_path'] = $imagePath;
        }

        // Handle gallery uploads
        $galleryPaths = [];
        if ($request->hasFile('gallery_files')) {
            foreach ($request->file('gallery_files') as $file) {
                $galleryPath = $file->store('project-galleries', 'public');
                $galleryPaths[] = $galleryPath;
            }
            $validated['gallery'] = $galleryPaths;
        }

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Ensure boolean fields are set
        $validated['featured'] = $request->has('featured');
        $validated['published'] = $request->has('published');

        // Default sort_order: append to bottom if not provided
        if (empty($validated['sort_order'])) {
            $validated['sort_order'] = (Project::max('sort_order') ?? 0) + 1;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:film,photography,graphic_design,other',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'video_url' => 'nullable|url',
            'client' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'featured' => 'boolean',
            'published' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'gallery_files' => 'nullable|array',
            'gallery_files.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:25600',
        ]);

        // Handle image upload
        if ($request->hasFile('image_file')) {
            // Delete old image if it exists
            if ($project->image_path && Storage::disk('public')->exists($project->image_path)) {
                Storage::disk('public')->delete($project->image_path);
            }
            
            $imagePath = $request->file('image_file')->store('project-images', 'public');
            $validated['image_path'] = $imagePath;
            
            // Clear image_url if uploading a new file
            $validated['image_url'] = null;
        }

        // Handle gallery uploads
        if ($request->hasFile('gallery_files')) {
            // Delete old gallery images if they exist
            if ($project->gallery && is_array($project->gallery)) {
                foreach ($project->gallery as $oldGalleryPath) {
                    if (Storage::disk('public')->exists($oldGalleryPath)) {
                        Storage::disk('public')->delete($oldGalleryPath);
                    }
                }
            }
            
            // Upload new gallery images
            $galleryPaths = [];
            foreach ($request->file('gallery_files') as $file) {
                $galleryPath = $file->store('project-galleries', 'public');
                $galleryPaths[] = $galleryPath;
            }
            $validated['gallery'] = $galleryPaths;
        }

        // Update slug if title changed
        if ($project->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Ensure boolean fields are set
        $validated['featured'] = $request->has('featured');
        $validated['published'] = $request->has('published');

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete associated image file if it exists
        if ($project->image_path && Storage::disk('public')->exists($project->image_path)) {
            Storage::disk('public')->delete($project->image_path);
        }
        
        // Delete gallery images if they exist
        if ($project->gallery && is_array($project->gallery)) {
            foreach ($project->gallery as $galleryPath) {
                if (Storage::disk('public')->exists($galleryPath)) {
                    Storage::disk('public')->delete($galleryPath);
                }
            }
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}

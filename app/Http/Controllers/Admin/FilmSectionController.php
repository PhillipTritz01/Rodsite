<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FilmSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmSectionController extends Controller
{
    public function index()
    {
        $sections = FilmSection::ordered()->paginate(15);
        return view('admin.film-sections.index', compact('sections'));
    }

    public function create()
    {
        return view('admin.film-sections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'video_url' => 'nullable|url',
            'thumbnail_url' => 'nullable|url',
            'thumbnail_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail_file')) {
            $thumbnailPath = $request->file('thumbnail_file')->store('film-sections', 'public');
            $validated['thumbnail_path'] = $thumbnailPath;
        }

        $validated['published'] = $request->has('published');
        
        FilmSection::create($validated);

        return redirect()->route('admin.film-sections.index')
            ->with('success', 'Film section created successfully!');
    }

    public function show(FilmSection $filmSection)
    {
        return view('admin.film-sections.show', compact('filmSection'));
    }

    public function edit(FilmSection $filmSection)
    {
        return view('admin.film-sections.edit', compact('filmSection'));
    }

    public function update(Request $request, FilmSection $filmSection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'video_url' => 'nullable|url',
            'thumbnail_url' => 'nullable|url',
            'thumbnail_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'sort_order' => 'nullable|integer|min:0',
            'published' => 'boolean'
        ]);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail_file')) {
            // Delete old thumbnail if exists
            if ($filmSection->thumbnail_path && Storage::disk('public')->exists($filmSection->thumbnail_path)) {
                Storage::disk('public')->delete($filmSection->thumbnail_path);
            }
            
            $thumbnailPath = $request->file('thumbnail_file')->store('film-sections', 'public');
            $validated['thumbnail_path'] = $thumbnailPath;
        }

        $validated['published'] = $request->has('published');
        
        $filmSection->update($validated);

        return redirect()->route('admin.film-sections.index')
            ->with('success', 'Film section updated successfully!');
    }

    public function destroy(FilmSection $filmSection)
    {
        // Delete associated thumbnail if exists
        if ($filmSection->thumbnail_path && Storage::disk('public')->exists($filmSection->thumbnail_path)) {
            Storage::disk('public')->delete($filmSection->thumbnail_path);
        }
        
        $filmSection->delete();

        return redirect()->route('admin.film-sections.index')
            ->with('success', 'Film section deleted successfully!');
    }
} 
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrewMember;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crew = CrewMember::orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.crew.index', compact('crew'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crew.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'required|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'image_url' => 'nullable|url',
            'core_team' => 'boolean',
            'published' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle social links
        $socialLinks = [];
        if ($request->filled('linkedin')) {
            $socialLinks['linkedin'] = $request->linkedin;
        }
        if ($request->filled('twitter')) {
            $socialLinks['twitter'] = $request->twitter;
        }
        if ($request->filled('instagram')) {
            $socialLinks['instagram'] = $request->instagram;
        }
        if ($request->filled('website')) {
            $socialLinks['website'] = $request->website;
        }
        
        $validated['social_links'] = $socialLinks;
        $validated['core_team'] = $request->has('core_team');
        $validated['published'] = $request->has('published');

        CrewMember::create($validated);

        return redirect()->route('admin.crew.index')
            ->with('success', 'Team member added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CrewMember $crew)
    {
        return view('admin.crew.show', compact('crew'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CrewMember $crew)
    {
        return view('admin.crew.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CrewMember $crew)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'required|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'image_url' => 'nullable|url',
            'core_team' => 'boolean',
            'published' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle social links
        $socialLinks = [];
        if ($request->filled('linkedin')) {
            $socialLinks['linkedin'] = $request->linkedin;
        }
        if ($request->filled('twitter')) {
            $socialLinks['twitter'] = $request->twitter;
        }
        if ($request->filled('instagram')) {
            $socialLinks['instagram'] = $request->instagram;
        }
        if ($request->filled('website')) {
            $socialLinks['website'] = $request->website;
        }
        
        $validated['social_links'] = $socialLinks;
        $validated['core_team'] = $request->has('core_team');
        $validated['published'] = $request->has('published');

        $crew->update($validated);

        return redirect()->route('admin.crew.index')
            ->with('success', 'Team member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CrewMember $crew)
    {
        $crew->delete();

        return redirect()->route('admin.crew.index')
            ->with('success', 'Team member removed successfully!');
    }
}

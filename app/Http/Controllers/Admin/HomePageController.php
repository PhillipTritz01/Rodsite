<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index()
    {
        $homePage = HomePage::first() ?? new HomePage();
        return view('admin.homepage.index', compact('homePage'));
    }

    public function edit()
    {
        $homePage = HomePage::first() ?? new HomePage();
        return view('admin.homepage.edit', compact('homePage'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_description' => 'nullable|string',
            'hero_button_text' => 'nullable|string|max:255',
            'hero_button_url' => 'nullable|url',
            
            // Hero video and poster
            'hero_video_url' => 'nullable|url',
            'hero_video_file' => 'nullable|file|mimes:mp4,webm,avi,mov|max:102400', // 100MB
            'hero_poster_url' => 'nullable|url',
            'hero_poster_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600', // 25MB
            
            // Full-screen photo
            'fullscreen_photo_url' => 'nullable|url',
            'fullscreen_photo_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            
            // Service backgrounds
            'film_service_bg_url' => 'nullable|url',
            'film_service_bg_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'photography_service_bg_url' => 'nullable|url',
            'photography_service_bg_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'design_service_bg_url' => 'nullable|url',
            'design_service_bg_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            'other_service_bg_url' => 'nullable|url',
            'other_service_bg_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:25600',
            
            'about_title' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',
            'services_title' => 'nullable|string|max:255',
            'services_description' => 'nullable|string',
            'contact_title' => 'nullable|string|max:255',
            'contact_description' => 'nullable|string',
        ]);

        $homePage = HomePage::first() ?? new HomePage();

        // Handle file uploads
        $this->handleFileUpload($request, $homePage, 'hero_video_file', 'hero_video_path', 'home-images/videos');
        $this->handleFileUpload($request, $homePage, 'hero_poster_file', 'hero_poster_path', 'home-images');
        $this->handleFileUpload($request, $homePage, 'fullscreen_photo_file', 'fullscreen_photo_path', 'home-images');
        $this->handleFileUpload($request, $homePage, 'film_service_bg_file', 'film_service_bg_path', 'home-images');
        $this->handleFileUpload($request, $homePage, 'photography_service_bg_file', 'photography_service_bg_path', 'home-images');
        $this->handleFileUpload($request, $homePage, 'design_service_bg_file', 'design_service_bg_path', 'home-images');
        $this->handleFileUpload($request, $homePage, 'other_service_bg_file', 'other_service_bg_path', 'home-images');

        // Update other fields
        $homePage->fill($validated);
        $homePage->save();

        return redirect()->route('admin.homepage.index')->with('success', 'Home page updated successfully!');
    }

    private function handleFileUpload(Request $request, HomePage $homePage, $fileField, $pathField, $directory)
    {
        if ($request->hasFile($fileField)) {
            // Delete old file if it exists
            if ($homePage->$pathField && Storage::disk('public')->exists($homePage->$pathField)) {
                Storage::disk('public')->delete($homePage->$pathField);
            }

            // Store new file
            $file = $request->file($fileField);
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs($directory, $filename, 'public');
            $homePage->$pathField = $path;
        }
    }

    public function deleteFile(Request $request)
    {
        $homePage = HomePage::first();
        if (!$homePage) {
            return response()->json(['success' => false, 'message' => 'Home page not found']);
        }

        $field = $request->input('field');
        $allowedFields = [
            'hero_video_path', 'hero_poster_path', 'fullscreen_photo_path',
            'film_service_bg_path', 'photography_service_bg_path',
            'design_service_bg_path', 'other_service_bg_path'
        ];

        if (!in_array($field, $allowedFields)) {
            return response()->json(['success' => false, 'message' => 'Invalid field']);
        }

        if ($homePage->$field && Storage::disk('public')->exists($homePage->$field)) {
            Storage::disk('public')->delete($homePage->$field);
            $homePage->$field = null;
            $homePage->save();
            
            return response()->json(['success' => true, 'message' => 'File deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'File not found']);
    }
}

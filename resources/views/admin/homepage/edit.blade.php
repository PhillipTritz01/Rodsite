@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Edit Home Page</h1>
        <a href="{{ route('admin.homepage.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to Overview
        </a>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Hero Section -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Hero Section</h2>
            </div>
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Hero Title</label>
                        <input type="text" name="hero_title" value="{{ old('hero_title', $homePage->hero_title) }}" 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Hero Subtitle</label>
                        <input type="text" name="hero_subtitle" value="{{ old('hero_subtitle', $homePage->hero_subtitle) }}" 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Hero Description</label>
                    <textarea name="hero_description" rows="3" 
                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">{{ old('hero_description', $homePage->hero_description) }}</textarea>
                </div>

                <!-- Hero Video Upload -->
                <div class="border rounded-lg p-4">
                    <h3 class="text-lg font-medium mb-4 text-gray-800 dark:text-white">Hero Video</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="hero_video_type" value="upload" class="mr-2" 
                                       {{ $homePage->hasUploadedHeroVideo() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Upload Video File</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="file" name="hero_video_file" accept="video/*" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md">
                                <p class="text-sm text-gray-500 mt-1">Supported formats: MP4, WebM, AVI, MOV. Max size: 100MB</p>
                                @if($homePage->hasUploadedHeroVideo())
                                    <p class="text-sm text-green-600 mt-1">✅ Current: Uploaded video file</p>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="hero_video_type" value="url" class="mr-2"
                                       {{ !$homePage->hasUploadedHeroVideo() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Use Video URL</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="url" name="hero_video_url" value="{{ old('hero_video_url', $homePage->hero_video_url) }}" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                       placeholder="https://example.com/video.mp4">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Poster Upload -->
                <div class="border rounded-lg p-4">
                    <h3 class="text-lg font-medium mb-4 text-gray-800 dark:text-white">Hero Poster Image</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="hero_poster_type" value="upload" class="mr-2"
                                       {{ $homePage->hasUploadedHeroPoster() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Upload Poster Image</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="file" name="hero_poster_file" accept="image/*" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md">
                                <p class="text-sm text-gray-500 mt-1">Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size: 25MB</p>
                                @if($homePage->hasUploadedHeroPoster())
                                    <div class="mt-2">
                                        <img src="{{ $homePage->hero_poster }}" alt="Current poster" class="w-32 h-20 object-cover rounded">
                                        <p class="text-sm text-green-600 mt-1">✅ Current: Uploaded image</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="hero_poster_type" value="url" class="mr-2"
                                       {{ !$homePage->hasUploadedHeroPoster() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Use Poster URL</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="url" name="hero_poster_url" value="{{ old('hero_poster_url', $homePage->hero_poster_url) }}" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                       placeholder="https://example.com/poster.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Images Section -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Background Images</h2>
            </div>
            <div class="p-6 space-y-6">
                
                <!-- Full-screen Photo -->
                <div class="border rounded-lg p-4">
                    <h3 class="text-lg font-medium mb-4 text-gray-800 dark:text-white">Full-screen Photo Section</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="fullscreen_photo_type" value="upload" class="mr-2"
                                       {{ $homePage->hasUploadedFullscreenPhoto() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Upload Image</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="file" name="fullscreen_photo_file" accept="image/*" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md">
                                <p class="text-sm text-gray-500 mt-1">Recommended: 1920x1080px. Max size: 25MB</p>
                                @if($homePage->hasUploadedFullscreenPhoto())
                                    <div class="mt-2">
                                        <img src="{{ $homePage->fullscreen_photo }}" alt="Current fullscreen" class="w-32 h-20 object-cover rounded">
                                        <p class="text-sm text-green-600 mt-1">✅ Current: Uploaded image</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="fullscreen_photo_type" value="url" class="mr-2"
                                       {{ !$homePage->hasUploadedFullscreenPhoto() ? 'checked' : '' }}>
                                <span class="text-gray-700 dark:text-gray-300">Use Image URL</span>
                            </label>
                            <div class="mt-2 ml-6">
                                <input type="url" name="fullscreen_photo_url" value="{{ old('fullscreen_photo_url', $homePage->fullscreen_photo_url) }}" 
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                       placeholder="https://example.com/fullscreen-photo.jpg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Background Images -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                        $services = [
                            'film' => 'Film & Video Service',
                            'photography' => 'Photography Service',
                            'design' => 'Graphic Design Service',
                            'other' => 'Other Service'
                        ];
                    @endphp

                    @foreach($services as $key => $title)
                        <div class="border rounded-lg p-4">
                            <h4 class="font-medium mb-3 text-gray-800 dark:text-white">{{ $title }} Background</h4>
                            <div class="space-y-3">
                                <div>
                                    <label class="flex items-center">
                                        <input type="radio" name="{{ $key }}_service_bg_type" value="upload" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300 text-sm">Upload Image</span>
                                    </label>
                                    <div class="mt-1 ml-6">
                                        <input type="file" name="{{ $key }}_service_bg_file" accept="image/*" 
                                               class="w-full px-2 py-1 border border-gray-300 dark:border-gray-600 rounded text-sm">
                                        @if($homePage->{$key.'_service_bg_path'})
                                            <div class="mt-2">
                                                <img src="{{ $homePage->{$key.'_service_bg'} }}" alt="Current {{ $key }}" class="w-20 h-12 object-cover rounded">
                                                <p class="text-xs text-green-600 mt-1">✅ Uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div>
                                    <label class="flex items-center">
                                        <input type="radio" name="{{ $key }}_service_bg_type" value="url" class="mr-2" checked>
                                        <span class="text-gray-700 dark:text-gray-300 text-sm">Use URL</span>
                                    </label>
                                    <div class="mt-1 ml-6">
                                        <input type="url" name="{{ $key }}_service_bg_url" value="{{ old($key.'_service_bg_url', $homePage->{$key.'_service_bg_url'}) }}" 
                                               class="w-full px-2 py-1 border border-gray-300 dark:border-gray-600 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                               placeholder="https://example.com/bg.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Other Content Section -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Other Content</h2>
            </div>
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Button Text</label>
                        <input type="text" name="hero_button_text" value="{{ old('hero_button_text', $homePage->hero_button_text) }}" 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Button URL</label>
                        <input type="url" name="hero_button_url" value="{{ old('hero_button_url', $homePage->hero_button_url) }}" 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.homepage.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                Update Home Page
            </button>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle between upload and URL options
    const toggleSections = ['hero_video', 'hero_poster', 'fullscreen_photo'];
    
    toggleSections.forEach(section => {
        const radios = document.querySelectorAll(`input[name="${section}_type"]`);
        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                const uploadDiv = this.closest('.space-y-4').querySelector('input[type="file"]').closest('div');
                const urlDiv = this.closest('.space-y-4').querySelector('input[type="url"]').closest('div');
                
                if (this.value === 'upload') {
                    uploadDiv.style.display = 'block';
                    urlDiv.style.display = 'none';
                } else {
                    uploadDiv.style.display = 'none';
                    urlDiv.style.display = 'block';
                }
            });
        });
    });
});
</script>
@endsection 
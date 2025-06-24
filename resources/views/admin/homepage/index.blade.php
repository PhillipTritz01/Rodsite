@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Home Page Management</h1>
        <a href="{{ route('admin.homepage.edit') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit Home Page
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Current Home Page Content</h2>
            
            <!-- Hero Section Preview -->
            <div class="mb-8">
                <h3 class="text-lg font-medium mb-3 text-gray-700 dark:text-gray-300">Hero Section</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Title:</strong> {{ $homePage->hero_title ?: 'Not set' }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Subtitle:</strong> {{ $homePage->hero_subtitle ?: 'Not set' }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Description:</strong> {{ Str::limit($homePage->hero_description ?: 'Not set', 100) }}</p>
                    </div>
                    <div>
                        @if($homePage->hasUploadedHeroVideo())
                            <p class="text-sm text-green-600"><strong>Hero Video:</strong> ✅ Uploaded file</p>
                        @elseif($homePage->hero_video_url)
                            <p class="text-sm text-blue-600"><strong>Hero Video:</strong> 🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600"><strong>Hero Video:</strong> Using default</p>
                        @endif

                        @if($homePage->hasUploadedHeroPoster())
                            <p class="text-sm text-green-600"><strong>Hero Poster:</strong> ✅ Uploaded file</p>
                        @elseif($homePage->hero_poster_url)
                            <p class="text-sm text-blue-600"><strong>Hero Poster:</strong> 🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600"><strong>Hero Poster:</strong> Using default</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Background Images Preview -->
            <div class="mb-8">
                <h3 class="text-lg font-medium mb-3 text-gray-700 dark:text-gray-300">Background Images</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                        <h4 class="font-medium text-gray-800 dark:text-white mb-2">Full-screen Photo</h4>
                        @if($homePage->hasUploadedFullscreenPhoto())
                            <p class="text-sm text-green-600">✅ Uploaded file</p>
                            <img src="{{ $homePage->fullscreen_photo }}" alt="Fullscreen" class="w-full h-20 object-cover rounded mt-2">
                        @elseif($homePage->fullscreen_photo_url)
                            <p class="text-sm text-blue-600">🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600">Using default</p>
                        @endif
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                        <h4 class="font-medium text-gray-800 dark:text-white mb-2">Film Service BG</h4>
                        @if($homePage->film_service_bg_path)
                            <p class="text-sm text-green-600">✅ Uploaded file</p>
                            <img src="{{ $homePage->film_service_bg }}" alt="Film BG" class="w-full h-20 object-cover rounded mt-2">
                        @elseif($homePage->film_service_bg_url)
                            <p class="text-sm text-blue-600">🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600">Using default</p>
                        @endif
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                        <h4 class="font-medium text-gray-800 dark:text-white mb-2">Photography Service BG</h4>
                        @if($homePage->photography_service_bg_path)
                            <p class="text-sm text-green-600">✅ Uploaded file</p>
                            <img src="{{ $homePage->photography_service_bg }}" alt="Photography BG" class="w-full h-20 object-cover rounded mt-2">
                        @elseif($homePage->photography_service_bg_url)
                            <p class="text-sm text-blue-600">🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600">Using default</p>
                        @endif
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                        <h4 class="font-medium text-gray-800 dark:text-white mb-2">Design Service BG</h4>
                        @if($homePage->design_service_bg_path)
                            <p class="text-sm text-green-600">✅ Uploaded file</p>
                            <img src="{{ $homePage->design_service_bg }}" alt="Design BG" class="w-full h-20 object-cover rounded mt-2">
                        @elseif($homePage->design_service_bg_url)
                            <p class="text-sm text-blue-600">🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600">Using default</p>
                        @endif
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                        <h4 class="font-medium text-gray-800 dark:text-white mb-2">Other Service BG</h4>
                        @if($homePage->other_service_bg_path)
                            <p class="text-sm text-green-600">✅ Uploaded file</p>
                            <img src="{{ $homePage->other_service_bg }}" alt="Other BG" class="w-full h-20 object-cover rounded mt-2">
                        @elseif($homePage->other_service_bg_url)
                            <p class="text-sm text-blue-600">🔗 External URL</p>
                        @else
                            <p class="text-sm text-gray-600">Using default</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="border-t pt-4">
                <h3 class="text-lg font-medium mb-3 text-gray-700 dark:text-gray-300">Quick Actions</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('home') }}" target="_blank" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded text-sm">
                        View Live Site
                    </a>
                    <a href="{{ route('admin.homepage.edit') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm">
                        Edit Content
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
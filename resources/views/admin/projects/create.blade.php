@extends('admin.layout')

@section('page-title', 'Create Project')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Create New Project</h1>
        <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-900">
            ← Back to Projects
        </a>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Project Details</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Project Title *
                    </label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Enter project title..." required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Type -->
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                        Project Type *
                    </label>
                    <select name="type" id="type" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select project type...</option>
                        <option value="film" {{ old('type') === 'film' ? 'selected' : '' }}>Film/Video</option>
                        <option value="photography" {{ old('type') === 'photography' ? 'selected' : '' }}>Photography</option>
                        <option value="graphic_design" {{ old('type') === 'graphic_design' ? 'selected' : '' }}>Graphic Design</option>
                        <option value="other" {{ old('type') === 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Client -->
                <div>
                    <label for="client" class="block text-sm font-medium text-gray-700 mb-2">
                        Client
                    </label>
                    <input type="text" name="client" id="client" value="{{ old('client') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Client name...">
                    @error('client')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Completion Date -->
                <div>
                    <label for="completion_date" class="block text-sm font-medium text-gray-700 mb-2">
                        Completion Date
                    </label>
                    <input type="date" name="completion_date" id="completion_date" value="{{ old('completion_date') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('completion_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Sort Order -->
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">
                        Sort Order
                    </label>
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}" min="0"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="0">
                    <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
                    @error('sort_order')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Description -->
            <div class="mt-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Description *
                </label>
                <textarea name="description" id="description" rows="4" required
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Describe the project...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Media</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Image URL -->
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700 mb-2">
                        Featured Image URL
                    </label>
                    <input type="url" name="image_url" id="image_url" value="{{ old('image_url') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="https://example.com/image.jpg">
                    <p class="text-sm text-gray-500 mt-1">URL to the main project image</p>
                    @error('image_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Video URL -->
                <div>
                    <label for="video_url" class="block text-sm font-medium text-gray-700 mb-2">
                        Video URL
                    </label>
                    <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="https://youtube.com/watch?v=...">
                    <p class="text-sm text-gray-500 mt-1">YouTube, Vimeo, or direct video URL</p>
                    @error('video_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Publishing Options</h2>
            
            <div class="space-y-4">
                <!-- Published -->
                <div class="flex items-center">
                    <input type="checkbox" name="published" id="published" value="1" 
                           {{ old('published') ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="published" class="ml-2 block text-sm text-gray-900">
                        <strong>Published</strong>
                        <span class="text-gray-500 block">Make this project visible on the website</span>
                    </label>
                </div>

                <!-- Featured -->
                <div class="flex items-center">
                    <input type="checkbox" name="featured" id="featured" value="1" 
                           {{ old('featured') ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="featured" class="ml-2 block text-sm text-gray-900">
                        <strong>Featured</strong>
                        <span class="text-gray-500 block">Highlight this project in featured sections</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.projects.index') }}" 
               class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Create Project
            </button>
        </div>
    </form>
</div>
@endsection 
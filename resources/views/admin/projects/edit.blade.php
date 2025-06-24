@extends('admin.layout')

@section('page-title', 'Edit Project')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Edit Project: {{ $project->title }}</h1>
        <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-900">
            ← Back to Projects
        </a>
    </div>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Project Details</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Project Title *
                    </label>
                    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
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
                        <option value="film" {{ old('type', $project->type) === 'film' ? 'selected' : '' }}>Film/Video</option>
                        <option value="photography" {{ old('type', $project->type) === 'photography' ? 'selected' : '' }}>Photography</option>
                        <option value="graphic_design" {{ old('type', $project->type) === 'graphic_design' ? 'selected' : '' }}>Graphic Design</option>
                        <option value="other" {{ old('type', $project->type) === 'other' ? 'selected' : '' }}>Other</option>
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
                    <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}"
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
                    <input type="date" name="completion_date" id="completion_date" 
                           value="{{ old('completion_date', $project->completion_date ? $project->completion_date->format('Y-m-d') : '') }}"
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
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $project->sort_order) }}" min="0"
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
                          placeholder="Describe the project...">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Media</h2>
            
            <!-- Featured Image Section -->
            <div class="mb-6">
                <h3 class="text-base font-medium text-gray-900 mb-4">Featured Image</h3>
                
                <!-- Current Image Preview -->
                @if($project->hasUploadedImage() || $project->image_url)
                    <div class="mb-4">
                        <p class="text-sm font-medium text-gray-700 mb-2">Current Image:</p>
                        <div class="flex items-center space-x-4">
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-20 h-20 rounded object-cover border-2 border-gray-300">
                            <div class="text-sm text-gray-600">
                                @if($project->hasUploadedImage())
                                    <p><strong>Uploaded File:</strong> {{ basename($project->image_path) }}</p>
                                @else
                                    <p><strong>External URL:</strong> {{ Str::limit($project->image_url, 50) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                
                <!-- Image Option Toggle -->
                <div class="mb-4">
                    <div class="flex space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="image_option" value="upload" id="upload_option" class="mr-2" 
                                   {{ old('image_option', $project->hasUploadedImage() ? 'upload' : 'url') == 'upload' ? 'checked' : '' }}>
                            <span class="text-sm font-medium text-gray-700">Upload New Image File</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="image_option" value="url" id="url_option" class="mr-2"
                                   {{ old('image_option', $project->hasUploadedImage() ? 'upload' : 'url') == 'url' ? 'checked' : '' }}>
                            <span class="text-sm font-medium text-gray-700">Use Image URL</span>
                        </label>
                    </div>
                </div>

                <!-- File Upload Option -->
                <div id="upload_section" class="space-y-4" style="display: {{ old('image_option', $project->hasUploadedImage() ? 'upload' : 'url') == 'upload' ? 'block' : 'none' }};">
                    <div>
                        <label for="image_file" class="block text-sm font-medium text-gray-700 mb-2">
                            Choose New Image File
                        </label>
                        <input type="file" name="image_file" id="image_file" accept="image/*"
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size: 25MB</p>
                        <p class="text-sm text-gray-500">Leave empty to keep current image</p>
                        @error('image_file')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- URL Option -->
                <div id="url_section" class="space-y-4" style="display: {{ old('image_option', $project->hasUploadedImage() ? 'upload' : 'url') == 'url' ? 'block' : 'none' }};">
                    <div>
                        <label for="image_url" class="block text-sm font-medium text-gray-700 mb-2">
                            Featured Image URL
                        </label>
                        <input type="url" name="image_url" id="image_url" value="{{ old('image_url', $project->image_url) }}"
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="https://example.com/image.jpg">
                        <p class="text-sm text-gray-500 mt-1">URL to the main project image</p>
                        @error('image_url')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Video URL -->
            <div>
                <label for="video_url" class="block text-sm font-medium text-gray-700 mb-2">
                    Video URL
                </label>
                <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $project->video_url) }}"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="https://youtube.com/watch?v=...">
                <p class="text-sm text-gray-500 mt-1">YouTube, Vimeo, or direct video URL</p>
                @error('video_url')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Publishing Options</h2>
            
            <div class="space-y-4">
                <!-- Published -->
                <div class="flex items-center">
                    <input type="checkbox" name="published" id="published" value="1" 
                           {{ old('published', $project->published) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="published" class="ml-2 block text-sm text-gray-900">
                        <strong>Published</strong>
                        <span class="text-gray-500 block">Make this project visible on the website</span>
                    </label>
                </div>

                <!-- Featured -->
                <div class="flex items-center">
                    <input type="checkbox" name="featured" id="featured" value="1" 
                           {{ old('featured', $project->featured) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="featured" class="ml-2 block text-sm text-gray-900">
                        <strong>Featured</strong>
                        <span class="text-gray-500 block">Highlight this project in featured sections</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-between">
            <div>
                <a href="{{ route('admin.projects.show', $project) }}" 
                   class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Preview
                </a>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('admin.projects.index') }}" 
                   class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Update Project
                </button>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadOption = document.getElementById('upload_option');
    const urlOption = document.getElementById('url_option');
    const uploadSection = document.getElementById('upload_section');
    const urlSection = document.getElementById('url_section');
    
    function toggleImageOptions() {
        if (uploadOption.checked) {
            uploadSection.style.display = 'block';
            urlSection.style.display = 'none';
            document.getElementById('image_url').value = '';
        } else {
            uploadSection.style.display = 'none';
            urlSection.style.display = 'block';
            document.getElementById('image_file').value = '';
        }
    }
    
    uploadOption.addEventListener('change', toggleImageOptions);
    urlOption.addEventListener('change', toggleImageOptions);
});
</script>
@endsection 
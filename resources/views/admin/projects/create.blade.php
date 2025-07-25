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

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
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
            
            <!-- Featured Image Section -->
            <div class="mb-6">
                <h3 class="text-base font-medium text-gray-900 mb-4">Featured Image</h3>
                
                <!-- Image Option Toggle -->
                <div class="mb-4">
                    <div class="flex space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="image_option" value="upload" id="upload_option" class="mr-2" checked>
                            <span class="text-sm font-medium text-gray-700">Upload Image File</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="image_option" value="url" id="url_option" class="mr-2">
                            <span class="text-sm font-medium text-gray-700">Use Image URL</span>
                        </label>
                    </div>
                </div>

                <!-- File Upload Option -->
                <div id="upload_section" class="space-y-4">
                    <div>
                        <label for="image_file" class="block text-sm font-medium text-gray-700 mb-2">
                            Choose Image File
                        </label>
                        <input type="file" name="image_file" id="image_file" accept="image/*"
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size: 25MB</p>
                        @error('image_file')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- URL Option -->
                <div id="url_section" class="space-y-4" style="display: none;">
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
                </div>
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

            <!-- Project Gallery -->
            <div class="mt-6">
                <h3 class="text-base font-medium text-gray-900 mb-4">Project Gallery</h3>
                <div>
                    <label for="gallery_files" class="block text-sm font-medium text-gray-700 mb-2">
                        Upload Gallery Images
                    </label>
                    <input type="file" name="gallery_files[]" id="gallery_files" accept="image/*" multiple
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-1">Select multiple images for the project gallery. Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size per file: 25MB</p>
                    @error('gallery_files')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('gallery_files.*')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Gallery Preview -->
                <div id="gallery_preview" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4" style="display: none;">
                    <!-- Preview images will be inserted here -->
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
    
    // Gallery preview functionality
    const galleryInput = document.getElementById('gallery_files');
    const galleryPreview = document.getElementById('gallery_preview');
    
    galleryInput.addEventListener('change', function(e) {
        const files = Array.from(e.target.files);
        galleryPreview.innerHTML = '';
        
        if (files.length > 0) {
            galleryPreview.style.display = 'grid';
            
            files.forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewDiv = document.createElement('div');
                        previewDiv.className = 'relative group';
                        previewDiv.innerHTML = `
                            <img src="${e.target.result}" alt="Gallery image ${index + 1}" 
                                 class="w-full h-24 object-cover rounded-lg border border-gray-300">
                            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center">
                                <span class="text-white text-xs">${file.name}</span>
                            </div>
                        `;
                        galleryPreview.appendChild(previewDiv);
                    };
                    reader.readAsDataURL(file);
                }
            });
        } else {
            galleryPreview.style.display = 'none';
        }
    });
});
</script>
@endsection 
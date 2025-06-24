@extends('admin.layout')

@section('page-title', 'Edit Team Member')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Edit Team Member: {{ $crew->name }}</h1>
        <a href="{{ route('admin.crew.show', $crew) }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
            ← Back to Details
        </a>
    </div>

    <form action="{{ route('admin.crew.update', $crew) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Personal Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Full Name *
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $crew->name) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="Enter full name..." required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Role/Position *
                    </label>
                    <input type="text" name="role" id="role" value="{{ old('role', $crew->role) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="e.g., Creative Director..." required>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email', $crew->email) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="email@starsetmedia.ca">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Phone Number
                    </label>
                    <input type="tel" name="phone" id="phone" value="{{ old('phone', $crew->phone) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="(403) 123-4567">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Location
                    </label>
                    <input type="text" name="location" id="location" value="{{ old('location', $crew->location) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="e.g., Calgary, AB">
                    @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Sort Order -->
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Sort Order
                    </label>
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $crew->sort_order) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="0" min="0">
                    @error('sort_order')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Bio -->
            <div class="mt-6">
                <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Biography *
                </label>
                <textarea name="bio" id="bio" rows="4" required
                          class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                          placeholder="Tell us about this team member...">{{ old('bio', $crew->bio) }}</textarea>
                @error('bio')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Profile Image Section -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Profile Image</h2>
            
            <!-- Current Image Preview -->
            @if($crew->hasUploadedImage() || $crew->image_url)
                <div class="mb-4">
                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Current Image:</p>
                    <div class="flex items-center space-x-4">
                        <img src="{{ $crew->image }}" alt="{{ $crew->name }}" class="w-20 h-20 rounded-full object-cover border-2 border-gray-300">
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            @if($crew->hasUploadedImage())
                                <p><strong>Uploaded File:</strong> {{ basename($crew->image_path) }}</p>
                            @else
                                <p><strong>External URL:</strong> {{ Str::limit($crew->image_url, 50) }}</p>
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
                               {{ old('image_option', $crew->hasUploadedImage() ? 'upload' : 'url') == 'upload' ? 'checked' : '' }}>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Upload New Image File</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="image_option" value="url" id="url_option" class="mr-2"
                               {{ old('image_option', $crew->hasUploadedImage() ? 'upload' : 'url') == 'url' ? 'checked' : '' }}>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Use Image URL</span>
                    </label>
                </div>
            </div>

            <!-- File Upload Option -->
            <div id="upload_section" class="space-y-4" style="display: {{ old('image_option', $crew->hasUploadedImage() ? 'upload' : 'url') == 'upload' ? 'block' : 'none' }};">
                <div>
                    <label for="image_file" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Choose New Image File
                    </label>
                    <input type="file" name="image_file" id="image_file" accept="image/*"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size: 25MB</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Leave empty to keep current image</p>
                    @error('image_file')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- URL Option -->
            <div id="url_section" class="space-y-4" style="display: {{ old('image_option', $crew->hasUploadedImage() ? 'upload' : 'url') == 'url' ? 'block' : 'none' }};">
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Image URL
                    </label>
                    <input type="url" name="image_url" id="image_url" value="{{ old('image_url', $crew->image_url) }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://example.com/image.jpg">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Enter a direct link to an image file</p>
                    @error('image_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Social Links -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Social Links</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- LinkedIn -->
                <div>
                    <label for="linkedin" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        LinkedIn URL
                    </label>
                    <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $crew->social_links['linkedin'] ?? '') }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://linkedin.com/in/username">
                    @error('linkedin')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Twitter -->
                <div>
                    <label for="twitter" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Twitter URL
                    </label>
                    <input type="url" name="twitter" id="twitter" value="{{ old('twitter', $crew->social_links['twitter'] ?? '') }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://twitter.com/username">
                    @error('twitter')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Instagram -->
                <div>
                    <label for="instagram" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Instagram URL
                    </label>
                    <input type="url" name="instagram" id="instagram" value="{{ old('instagram', $crew->social_links['instagram'] ?? '') }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://instagram.com/username">
                    @error('instagram')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Website -->
                <div>
                    <label for="website" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Personal Website
                    </label>
                    <input type="url" name="website" id="website" value="{{ old('website', $crew->social_links['website'] ?? '') }}"
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://yourwebsite.com">
                    @error('website')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Team Settings</h2>
            
            <div class="space-y-4">
                <!-- Published -->
                <div class="flex items-center">
                    <input type="checkbox" name="published" id="published" value="1" {{ old('published', $crew->published) ? 'checked' : '' }}
                           class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="published" class="ml-2 block text-sm text-gray-900 dark:text-white">
                        <strong>Published</strong>
                        <span class="text-gray-500 dark:text-gray-400 block">Show this team member on the website</span>
                    </label>
                </div>

                <!-- Core Team -->
                <div class="flex items-center">
                    <input type="checkbox" name="core_team" id="core_team" value="1" {{ old('core_team', $crew->core_team) ? 'checked' : '' }}
                           class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="core_team" class="ml-2 block text-sm text-gray-900 dark:text-white">
                        <strong>Core Team Member</strong>
                        <span class="text-gray-500 dark:text-gray-400 block">Display prominently as a core team member</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.crew.show', $crew) }}" 
               class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                Update Team Member
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
});
</script>
@endsection 
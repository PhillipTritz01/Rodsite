@extends('admin.layout')

@section('page-title', 'Add Team Member')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Add New Team Member</h1>
        <a href="{{ route('admin.crew.index') }}" class="text-gray-600 hover:text-gray-900">
            ← Back to Team
        </a>
    </div>

    <form action="{{ route('admin.crew.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Personal Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Full Name *
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="Enter full name..." required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                        Role/Position *
                    </label>
                    <input type="text" name="role" id="role" value="{{ old('role') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="e.g., Creative Director..." required>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="email@starsetmedia.ca">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-2">
                        Location
                    </label>
                    <input type="text" name="location" id="location" value="{{ old('location') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="e.g., Calgary, AB">
                    @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Bio -->
            <div class="mt-6">
                <label for="bio" class="block text-sm font-medium text-gray-700 mb-2">
                    Biography *
                </label>
                <textarea name="bio" id="bio" rows="4" required
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                          placeholder="Tell us about this team member...">{{ old('bio') }}</textarea>
                @error('bio')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Profile Image Section -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Profile Image</h2>
            
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
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
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
                        Image URL
                    </label>
                    <input type="url" name="image_url" id="image_url" value="{{ old('image_url') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://example.com/image.jpg">
                    <p class="text-sm text-gray-500 mt-1">Enter a direct link to an image file</p>
                    @error('image_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Social Links -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Social Links</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- LinkedIn -->
                <div>
                    <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-2">
                        LinkedIn URL
                    </label>
                    <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://linkedin.com/in/username">
                    @error('linkedin')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Twitter -->
                <div>
                    <label for="twitter" class="block text-sm font-medium text-gray-700 mb-2">
                        Twitter URL
                    </label>
                    <input type="url" name="twitter" id="twitter" value="{{ old('twitter') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://twitter.com/username">
                    @error('twitter')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Instagram -->
                <div>
                    <label for="instagram" class="block text-sm font-medium text-gray-700 mb-2">
                        Instagram URL
                    </label>
                    <input type="url" name="instagram" id="instagram" value="{{ old('instagram') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://instagram.com/username">
                    @error('instagram')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Website -->
                <div>
                    <label for="website" class="block text-sm font-medium text-gray-700 mb-2">
                        Personal Website
                    </label>
                    <input type="url" name="website" id="website" value="{{ old('website') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="https://yourwebsite.com">
                    @error('website')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Team Settings</h2>
            
            <div class="space-y-4">
                <!-- Published -->
                <div class="flex items-center">
                    <input type="checkbox" name="published" id="published" value="1" checked
                           class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="published" class="ml-2 block text-sm text-gray-900">
                        <strong>Published</strong>
                        <span class="text-gray-500 block">Show this team member on the website</span>
                    </label>
                </div>

                <!-- Core Team -->
                <div class="flex items-center">
                    <input type="checkbox" name="core_team" id="core_team" value="1"
                           class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="core_team" class="ml-2 block text-sm text-gray-900">
                        <strong>Core Team Member</strong>
                        <span class="text-gray-500 block">Display prominently as a core team member</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.crew.index') }}" 
               class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                Add Team Member
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

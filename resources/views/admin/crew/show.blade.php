@extends('admin.layout')

@section('page-title', 'Team Member Details')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div class="flex items-center space-x-4">
        <a href="{{ route('admin.crew.index') }}" class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <h1 class="text-2xl font-bold text-primary-admin">{{ $crew->name }}</h1>
    </div>
    <div class="flex space-x-2">
        <a href="{{ route('admin.crew.edit', $crew) }}" class="bg-blue-600 dark:bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
            <i class="fas fa-edit mr-2"></i>Edit
        </a>
        <button type="button" 
                class="bg-red-600 dark:bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 dark:hover:bg-red-600 transition-colors"
                onclick="deleteMember({{ $crew->id }}, '{{ $crew->name }}')">
            <i class="fas fa-trash mr-2"></i>Delete
        </button>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Information -->
    <div class="lg:col-span-2">
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Personal Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Full Name</label>
                    <p class="text-primary-admin">{{ $crew->name }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Role</label>
                    <p class="text-primary-admin">{{ $crew->role }}</p>
                </div>
                
                @if($crew->email)
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Email</label>
                    <p class="text-primary-admin">
                        <a href="mailto:{{ $crew->email }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            {{ $crew->email }}
                        </a>
                    </p>
                </div>
                @endif
                
                @if($crew->phone)
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Phone</label>
                    <p class="text-primary-admin">
                        <a href="tel:{{ $crew->phone }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            {{ $crew->phone }}
                        </a>
                    </p>
                </div>
                @endif
                
                @if($crew->location)
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Location</label>
                    <p class="text-primary-admin">{{ $crew->location }}</p>
                </div>
                @endif
                
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Sort Order</label>
                    <p class="text-primary-admin">{{ $crew->sort_order ?? 'Not set' }}</p>
                </div>
            </div>
        </div>
        
        <!-- Bio Section -->
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Biography</h2>
            <div class="prose dark:prose-invert max-w-none">
                <p class="text-primary-admin whitespace-pre-wrap">{{ $crew->bio }}</p>
            </div>
        </div>
        
        <!-- Social Links -->
        @if($crew->social_links && count($crew->social_links) > 0)
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Social Links</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if(isset($crew->social_links['linkedin']))
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">LinkedIn</label>
                    <a href="{{ $crew->social_links['linkedin'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        {{ $crew->social_links['linkedin'] }}
                    </a>
                </div>
                @endif
                
                @if(isset($crew->social_links['twitter']))
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Twitter</label>
                    <a href="{{ $crew->social_links['twitter'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        {{ $crew->social_links['twitter'] }}
                    </a>
                </div>
                @endif
                
                @if(isset($crew->social_links['instagram']))
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Instagram</label>
                    <a href="{{ $crew->social_links['instagram'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        {{ $crew->social_links['instagram'] }}
                    </a>
                </div>
                @endif
                
                @if(isset($crew->social_links['website']))
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Website</label>
                    <a href="{{ $crew->social_links['website'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        {{ $crew->social_links['website'] }}
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
    
    <!-- Sidebar -->
    <div class="lg:col-span-1">
        <!-- Profile Image -->
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Profile Image</h2>
            <div class="text-center">
                @if($crew->hasUploadedImage() || $crew->image_url)
                    <img src="{{ $crew->image }}" alt="{{ $crew->name }}" class="w-32 h-32 rounded-full mx-auto object-cover mb-4">
                    <div class="text-sm text-secondary-admin space-y-1">
                        @if($crew->hasUploadedImage())
                            <p><strong>Uploaded File:</strong> {{ basename($crew->image_path) }}</p>
                            <p class="text-xs text-gray-500">Size: {{ number_format(filesize(storage_path('app/public/' . $crew->image_path)) / 1024, 1) }} KB</p>
                        @else
                            <p><strong>External URL</strong></p>
                            <a href="{{ $crew->image_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-xs break-all">
                                {{ Str::limit($crew->image_url, 40) }}
                            </a>
                        @endif
                    </div>
                @else
                    <div class="w-32 h-32 bg-gray-300 dark:bg-gray-600 rounded-full mx-auto flex items-center justify-center mb-4">
                        <span class="text-gray-600 dark:text-gray-300 font-bold text-4xl">{{ substr($crew->name, 0, 1) }}</span>
                    </div>
                    <p class="text-sm text-secondary-admin">No profile image uploaded</p>
                @endif
            </div>
        </div>
        
        <!-- Status Information -->
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Status</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-secondary-admin">Published:</span>
                    @if($crew->published)
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                            Yes
                        </span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200">
                            No
                        </span>
                    @endif
                </div>
                
                <div class="flex justify-between items-center">
                    <span class="text-secondary-admin">Core Team:</span>
                    @if($crew->core_team)
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200">
                            Yes
                        </span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200">
                            No
                        </span>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Timestamps -->
        <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-primary-admin mb-4">Timestamps</h2>
            <div class="space-y-3">
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Created</label>
                    <p class="text-sm text-primary-admin">{{ $crew->created_at->format('M j, Y g:i A') }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-admin mb-1">Last Updated</label>
                    <p class="text-sm text-primary-admin">{{ $crew->updated_at->format('M j, Y g:i A') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deleteMember(memberId, memberName) {
    if (confirm(`Are you sure you want to remove "${memberName}" from the team? This action cannot be undone.`)) {
        // Create a form dynamically to submit the delete request
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/crew/${memberId}`;
        
        // Add CSRF token
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        form.appendChild(csrfToken);
        
        // Add method spoofing for DELETE
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        form.appendChild(methodInput);
        
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endsection 
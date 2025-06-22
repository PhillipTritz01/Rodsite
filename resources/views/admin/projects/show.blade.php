@extends('admin.layout')

@section('page-title', 'View Project')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h1>
        <div class="flex space-x-3">
            <a href="{{ route('admin.projects.edit', $project) }}" 
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Edit Project
            </a>
            <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-900">
                ← Back to Projects
            </a>
        </div>
    </div>

    <div class="space-y-6">
        <!-- Project Status -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-medium text-gray-900">Project Status</h2>
                <div class="flex space-x-2">
                    @if($project->published)
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">
                            ✅ Published
                        </span>
                    @else
                        <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm font-medium rounded-full">
                            📝 Draft
                        </span>
                    @endif
                    
                    @if($project->featured)
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm font-medium rounded-full">
                            ⭐ Featured
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div>
                    <span class="text-gray-500">Type:</span>
                    <span class="ml-2 font-medium capitalize">{{ str_replace('_', ' ', $project->type) }}</span>
                </div>
                <div>
                    <span class="text-gray-500">Client:</span>
                    <span class="ml-2 font-medium">{{ $project->client ?? 'N/A' }}</span>
                </div>
                <div>
                    <span class="text-gray-500">Completion:</span>
                    <span class="ml-2 font-medium">
                        @if($project->completion_date)
                            {{ $project->completion_date->format('M j, Y') }}
                        @else
                            N/A
                        @endif
                    </span>
                </div>
                <div>
                    <span class="text-gray-500">Slug:</span>
                    <span class="ml-2 font-medium font-mono text-xs">{{ $project->slug }}</span>
                </div>
                <div>
                    <span class="text-gray-500">Sort Order:</span>
                    <span class="ml-2 font-medium">{{ $project->sort_order }}</span>
                </div>
                <div>
                    <span class="text-gray-500">Created:</span>
                    <span class="ml-2 font-medium">{{ $project->created_at->format('M j, Y') }}</span>
                </div>
            </div>
        </div>

        <!-- Project Media -->
        @if($project->image_url || $project->video_url)
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Media</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @if($project->image_url)
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Featured Image</h3>
                            <div class="border rounded-lg overflow-hidden">
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" 
                                     class="w-full h-48 object-cover">
                            </div>
                            <p class="text-xs text-gray-500 mt-2 break-all">{{ $project->image_url }}</p>
                        </div>
                    @endif
                    
                    @if($project->video_url)
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Video</h3>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <div class="flex items-center space-x-2 mb-2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700">Video URL</span>
                                </div>
                                <a href="{{ $project->video_url }}" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800 text-sm break-all">
                                    {{ $project->video_url }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Project Description -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">Description</h2>
            <div class="prose max-w-none">
                <p class="text-gray-700 leading-relaxed">{{ $project->description }}</p>
            </div>
        </div>

        <!-- API Information -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
            <h2 class="text-lg font-medium text-blue-900 mb-4">🔗 API Access</h2>
            
            <div class="space-y-3">
                <div>
                    <p class="text-sm font-medium text-blue-900 mb-1">Individual Project API:</p>
                    <div class="bg-white p-3 rounded border font-mono text-sm">
                        GET {{ url("/api/v1/projects/{$project->slug}") }}
                    </div>
                    <a href="{{ url("/api/v1/projects/{$project->slug}") }}" target="_blank" 
                       class="text-blue-600 hover:text-blue-800 text-sm">
                        → View JSON Response
                    </a>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-blue-900 mb-1">Projects by Type API:</p>
                    <div class="bg-white p-3 rounded border font-mono text-sm">
                        GET {{ url("/api/v1/projects/type/{$project->type}") }}
                    </div>
                    <a href="{{ url("/api/v1/projects/type/{$project->type}") }}" target="_blank" 
                       class="text-blue-600 hover:text-blue-800 text-sm">
                        → View {{ ucfirst(str_replace('_', ' ', $project->type)) }} Projects
                    </a>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex justify-between items-center">
            <div class="flex space-x-3">
                <a href="{{ route('admin.projects.edit', $project) }}" 
                   class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Edit Project
                </a>
                
                @if($project->published)
                    <a href="{{ route('admin.projects.index') }}" 
                       class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                        ✅ Live on Website
                    </a>
                @else
                    <span class="bg-gray-400 text-white px-6 py-2 rounded-lg cursor-not-allowed">
                        📝 Draft Mode
                    </span>
                @endif
            </div>
            
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="text-red-600 hover:text-red-800 text-sm font-medium"
                        onclick="return confirm('Are you sure you want to delete this project? This action cannot be undone.')">
                    🗑️ Delete Project
                </button>
            </form>
        </div>
    </div>
</div>
@endsection 
@extends('admin.layout')

@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Projects Stats -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900">Total Projects</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['projects'] }}</p>
            </div>
        </div>
    </div>

    <!-- Published Projects -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900">Published</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['published_projects'] }}</p>
            </div>
        </div>
    </div>

    <!-- Team Members -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900">Team Members</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['crew_members'] }}</p>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900">Services</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['services'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Quick Actions</h3>
        <div class="space-y-3">
            <a href="{{ route('admin.projects.create') }}" class="block w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-center">
                + Add New Project
            </a>
            <a href="{{ route('admin.crew.create') }}" class="block w-full bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors text-center">
                + Add Team Member
            </a>
            <a href="{{ route('admin.services.create') }}" class="block w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors text-center">
                + Add Service
            </a>
            <a href="{{ route('home') }}" target="_blank" class="block w-full bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-center">
                🌐 View Website
            </a>
        </div>
    </div>

    <!-- Recent Projects -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Projects</h3>
        @if($recent_projects->count() > 0)
            <div class="space-y-3">
                @foreach($recent_projects as $project)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h4 class="font-medium text-sm">{{ $project->title }}</h4>
                            <p class="text-xs text-gray-500">{{ $project->type }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            @if($project->featured)
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Featured</span>
                            @endif
                            @if($project->published)
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Published</span>
                            @else
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Draft</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.projects.index') }}" class="text-blue-600 hover:text-blue-700 text-sm font-medium">View All Projects →</a>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-gray-500 text-sm">No projects yet</p>
                <a href="{{ route('admin.projects.create') }}" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Create your first project</a>
            </div>
        @endif
    </div>

    <!-- System Info -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">System Info</h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Laravel Version</span>
                <span class="text-sm font-medium">{{ app()->version() }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">PHP Version</span>
                <span class="text-sm font-medium">{{ PHP_VERSION }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Environment</span>
                <span class="text-sm font-medium capitalize">{{ app()->environment() }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Database</span>
                <span class="text-sm font-medium">SQLite</span>
            </div>
        </div>
        
        <div class="mt-6 pt-4 border-t border-gray-200">
            <h4 class="text-sm font-medium text-gray-900 mb-2">CMS Features</h4>
            <ul class="text-xs text-gray-600 space-y-1">
                <li>✅ Project Management</li>
                <li>✅ Team Management</li>
                <li>✅ Service Management</li>
                <li>✅ Image Upload Support</li>
                <li>✅ SEO-Friendly URLs</li>
                <li>✅ API Ready</li>
            </ul>
        </div>
    </div>
</div>

            <div class="bg-gradient-to-r from-accent to-accent-dark rounded-lg p-6 text-white">
                <h3 class="text-lg font-bold mb-2">Welcome to Starset Media CMS!</h3>
                <p class="text-accent-light/80 mb-4">
                    Your custom-built content management system is ready to use. Manage your projects, team members, and services with ease.
                    All content is automatically available via API endpoints for maximum flexibility.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('admin.projects.index') }}" class="bg-white text-accent px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        Manage Projects
                    </a>
                    <a href="{{ route('admin.crew.index') }}" class="bg-white text-accent px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        Manage Team
                    </a>
                    <a href="{{ route('home') }}" target="_blank" class="border border-accent-light text-white px-4 py-2 rounded-lg font-medium hover:bg-accent-dark transition-colors">
                        View Website
                    </a>
                </div>
            </div>
@endsection 
@extends('admin.layout')

@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Projects Stats -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Total Projects</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['projects'] }}</p>
            </div>
        </div>
    </div>

    <!-- Published Projects -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Published</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['published_projects'] }}</p>
            </div>
        </div>
    </div>

    <!-- Team Members -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Team Members</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['crew_members'] }}</p>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Services</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['services'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Quick Actions -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
        <div class="space-y-3">
            <a href="{{ route('admin.projects.create') }}" class="block w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors text-center">
                + Add New Project
            </a>
            <a href="{{ route('admin.crew.create') }}" class="block w-full bg-purple-600 hover:bg-purple-700 dark:bg-purple-500 dark:hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors text-center">
                + Add Team Member
            </a>
            <a href="{{ route('admin.services.create') }}" class="block w-full bg-green-600 hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors text-center">
                + Add Service
            </a>
            <a href="{{ route('home') }}" target="_blank" class="block w-full bg-gray-600 hover:bg-gray-700 dark:bg-gray-500 dark:hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors text-center">
                🌐 View Website
            </a>
        </div>
    </div>

    <!-- Recent Projects -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Recent Projects</h3>
        @if($recent_projects->count() > 0)
            <div class="space-y-3">
                @foreach($recent_projects as $project)
                    <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div>
                            <h4 class="font-medium text-sm text-gray-900 dark:text-gray-100">{{ $project->title }}</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $project->type }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            @if($project->featured)
                                <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs px-2 py-1 rounded">Featured</span>
                            @endif
                            @if($project->published)
                                <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-2 py-1 rounded">Published</span>
                            @else
                                <span class="bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 text-xs px-2 py-1 rounded">Draft</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.projects.index') }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 text-sm font-medium">View All Projects →</a>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-gray-500 dark:text-gray-400 text-sm">No projects yet</p>
                <a href="{{ route('admin.projects.create') }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 text-sm font-medium">Create your first project</a>
            </div>
        @endif
    </div>

    <!-- System Info -->
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">System Info</h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">Laravel Version</span>
                <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ app()->version() }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">PHP Version</span>
                <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ PHP_VERSION }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">Environment</span>
                <span class="text-sm font-medium text-gray-900 dark:text-gray-100 capitalize">{{ app()->environment() }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">Database</span>
                <span class="text-sm font-medium text-gray-900 dark:text-gray-100">SQLite</span>
            </div>
        </div>
        
        <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-600">
            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">CMS Features</h4>
            <ul class="text-xs text-gray-600 dark:text-gray-400 space-y-1">
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

<!-- Welcome Section -->
<div class="bg-gradient-to-r from-amber-500 to-orange-600 dark:from-amber-600 dark:to-orange-700 rounded-lg p-6 text-white">
    <h3 class="text-lg font-bold mb-2">Welcome to Starset Media CMS!</h3>
    <p class="text-amber-100 dark:text-amber-50 mb-4 opacity-90">
        Your custom-built content management system is ready to use. Manage your projects, team members, and services with ease.
        All content is automatically available via API endpoints for maximum flexibility.
    </p>
    <div class="flex flex-wrap gap-4">
        <a href="{{ route('admin.projects.index') }}" class="bg-white hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 text-amber-600 dark:text-amber-400 px-4 py-2 rounded-lg font-medium transition-colors">
            Manage Projects
        </a>
        <a href="{{ route('admin.crew.index') }}" class="bg-white hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 text-amber-600 dark:text-amber-400 px-4 py-2 rounded-lg font-medium transition-colors">
            Manage Team
        </a>
        <a href="{{ route('home') }}" target="_blank" class="border border-amber-200 dark:border-amber-400 text-white hover:bg-amber-600 dark:hover:bg-amber-500 px-4 py-2 rounded-lg font-medium transition-colors">
            View Website
        </a>
    </div>
</div>
@endsection 
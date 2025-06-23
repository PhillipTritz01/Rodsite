@extends('admin.layout')

@section('page-title', 'Projects')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-primary-admin">Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 dark:bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
        + Add New Project
    </a>
</div>

@if($projects->count() > 0)
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200 dark:divide-gray-600 table-fixed">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="w-2/5 px-4 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Project
                        </th>
                        <th class="w-20 px-4 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Type
                        </th>
                        <th class="w-24 px-4 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Client
                        </th>
                        <th class="w-28 px-4 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Status
                        </th>
                        <th class="w-24 px-4 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Date
                        </th>
                        <th class="w-32 px-4 py-3 text-right text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                    @foreach($projects as $project)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-4 py-4">
                                <div class="flex items-start space-x-3">
                                    @if($project->image_url)
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-lg object-cover" src="{{ $project->image_url }}" alt="{{ $project->title }}">
                                        </div>
                                    @else
                                        <div class="flex-shrink-0 h-10 w-10 bg-gray-300 dark:bg-gray-600 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm font-medium text-primary-admin break-words">{{ $project->title }}</div>
                                        <div class="text-sm text-secondary-admin break-words mt-1">{{ $project->description }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    @if($project->type === 'film') bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200
                                    @elseif($project->type === 'photography') bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200
                                    @elseif($project->type === 'graphic_design') bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200
                                    @else bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 @endif">
                                    {{ ucfirst(str_replace('_', ' ', $project->type)) }}
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-primary-admin">
                                <div class="break-words">{{ $project->client ?? 'N/A' }}</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex flex-col space-y-1">
                                    @if($project->published)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                            Published
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200">
                                            Draft
                                        </span>
                                    @endif
                                    @if($project->featured)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200">
                                            Featured
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-secondary-admin">
                                <div class="break-words">
                                    @if($project->completion_date)
                                        {{ $project->completion_date->format('M j, Y') }}
                                    @else
                                        {{ $project->created_at->format('M j, Y') }}
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-4 text-right text-sm font-medium">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.projects.show', $project) }}" 
                                       class="btn btn-info btn-sm" 
                                       title="View Details"
                                       data-bs-toggle="tooltip">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" 
                                       class="btn btn-primary btn-sm" 
                                       title="Edit Project"
                                       data-bs-toggle="tooltip">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn btn-danger btn-sm" 
                                            title="Delete Project"
                                            data-bs-toggle="tooltip"
                                            onclick="deleteProject({{ $project->id }}, '{{ $project->title }}')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    @if($projects->hasPages())
        <div class="mt-6">
            {{ $projects->links() }}
        </div>
    @endif
@else
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
        <svg class="w-16 h-16 text-gray-400 dark:text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
        </svg>
        <h3 class="text-lg font-medium text-primary-admin mb-2">No projects yet</h3>
        <p class="text-secondary-admin mb-6">Start building your portfolio by creating your first project.</p>
        <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 dark:bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
            Create Your First Project
        </a>
    </div>
@endif

<script>
function deleteProject(projectId, projectTitle) {
    if (confirm(`Are you sure you want to delete "${projectTitle}"? This action cannot be undone.`)) {
        // Create a form dynamically to submit the delete request
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/projects/${projectId}`;
        
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

// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
@endsection 
@extends('admin.layout')

@section('page-title', 'Team Members')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-primary-admin">Team Members</h1>
    <a href="{{ route('admin.crew.create') }}" class="bg-purple-600 dark:bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-700 dark:hover:bg-purple-600 transition-colors">
        + Add Team Member
    </a>
</div>

@if($crew->count() > 0)
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Member
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Role
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Contact
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-secondary-admin uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                    @foreach($crew as $member)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($member->image_url)
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-12 w-12 rounded-full object-cover" src="{{ $member->image_url }}" alt="{{ $member->name }}">
                                        </div>
                                    @else
                                        <div class="flex-shrink-0 h-12 w-12 bg-gray-300 dark:bg-gray-600 rounded-full flex items-center justify-center">
                                            <span class="text-gray-600 dark:text-gray-300 font-bold text-lg">{{ substr($member->name, 0, 1) }}</span>
                                        </div>
                                    @endif
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-primary-admin">{{ $member->name }}</div>
                                        <div class="text-sm text-secondary-admin">{{ $member->location ?? 'Location not set' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-primary-admin">{{ $member->role }}</div>
                                <div class="text-sm text-secondary-admin">{{ Str::limit($member->bio, 40) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary-admin">
                                @if($member->email)
                                    <div>📧 {{ $member->email }}</div>
                                @endif
                                @if($member->phone)
                                    <div>📞 {{ $member->phone }}</div>
                                @endif
                                @if(!$member->email && !$member->phone)
                                    <span class="text-secondary-admin">No contact info</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex flex-col space-y-1">
                                    @if($member->published)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                            Published
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200">
                                            Hidden
                                        </span>
                                    @endif
                                    @if($member->core_team)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200">
                                            Core Team
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.crew.show', $member) }}" 
                                       class="btn btn-info btn-sm" 
                                       title="View Details"
                                       data-bs-toggle="tooltip">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.crew.edit', $member) }}" 
                                       class="btn btn-primary btn-sm" 
                                       title="Edit Team Member"
                                       data-bs-toggle="tooltip">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn btn-danger btn-sm" 
                                            title="Remove Team Member"
                                            data-bs-toggle="tooltip"
                                            onclick="deleteMember({{ $member->id }}, '{{ $member->name }}')">
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
    @if($crew->hasPages())
        <div class="mt-6">
            {{ $crew->links() }}
        </div>
    @endif
@else
    <div class="admin-card bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
        <svg class="w-16 h-16 text-gray-400 dark:text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
        </svg>
        <h3 class="text-lg font-medium text-primary-admin mb-2">No team members yet</h3>
        <p class="text-secondary-admin mb-6">Start building your team by adding your first team member.</p>
        <a href="{{ route('admin.crew.create') }}" class="bg-purple-600 dark:bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-700 dark:hover:bg-purple-600 transition-colors">
            Add First Team Member
        </a>
    </div>
@endif

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

// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
@endsection 
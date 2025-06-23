@extends('admin.layout')

@section('title', 'Services Management')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-primary-admin">📋 Services Management</h1>
            <p class="text-secondary-admin mb-0">Manage your services that appear on the website</p>
        </div>
        <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-lg shadow-sm">
            <i class="fas fa-plus-circle me-2"></i>
            <strong>Add New Service</strong>
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success-admin alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Services Cards or Empty State -->
    @if($services->count() > 0)
        <!-- Services Statistics -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="admin-card card bg-primary text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-concierge-bell fa-2x mb-2"></i>
                        <h4 class="mb-0">{{ $services->total() }}</h4>
                        <small>Total Services</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="admin-card card bg-success text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-eye fa-2x mb-2"></i>
                        <h4 class="mb-0">{{ $services->where('published', true)->count() }}</h4>
                        <small>Published</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="admin-card card bg-warning text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-2x mb-2"></i>
                        <h4 class="mb-0">{{ $services->where('featured', true)->count() }}</h4>
                        <small>Featured</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="admin-card card bg-secondary text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-eye-slash fa-2x mb-2"></i>
                        <h4 class="mb-0">{{ $services->where('published', false)->count() }}</h4>
                        <small>Drafts</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Table -->
        <div class="admin-card card shadow-sm">
            <div class="card-header bg-white dark:bg-gray-800 border-bottom dark:border-gray-600">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary-admin">
                        <i class="fas fa-list me-2 text-primary"></i>
                        All Services ({{ $services->total() }})
                    </h5>
                    <a href="{{ route('services') }}" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-external-link-alt me-1"></i>
                        View Public Page
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 table-dark-admin">
                        <thead class="table-light dark:!bg-gray-700">
                            <tr>
                                <th width="60" class="text-center text-primary-admin">Order</th>
                                <th class="text-primary-admin">Service Details</th>
                                <th width="120" class="text-center text-primary-admin">Status</th>
                                <th width="100" class="text-center text-primary-admin">Featured</th>
                                <th width="120" class="text-center text-primary-admin">Price</th>
                                <th width="200" class="text-center text-primary-admin">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <span class="badge badge-light-admin fs-6">{{ $service->sort_order }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($service->icon)
                                                <div class="me-3 text-primary">
                                                    <i class="{{ $service->icon }} fa-2x"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <h6 class="mb-1 fw-bold text-primary-admin">{{ $service->title }}</h6>
                                                <small class="text-secondary-admin">{{ $service->slug }}</small>
                                                <p class="mb-0 text-secondary-admin small">{{ Str::limit($service->description, 80) }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @if($service->published)
                                            <span class="badge bg-success fs-6">
                                                <i class="fas fa-check me-1"></i>Published
                                            </span>
                                        @else
                                            <span class="badge bg-secondary fs-6">
                                                <i class="fas fa-clock me-1"></i>Draft
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($service->featured)
                                            <span class="badge bg-warning fs-6">
                                                <i class="fas fa-star me-1"></i>Featured
                                            </span>
                                        @else
                                            <span class="badge badge-light-admin fs-6">No</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($service->price_from)
                                            <span class="fw-bold text-success">${{ number_format($service->price_from, 0) }}+</span>
                                        @else
                                            <span class="text-secondary-admin">Quote</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.services.show', $service) }}" 
                                               class="btn btn-info btn-sm" 
                                               title="View Details"
                                               data-bs-toggle="tooltip">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.services.edit', $service) }}" 
                                               class="btn btn-primary btn-sm" 
                                               title="Edit Service"
                                               data-bs-toggle="tooltip">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" 
                                                    class="btn btn-danger btn-sm" 
                                                    title="Delete Service"
                                                    data-bs-toggle="tooltip"
                                                    onclick="deleteService({{ $service->id }}, '{{ $service->title }}')">
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
            @if($services->hasPages())
                <div class="card-footer bg-white dark:bg-gray-800 border-top dark:border-gray-600">
                    {{ $services->links() }}
                </div>
            @endif
        </div>

        <!-- Quick Actions Panel -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="admin-card card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">
                            <i class="fas fa-bolt me-2"></i>
                            Quick Actions
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('admin.services.create') }}" class="btn btn-success w-100">
                                    <i class="fas fa-plus me-2"></i>Add New Service
                                </a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('services') }}" target="_blank" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-external-link-alt me-2"></i>View Website
                                </a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary w-100">
                                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                </a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <button type="button" class="btn btn-outline-info w-100" onclick="refreshPage()">
                                    <i class="fas fa-sync-alt me-2"></i>Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- Empty State -->
        <div class="admin-card card border-0 shadow-lg">
            <div class="card-body text-center py-5">
                <div class="mb-4">
                    <i class="fas fa-concierge-bell fa-4x text-secondary-admin opacity-50"></i>
                </div>
                <h3 class="text-primary-admin mb-3">No Services Yet</h3>
                <p class="text-secondary-admin mb-4 lead">
                    Get started by creating your first service to showcase what you offer.
                </p>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-lg shadow-sm">
                    <i class="fas fa-plus-circle me-2"></i>
                    Create Your First Service
                </a>
                
                <div class="mt-5 pt-4 border-top">
                    <h6 class="text-primary-admin mb-3">What you can do with services:</h6>
                    <div class="row text-start">
                        <div class="col-md-6">
                            <ul class="list-unstyled text-secondary-admin">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Showcase your service offerings</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Set pricing and descriptions</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Add beautiful icons and images</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled text-secondary-admin">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Control visibility and ordering</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Feature important services</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Track engagement via API</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<!-- Delete Confirmation Modal (Bootstrap 5) -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary-admin" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-primary-admin">
                Are you sure you want to delete the service "<span id="serviceTitle" class="fw-bold"></span>"?
                <br><small class="text-secondary-admin">This action cannot be undone.</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-1"></i>Delete Service
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function deleteService(id, title) {
    document.getElementById('serviceTitle').textContent = title;
    document.getElementById('deleteForm').action = `/admin/services/${id}`;
    
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

function refreshPage() {
    window.location.reload();
}

// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
@endsection 
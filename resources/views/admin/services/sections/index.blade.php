@extends('admin.layout')

@section('title', 'Manage Service Sections')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-dark">📄 {{ $service->title }} - Sections</h1>
            <p class="text-muted mb-0">Manage the content sections for this service's dedicated page</p>
        </div>
        <div>
            <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>
                Back to Services
            </a>
            <a href="{{ route('admin.services.sections.create', $service) }}" class="btn btn-primary btn-lg">
                <i class="fas fa-plus me-2"></i>
                Add Section
            </a>
        </div>
    </div>

    <!-- Service Info Card -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <img src="{{ $service->image }}" alt="{{ $service->title }}" class="img-fluid rounded" style="max-height: 80px;">
                </div>
                <div class="col-md-8">
                    <h5 class="mb-1">{{ $service->title }}</h5>
                    <p class="text-muted mb-0">{{ $service->description }}</p>
                    @if($service->page_subtitle)
                        <small class="text-info">Subtitle: {{ $service->page_subtitle }}</small>
                    @endif
                </div>
                <div class="col-md-2 text-end">
                    @if($service->has_dedicated_page)
                        <a href="{{ $service->route }}" target="_blank" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-external-link-alt me-1"></i>
                            View Page
                        </a>
                    @else
                        <span class="badge bg-warning">No Dedicated Page</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Sections List -->
    @if($sections->count() > 0)
        <div class="row">
            @foreach($sections as $section)
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">
                                <span class="badge bg-primary me-2">#{{ $section->sort_order }}</span>
                                {{ $section->title }}
                            </h6>
                            <div>
                                @if($section->published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ $section->image }}" alt="{{ $section->title }}" 
                                         class="img-fluid rounded" style="max-height: 80px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <p class="text-muted small mb-2">{{ Str::limit($section->description, 100) }}</p>
                                    @if($section->button_url)
                                        <small class="text-info">
                                            <i class="fas fa-link me-1"></i>
                                            Button: {{ $section->button_text }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('admin.services.sections.edit', [$service, $section]) }}" 
                                   class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit me-1"></i>
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('admin.services.sections.destroy', [$service, $section]) }}" 
                                      class="d-inline" onsubmit="return confirm('Are you sure you want to delete this section?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash me-1"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Empty State -->
        <div class="card shadow-sm">
            <div class="card-body text-center py-5">
                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No Sections Yet</h4>
                <p class="text-muted mb-4">
                    Start building your service page by adding content sections. Each section will appear as an alternating layout on the service page.
                </p>
                <a href="{{ route('admin.services.sections.create', $service) }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>
                    Add First Section
                </a>
            </div>
        </div>
    @endif
</div>
@endsection 
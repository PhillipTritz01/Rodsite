@extends('admin.layout')

@section('title', 'View Service')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Service Details</h1>
        <div>
            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary me-2">
                <i class="fas fa-edit"></i> Edit Service
            </a>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Services
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ $service->title }}</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="text-muted">Description</h6>
                        <p>{{ $service->description }}</p>
                    </div>

                    @if($service->features_list)
                        <div class="mb-4">
                            <h6 class="text-muted">Features</h6>
                            <ul class="list-unstyled">
                                @foreach($service->features_list as $feature)
                                    <li><i class="fas fa-check text-success me-2"></i>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($service->image_url)
                        <div class="mb-4">
                            <h6 class="text-muted">Service Image</h6>
                            <img src="{{ $service->image_url }}" alt="{{ $service->title }}" 
                                 class="img-fluid rounded" style="max-width: 400px;">
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Service Information</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Slug:</strong>
                        <span class="text-muted">{{ $service->slug }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Status:</strong>
                        @if($service->published)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-secondary">Draft</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <strong>Featured:</strong>
                        @if($service->featured)
                            <span class="badge bg-warning">Yes</span>
                        @else
                            <span class="badge bg-light text-dark">No</span>
                        @endif
                    </div>

                    @if($service->icon)
                        <div class="mb-3">
                            <strong>Icon:</strong>
                            <div class="mt-1">
                                <i class="{{ $service->icon }} fa-2x"></i>
                                <br>
                                <small class="text-muted">{{ $service->icon }}</small>
                            </div>
                        </div>
                    @endif

                    @if($service->price_from)
                        <div class="mb-3">
                            <strong>Price From:</strong>
                            <span class="text-success">${{ number_format($service->price_from, 2) }}</span>
                        </div>
                    @endif

                    <div class="mb-3">
                        <strong>Sort Order:</strong>
                        <span class="text-muted">{{ $service->sort_order }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Created:</strong>
                        <div class="text-muted">{{ $service->created_at->format('M d, Y \a\t g:i A') }}</div>
                    </div>

                    <div class="mb-3">
                        <strong>Last Updated:</strong>
                        <div class="text-muted">{{ $service->updated_at->format('M d, Y \a\t g:i A') }}</div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit Service
                        </a>
                        
                        <form method="POST" action="{{ route('admin.services.destroy', $service) }}" 
                              onsubmit="return confirm('Are you sure you want to delete this service?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fas fa-trash"></i> Delete Service
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
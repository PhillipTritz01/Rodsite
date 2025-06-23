@extends('admin.layout')

@section('title', 'Edit Service')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-dark">✏️ Edit Service</h1>
            <p class="text-muted mb-0">Update: <strong>{{ $service->title }}</strong></p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.services.show', $service) }}" class="btn btn-outline-info btn-lg">
                <i class="fas fa-eye me-2"></i>
                View Details
            </a>
            <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary btn-lg">
                <i class="fas fa-arrow-left me-2"></i>
                Back to Services
            </a>
        </div>
    </div>

    <!-- Error Display -->
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Main Form -->
    <form method="POST" action="{{ route('admin.services.update', $service) }}">
        @csrf
        @method('PUT')
        
        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <!-- Basic Information -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Basic Information
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="title" class="form-label fs-6 fw-bold">
                                Service Title <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $service->title) }}" 
                                   placeholder="e.g., Professional Photography Services" required>
                            <div class="form-text">This will be the main title shown to customers</div>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fs-6 fw-bold">
                                Service Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="5" required
                                      placeholder="Describe what this service offers and how it benefits customers...">{{ old('description', $service->description) }}</textarea>
                            <div class="form-text">Write a compelling description that explains your service</div>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-list-check me-2"></i>
                            Service Features
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="features" class="form-label fs-6 fw-bold">Features & Benefits</label>
                            <textarea class="form-control @error('features') is-invalid @enderror" 
                                      id="features" name="features" rows="8" 
                                      placeholder="Professional Equipment&#10;Expert Team&#10;Quick Turnaround&#10;High Quality Results&#10;Competitive Pricing&#10;24/7 Support">{{ old('features', $service->features_text) }}</textarea>
                            <div class="form-text">
                                <i class="fas fa-lightbulb text-warning me-1"></i>
                                <strong>Tip:</strong> Enter each feature on a separate line. These will appear as bullet points.
                            </div>
                            @error('features')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Current Service Preview -->
                @if($service->image_url || $service->icon)
                <div class="card shadow-sm mb-4 border-info">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-preview me-2"></i>
                            Current Service Preview
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            @if($service->icon)
                            <div class="col-auto">
                                <i class="{{ $service->icon }} fa-3x text-primary"></i>
                            </div>
                            @endif
                            <div class="col">
                                <h6 class="mb-1">{{ $service->title }}</h6>
                                <p class="text-muted mb-2">{{ Str::limit($service->description, 100) }}</p>
                                @if($service->price_from)
                                <span class="badge bg-success">From ${{ number_format($service->price_from, 0) }}</span>
                                @endif
                                @if($service->featured)
                                <span class="badge bg-warning">Featured</span>
                                @endif
                                @if($service->published)
                                <span class="badge bg-success">Published</span>
                                @else
                                <span class="badge bg-secondary">Draft</span>
                                @endif
                            </div>
                            @if($service->image_url)
                            <div class="col-auto">
                                <img src="{{ $service->image_url }}" alt="{{ $service->title }}" 
                                     class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Settings Column -->
            <div class="col-lg-4">
                <!-- Visual Settings -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-paint-brush me-2"></i>
                            Visual Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="icon" class="form-label fw-bold">Service Icon</label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                   id="icon" name="icon" value="{{ old('icon', $service->icon) }}" 
                                   placeholder="fas fa-camera">
                            <div class="form-text">
                                <a href="https://fontawesome.com/icons" target="_blank" class="text-decoration-none">
                                    <i class="fas fa-external-link-alt me-1"></i>Browse FontAwesome Icons
                                </a>
                            </div>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image_url" class="form-label fw-bold">Service Image URL</label>
                            <input type="url" class="form-control @error('image_url') is-invalid @enderror" 
                                   id="image_url" name="image_url" value="{{ old('image_url', $service->image_url) }}" 
                                   placeholder="https://example.com/service-image.jpg">
                            <div class="form-text">Link to an image that represents this service</div>
                            @error('image_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Pricing & Options -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-dollar-sign me-2"></i>
                            Pricing & Options
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="price_from" class="form-label fw-bold">Starting Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control @error('price_from') is-invalid @enderror" 
                                       id="price_from" name="price_from" value="{{ old('price_from', $service->price_from) }}" 
                                       step="0.01" min="0" placeholder="299.99">
                            </div>
                            <div class="form-text">Leave empty if pricing varies or is quote-based</div>
                            @error('price_from')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sort_order" class="form-label fw-bold">Display Order</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}" 
                                   min="0" placeholder="1">
                            <div class="form-text">Lower numbers appear first (1, 2, 3...)</div>
                            @error('sort_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured" 
                                       {{ old('featured', $service->featured) ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="featured">
                                    <i class="fas fa-star text-warning me-1"></i>
                                    Featured Service
                                </label>
                            </div>
                            <div class="form-text">Featured services get special highlighting</div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="published" name="published" 
                                       {{ old('published', $service->published) ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="published">
                                    <i class="fas fa-eye text-success me-1"></i>
                                    Published
                                </label>
                            </div>
                            <div class="form-text">Only published services appear on your website</div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card shadow-sm border-primary">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">
                            <i class="fas fa-save me-2"></i>
                            Update Service
                        </h6>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                            <i class="fas fa-save me-2"></i>
                            <strong>Update Service</strong>
                        </button>
                        
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="{{ route('admin.services.show', $service) }}" class="btn btn-outline-info w-100">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary w-100">
                                    <i class="fas fa-times me-1"></i>
                                    Cancel
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>
                                Last updated: {{ $service->updated_at->format('M d, Y \a\t g:i A') }}
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="card shadow-sm border-danger mt-4">
                    <div class="card-header bg-danger text-white">
                        <h6 class="mb-0">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Danger Zone
                        </h6>
                    </div>
                    <div class="card-body text-center">
                        <p class="text-muted small mb-3">Permanently delete this service</p>
                        <button type="button" class="btn btn-outline-danger w-100" 
                                onclick="deleteService({{ $service->id }}, '{{ $service->title }}')">
                            <i class="fas fa-trash me-2"></i>
                            Delete Service
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Confirm Delete
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete this service?</p>
                <div class="alert alert-warning">
                    <strong>Service:</strong> <span id="serviceTitle"></span>
                </div>
                <p class="text-muted small mb-0">
                    <i class="fas fa-info-circle me-1"></i>
                    This action cannot be undone and will remove the service from your website.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>Cancel
                </button>
                <form id="deleteForm" method="POST" class="d-inline">
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
    document.getElementById('deleteForm').action = '/admin/services/' + id;
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
}

// Live preview of icon
document.getElementById('icon').addEventListener('input', function() {
    const iconValue = this.value.trim();
    const preview = document.getElementById('iconPreview');
    
    if (!preview) {
        const previewDiv = document.createElement('div');
        previewDiv.id = 'iconPreview';
        previewDiv.className = 'mt-2 text-center';
        this.parentNode.appendChild(previewDiv);
    }
    
    if (iconValue) {
        document.getElementById('iconPreview').innerHTML = 
            `<i class="${iconValue} fa-2x text-primary"></i><br><small class="text-muted">Preview</small>`;
    } else {
        document.getElementById('iconPreview').innerHTML = '';
    }
});
</script>
@endsection 
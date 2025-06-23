@extends('admin.layout')

@section('title', 'Add New Service')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-dark">➕ Add New Service</h1>
            <p class="text-muted mb-0">Create a new service to showcase on your website</p>
        </div>
        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary btn-lg">
            <i class="fas fa-arrow-left me-2"></i>
            Back to Services
        </a>
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
    <form method="POST" action="{{ route('admin.services.store') }}">
        @csrf
        
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
                                   id="title" name="title" value="{{ old('title') }}" 
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
                                      placeholder="Describe what this service offers and how it benefits customers...">{{ old('description') }}</textarea>
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
                                      placeholder="Professional Equipment&#10;Expert Team&#10;Quick Turnaround&#10;High Quality Results&#10;Competitive Pricing&#10;24/7 Support">{{ old('features') }}</textarea>
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
                                   id="icon" name="icon" value="{{ old('icon') }}" 
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
                                   id="image_url" name="image_url" value="{{ old('image_url') }}" 
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
                                       id="price_from" name="price_from" value="{{ old('price_from') }}" 
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
                                   id="sort_order" name="sort_order" value="{{ old('sort_order', 1) }}" 
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
                                       {{ old('featured') ? 'checked' : '' }}>
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
                                       {{ old('published', true) ? 'checked' : '' }}>
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
                <div class="card shadow-sm border-success">
                    <div class="card-header bg-success text-white">
                        <h6 class="mb-0">
                            <i class="fas fa-save me-2"></i>
                            Save Service
                        </h6>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-success btn-lg w-100 mb-3">
                            <i class="fas fa-save me-2"></i>
                            <strong>Create Service</strong>
                        </button>
                        
                        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-times me-2"></i>
                            Cancel
                        </a>
                        
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>
                                You can edit this service after creating it
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
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
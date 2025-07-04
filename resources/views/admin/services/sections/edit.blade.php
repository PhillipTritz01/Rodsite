@extends('admin.layout')

@section('title', 'Edit Service Section')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-dark">✏️ Edit Section: {{ $section->title }}</h1>
            <p class="text-muted mb-0">Update this content section for {{ $service->title }}</p>
        </div>
        <a href="{{ route('admin.services.sections.index', $service) }}" class="btn btn-outline-secondary btn-lg">
            <i class="fas fa-arrow-left me-2"></i>
            Back to Sections
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
    <form method="POST" action="{{ route('admin.services.sections.update', [$service, $section]) }}" enctype="multipart/form-data">
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
                            Section Content
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="title" class="form-label fs-6 fw-bold">
                                Section Title <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $section->title) }}" 
                                   placeholder="e.g., Portrait Photography" required>
                            <div class="form-text">This will be the main heading for this section</div>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fs-6 fw-bold">
                                Section Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="6" required
                                      placeholder="Describe this specific aspect of your service in detail...">{{ old('description', $section->description) }}</textarea>
                            <div class="form-text">Explain what makes this section unique and valuable</div>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="button_text" class="form-label fw-bold">Button Text</label>
                                <input type="text" class="form-control @error('button_text') is-invalid @enderror" 
                                       id="button_text" name="button_text" value="{{ old('button_text', $section->button_text) }}" 
                                       placeholder="Learn More">
                                <div class="form-text">Text shown on the call-to-action button</div>
                                @error('button_text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="button_url" class="form-label fw-bold">Button URL</label>
                                <input type="url" class="form-control @error('button_url') is-invalid @enderror" 
                                       id="button_url" name="button_url" value="{{ old('button_url', $section->button_url) }}" 
                                       placeholder="https://example.com/contact">
                                <div class="form-text">Optional: Where the button should link to</div>
                                @error('button_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Column -->
            <div class="col-lg-4">
                <!-- Image Settings -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-image me-2"></i>
                            Section Image
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Current Image Preview -->
                        @if($section->hasUploadedImage() || $section->image_url)
                            <div class="mb-3 text-center">
                                <img src="{{ $section->image }}" alt="Current image" class="img-fluid rounded" style="max-height: 150px;">
                                <p class="text-sm text-success mt-2">
                                    @if($section->hasUploadedImage())
                                        ✅ Current: Uploaded image
                                    @else
                                        ✅ Current: URL image
                                    @endif
                                </p>
                            </div>
                        @endif

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="image_type" id="image_upload" value="upload" 
                                       {{ $section->hasUploadedImage() ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="image_upload">
                                    Upload New Image File
                                </label>
                            </div>
                            <div class="mt-2 ms-4" id="upload_section" style="{{ $section->hasUploadedImage() ? '' : 'display: none;' }}">
                                <input type="file" class="form-control @error('image_file') is-invalid @enderror" 
                                       name="image_file" accept="image/*">
                                <div class="form-text">Supported: JPEG, PNG, JPG, GIF, WebP. Max size: 25MB</div>
                                @error('image_file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="image_type" id="image_url_radio" value="url"
                                       {{ !$section->hasUploadedImage() ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="image_url_radio">
                                    Use Image URL
                                </label>
                            </div>
                            <div class="mt-2 ms-4" id="url_section" style="{{ !$section->hasUploadedImage() ? '' : 'display: none;' }}">
                                <input type="url" class="form-control @error('image_url') is-invalid @enderror" 
                                       name="image_url" value="{{ old('image_url', $section->image_url) }}" 
                                       placeholder="https://example.com/section-image.jpg">
                                <div class="form-text">Link to an image that represents this section</div>
                                @error('image_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display Options -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-cog me-2"></i>
                            Display Options
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="sort_order" class="form-label fw-bold">Display Order</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $section->sort_order) }}" 
                                   min="0" placeholder="1">
                            <div class="form-text">Lower numbers appear first (1, 2, 3...)</div>
                            @error('sort_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="published" name="published" 
                                       {{ old('published', $section->published) ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="published">
                                    <i class="fas fa-eye text-success me-1"></i>
                                    Published
                                </label>
                            </div>
                            <div class="form-text">Only published sections appear on the website</div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card shadow-sm border-success">
                    <div class="card-header bg-success text-white">
                        <h6 class="mb-0">
                            <i class="fas fa-save me-2"></i>
                            Update Section
                        </h6>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-success btn-lg w-100 mb-3">
                            <i class="fas fa-save me-2"></i>
                            <strong>Update Section</strong>
                        </button>
                        
                        <a href="{{ route('admin.services.sections.index', $service) }}" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-times me-2"></i>
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image type toggle
    const imageUploadRadio = document.getElementById('image_upload');
    const imageUrlRadio = document.getElementById('image_url_radio');
    const uploadSection = document.getElementById('upload_section');
    const urlSection = document.getElementById('url_section');

    function toggleImageSections() {
        if (imageUploadRadio.checked) {
            uploadSection.style.display = 'block';
            urlSection.style.display = 'none';
        } else {
            uploadSection.style.display = 'none';
            urlSection.style.display = 'block';
        }
    }

    imageUploadRadio.addEventListener('change', toggleImageSections);
    imageUrlRadio.addEventListener('change', toggleImageSections);
    
    // Initialize on page load
    toggleImageSections();
});
</script>
@endsection 
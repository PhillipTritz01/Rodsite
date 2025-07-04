@extends('admin.layout')

@section('title', 'Add New Service')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="h2 mb-2 text-primary-admin">➕ Add New Service</h1>
            <p class="text-secondary-admin mb-0">Create a new service to showcase on your website</p>
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
    <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
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

                        <div class="mb-4">
                            <label for="page_subtitle" class="form-label fs-6 fw-bold">
                                Page Subtitle
                            </label>
                            <input type="text" class="form-control @error('page_subtitle') is-invalid @enderror" 
                                   id="page_subtitle" name="page_subtitle" value="{{ old('page_subtitle') }}" 
                                   placeholder="Additional subtitle for the dedicated service page">
                            <div class="form-text">Optional subtitle shown on the dedicated service page</div>
                            @error('page_subtitle')
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
                            
                            <!-- Icon Select -->
                            <select class="form-select @error('icon') is-invalid @enderror" id="icon" name="icon">
                                <option value="">-- Select an icon --</option>
                                <option value="fas fa-camera" {{ old('icon') == 'fas fa-camera' ? 'selected' : '' }}>Camera</option>
                                <option value="fas fa-video" {{ old('icon') == 'fas fa-video' ? 'selected' : '' }}>Video</option>
                                <option value="fas fa-paint-brush" {{ old('icon') == 'fas fa-paint-brush' ? 'selected' : '' }}>Paint Brush</option>
                                <option value="fas fa-code" {{ old('icon') == 'fas fa-code' ? 'selected' : '' }}>Code</option>
                                <option value="fas fa-microphone" {{ old('icon') == 'fas fa-microphone' ? 'selected' : '' }}>Microphone</option>
                                <option value="fas fa-palette" {{ old('icon') == 'fas fa-palette' ? 'selected' : '' }}>Palette</option>
                                <option value="fas fa-globe" {{ old('icon') == 'fas fa-globe' ? 'selected' : '' }}>Globe</option>
                                <option value="fas fa-play-circle" {{ old('icon') == 'fas fa-play-circle' ? 'selected' : '' }}>Play Circle</option>
                                <option value="fas fa-star" {{ old('icon') == 'fas fa-star' ? 'selected' : '' }}>Star</option>
                                <option value="fas fa-cog" {{ old('icon') == 'fas fa-cog' ? 'selected' : '' }}>Cog</option>
                            </select>

                            <!-- Icon Preview -->
                            <div id="iconPreview" class="mt-2 text-center">
                                <!-- Preview will appear here -->
                            </div>
                            
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Service Image Upload/URL -->
                        <div class="border rounded-lg p-3">
                            <h6 class="fw-bold mb-3">Service Image</h6>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="image_type" id="image_upload" value="upload" checked>
                                    <label class="form-check-label fw-bold" for="image_upload">
                                        Upload Image File
                                    </label>
                                </div>
                                <div class="mt-2 ms-4" id="upload_section">
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
                                    <input class="form-check-input" type="radio" name="image_type" id="image_url_radio" value="url">
                                    <label class="form-check-label fw-bold" for="image_url_radio">
                                        Use Image URL
                                    </label>
                                </div>
                                <div class="mt-2 ms-4" id="url_section" style="display: none;">
                                    <input type="url" class="form-control @error('image_url') is-invalid @enderror" 
                                           name="image_url" value="{{ old('image_url') }}" 
                                           placeholder="https://example.com/service-image.jpg">
                                    <div class="form-text">Link to an image that represents this service</div>
                                    @error('image_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing & Options -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning">
                        <h5 class="mb-0 text-dark">
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

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="has_dedicated_page" name="has_dedicated_page" 
                                       {{ old('has_dedicated_page', true) ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="has_dedicated_page">
                                    <i class="fas fa-file-alt text-primary me-1"></i>
                                    Create Dedicated Page
                                </label>
                            </div>
                            <div class="form-text">Creates a full page with sections like photography/film pages</div>
                        </div>

                        <div class="mb-3" id="template_section">
                            <label for="page_template" class="form-label fw-bold">Page Template</label>
                            <select class="form-select @error('page_template') is-invalid @enderror" 
                                    id="page_template" name="page_template">
                                <option value="default" {{ old('page_template', 'default') == 'default' ? 'selected' : '' }}>Default Layout</option>
                                <option value="photography" {{ old('page_template') == 'photography' ? 'selected' : '' }}>Photography Style</option>
                                <option value="film" {{ old('page_template') == 'film' ? 'selected' : '' }}>Film/Video Style</option>
                            </select>
                            <div class="form-text">Choose the layout style for the dedicated page</div>
                            @error('page_template')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                            <small class="text-secondary-admin">
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

<!-- Icon Browser Modal -->
<div class="modal fade" id="iconBrowserModal" tabindex="-1" aria-labelledby="iconBrowserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iconBrowserModalLabel">
                    <i class="fas fa-icons me-2"></i>Choose an Icon
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" id="modalIconSearch" placeholder="Search icons...">
                    </div>
                </div>
                <div id="iconGrid" class="row g-2 justify-content-center">
                    <!-- Icons will be populated here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simplified Icon Database - 10 Most Relevant Icons
    const allIcons = [
        { class: 'fas fa-camera', keywords: ['camera', 'photo', 'photography', 'picture', 'image', 'shoot'] },
        { class: 'fas fa-video', keywords: ['video', 'film', 'movie', 'recording', 'cinema', 'media'] },
        { class: 'fas fa-paint-brush', keywords: ['paint', 'brush', 'art', 'design', 'creative', 'draw', 'graphic'] },
        { class: 'fas fa-code', keywords: ['code', 'programming', 'development', 'software', 'web', 'website'] },
        { class: 'fas fa-microphone', keywords: ['microphone', 'mic', 'audio', 'recording', 'podcast', 'voice'] },
        { class: 'fas fa-palette', keywords: ['palette', 'color', 'art', 'design', 'creative', 'painting'] },
        { class: 'fas fa-globe', keywords: ['globe', 'world', 'internet', 'web', 'global', 'website'] },
        { class: 'fas fa-play-circle', keywords: ['play', 'video', 'media', 'start', 'button', 'streaming'] },
        { class: 'fas fa-star', keywords: ['star', 'favorite', 'rating', 'quality', 'premium', 'featured'] },
        { class: 'fas fa-cog', keywords: ['settings', 'gear', 'configuration', 'options', 'service', 'maintenance'] }
    ];

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

    // Dedicated page toggle
    const dedicatedPageCheckbox = document.getElementById('has_dedicated_page');
    const templateSection = document.getElementById('template_section');

    function toggleTemplateSection() {
        if (dedicatedPageCheckbox.checked) {
            templateSection.style.display = 'block';
        } else {
            templateSection.style.display = 'none';
        }
    }

    dedicatedPageCheckbox.addEventListener('change', toggleTemplateSection);
    
    // Initialize on page load
    toggleImageSections();
    toggleTemplateSection();

    // Icon functionality
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('iconPreview');
    let selectedIcon = '';

    // Update icon preview
    function updateIconPreview(iconClass) {
        if (iconClass) {
            iconPreview.innerHTML = 
                `<i class="${iconClass} fa-3x text-primary mb-2"></i><br><small class="text-muted">${iconClass}</small>`;
        } else {
            iconPreview.innerHTML = '<small class="text-muted">No icon selected</small>';
        }
    }

    // Update preview whenever the input value changes (native datalist will handle suggestions)
    if (iconInput) {
        iconInput.addEventListener('change', function () {
            updateIconPreview(this.value.trim());
        });
    }

    // Modal functionality
    const iconBrowserModal = document.getElementById('iconBrowserModal');
    const modalIconSearch = document.getElementById('modalIconSearch');
    const iconGrid = document.getElementById('iconGrid');
    const selectIconBtn = null;

    function populateIconGrid(icons) {
        if (iconGrid) {
            iconGrid.innerHTML = icons.map(icon => 
                `<div class="col-2 col-md-1">
                    <button type="button" class="btn btn-outline-secondary w-100 icon-btn" 
                            data-icon="${icon.class}" title="${icon.class}">
                        <i class="${icon.class}"></i>
                    </button>
                </div>`
            ).join('');
        }
    }

    function filterModalIcons() {
        const searchTerm = modalIconSearch ? modalIconSearch.value.toLowerCase() : '';
        
        let iconsToShow = allIcons;
        
        if (searchTerm) {
            iconsToShow = allIcons.filter(icon => 
                icon.keywords.some(keyword => 
                    keyword.toLowerCase().includes(searchTerm)
                ) || icon.class.toLowerCase().includes(searchTerm)
            );
        }
        
        populateIconGrid(iconsToShow);
    }

    if (modalIconSearch) {
        modalIconSearch.addEventListener('input', filterModalIcons);
    }

    // Handle icon selection in modal using event delegation
    if (iconGrid) {
        iconGrid.addEventListener('click', function(e) {
            e.preventDefault();
            const btn = e.target.closest('.icon-btn');
            if (btn && iconInput) {
                const iconClass = btn.getAttribute('data-icon');
                iconInput.value = iconClass;
                updateIconPreview(iconClass);
                if (iconBrowserModal && bootstrap.Modal.getInstance(iconBrowserModal)) {
                    bootstrap.Modal.getInstance(iconBrowserModal).hide();
                }
            }
        });
    }

    // Initialize modal with all icons
    if (iconBrowserModal) {
        iconBrowserModal.addEventListener('shown.bs.modal', function() {
            populateIconGrid(allIcons);
            if (modalIconSearch) {
                modalIconSearch.focus();
            }
        });
    }

    // Initialize icon preview on page load
    if (iconInput && iconInput.value) {
        updateIconPreview(iconInput.value);
    }
});
</script>
@endsection 
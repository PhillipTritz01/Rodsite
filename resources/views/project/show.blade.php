@extends('layouts.app')

@section('content')
<!-- Project Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4">
            <span class="inline-block bg-accent text-black px-4 py-2 rounded-full text-sm font-semibold">
                {{ ucfirst(str_replace('_', ' ', $project->type)) }}
            </span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white font-display uppercase tracking-wider border-none" data-aos="fade-up">{{ $project->title }}</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
            {{ $project->description }}
        </p>
        
        @if($project->client || $project->completion_date)
            <div class="flex justify-center items-center space-x-8 mt-6 text-gray-400" data-aos="fade-up" data-aos-delay="400">
                @if($project->client)
                    <div>
                        <span class="text-sm">Client:</span>
                        <span class="ml-2 text-accent font-semibold">{{ $project->client }}</span>
                    </div>
                @endif
                @if($project->completion_date)
                    <div>
                        <span class="text-sm">Completed:</span>
                        <span class="ml-2 text-white">{{ $project->completion_date->format('M Y') }}</span>
                    </div>
                @endif
            </div>
        @endif
    </div>
</section>

<!-- Featured Image/Video Section -->
@if($project->image || $project->video_url)
    <section class="py-16 bg-gray-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($project->video_url)
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl mb-8" data-aos="fade-up">
                    @if(str_contains($project->video_url, 'youtube.com') || str_contains($project->video_url, 'youtu.be'))
                        @php
                            $videoId = '';
                            if (str_contains($project->video_url, 'youtube.com/watch?v=')) {
                                $videoId = substr($project->video_url, strpos($project->video_url, 'v=') + 2);
                                $videoId = explode('&', $videoId)[0];
                            } elseif (str_contains($project->video_url, 'youtu.be/')) {
                                $videoId = substr($project->video_url, strrpos($project->video_url, '/') + 1);
                            }
                        @endphp
                        @if($videoId)
                            <iframe src="https://www.youtube.com/embed/{{ $videoId }}" 
                                    class="w-full h-full" 
                                    frameborder="0" 
                                    allowfullscreen></iframe>
                        @else
                            <video controls class="w-full h-full object-cover">
                                <source src="{{ $project->video_url }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @else
                        <video controls class="w-full h-full object-cover">
                            <source src="{{ $project->video_url }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @elseif($project->image)
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl mb-8" data-aos="fade-up">
                    <img src="{{ $project->image }}" 
                         alt="{{ $project->title }}"
                         class="w-full h-full object-cover">
                </div>
            @endif
        </div>
    </section>
@endif

<!-- Project Gallery -->
@if($project->gallery && count($project->gallery) > 0)
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12" data-aos="fade-up">Project Gallery</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($project->gallery as $index => $imagePath)
                    <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-105">
                            @php
                                $src = Str::startsWith($imagePath, '/storage') ? asset(ltrim($imagePath, '/')) : asset('storage/' . $imagePath);
                            @endphp
                            <img src="{{ $src }}" 
                                 alt="{{ $project->title }} - Image {{ $index + 1 }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                 onclick="openLightbox('{{ $src }}', '{{ $project->title }} - Image {{ $index + 1 }}')">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4">
    <div class="relative max-w-6xl max-h-full">
        <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white text-2xl hover:text-accent transition-colors duration-300 z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="lightbox-image" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
        <div id="lightbox-title" class="absolute bottom-4 left-4 right-4 text-white text-center text-lg font-semibold bg-black bg-opacity-50 rounded-lg p-2"></div>
    </div>
</div>

<!-- Back to Portfolio -->
<section class="py-16 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <a href="{{ route('portfolio') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            ← Back to Portfolio
        </a>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Like This Project?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss how we can create something amazing for you too.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Start Your Project
        </a>
    </div>
</section>

<script>
function openLightbox(imageSrc, imageTitle) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    
    lightboxImage.src = imageSrc;
    lightboxImage.alt = imageTitle;
    lightboxTitle.textContent = imageTitle;
    
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Close lightbox when clicking outside the image
document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});

// Close lightbox with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
});
</script>
@endsection 
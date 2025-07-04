@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl text-accent font-display uppercase tracking-wider border-none" data-aos="fade-up">Air Show Photography</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
            Spectacular aerial photography capturing the thrill and precision of air shows, aerobatic displays, and military aircraft demonstrations.
        </p>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(count($airShowPhotos) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($airShowPhotos as $index => $photo)
                    <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 group-hover:scale-105">
                            <img src="{{ $photo['url'] }}" 
                                 alt="{{ $photo['title'] }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                 onclick="openLightbox('{{ $photo['url'] }}', '{{ $photo['title'] }}')">
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-white group-hover:text-accent transition-colors duration-300">
                                {{ $photo['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <h3 class="text-2xl font-bold text-white mb-4">No Air Show Photos Available</h3>
                <p class="text-gray-400">Air show photos are being uploaded. Please check back soon!</p>
            </div>
        @endif
    </div>
</section>

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

<!-- CTA Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Interested in Air Show Photography?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your aviation photography needs and capture the excitement of flight.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Get in Touch
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
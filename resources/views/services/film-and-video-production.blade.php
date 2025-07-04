@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl text-accent font-display uppercase tracking-wider border-none" data-aos="fade-up">Film & Video Production</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
            From concept to completion, we bring your vision to life with professional cinematography.
        </p>
    </div>
</section>

<div class="bg-gray-900 py-12">

    @forelse($filmSections as $index => $section)
    <!-- {{ $section->title }} -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row{{ $index % 2 == 1 ? '-reverse' : '' }} items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">{{ $section->title }}</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        {{ $section->description }}
                    </p>
                    @if($section->button_text && $section->button_url)
                        <a href="{{ $section->button_url }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                            {{ $section->button_text }}
                        </a>
                    @endif
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                @if($section->video_url)
                    <a href="{{ $section->video_url }}" target="_blank" class="group block">
                        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl relative bg-black">
                            <img src="{{ $section->thumbnail }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $section->title }}">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                                <div class="w-20 h-20 bg-accent/80 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-black ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ $section->thumbnail }}" 
                             class="w-full h-full object-cover" alt="{{ $section->title }}">
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- No film sections available -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="py-12">
            <h3 class="text-3xl font-bold mb-4 text-white">Film Sections Coming Soon</h3>
            <p class="text-lg text-gray-300">Our film sections are being updated. Please check back soon!</p>
        </div>
    </section>
    @endforelse

</div>

<!-- CTA Section -->
<section id="contact" class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Film Project?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your vision and create something amazing together.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Get a Free Quote Today
        </a>
    </div>
</section>
@endsection
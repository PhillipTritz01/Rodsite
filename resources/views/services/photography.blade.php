@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl text-accent font-display uppercase tracking-wider border-none" data-aos="fade-up">Photography</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
            Capturing life's precious moments with artistic vision and professional expertise.
        </p>
    </div>
</section>

<div class="bg-gray-900 py-12">

    @forelse($photographySections as $index => $section)
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
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ $section->image }}"
                         class="w-full h-full object-cover" alt="{{ $section->title }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- No photography sections available -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="py-12">
            <h3 class="text-3xl font-bold mb-4 text-white">Photography Sections Coming Soon</h3>
            <p class="text-lg text-gray-300">Our photography sections are being updated. Please check back soon!</p>
        </div>
    </section>
    @endforelse

</div>

<!-- CTA Section -->
<section id="contact" class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Book Your Photography Session?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's create beautiful memories together. Contact us to discuss your photography needs.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Book a Session Today
        </a>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl text-accent font-display uppercase tracking-wider border-none" data-aos="fade-up">{{ $service->title }}</h1>
        @if($service->page_subtitle)
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
                {{ $service->page_subtitle }}
            </p>
        @else
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
                {{ $service->description }}
            </p>
        @endif
    </div>
</section>

<div class="bg-gray-900 py-12">
    @forelse($sections as $index => $section)
        <!-- Section {{ $index + 1 }}: {{ $section->title }} -->
        <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="flex flex-col lg:flex-row{{ $index % 2 === 1 ? '-reverse' : '' }} items-center gap-12">
                <div class="w-full lg:w-1/2">
                    <article class="py-8">
                        <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">{{ $section->title }}</h3>
                        <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                            {!! nl2br(e($section->description)) !!}
                        </p>
                        @if($section->button_url)
                            <a href="{{ $section->button_url }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                                {{ $section->button_text }}
                            </a>
                        @endif
                    </article>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ $section->image }}"
                             alt="{{ $section->title }}"
                             class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>
        </section>
    @empty
        <!-- No sections message -->
        <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="py-20">
                <h3 class="text-2xl font-bold mb-4 text-white">Content Coming Soon</h3>
                <p class="text-lg text-gray-300 mb-8">
                    We're working on adding detailed sections for this service. Please check back soon or contact us for more information.
                </p>
                <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Contact Us
                </a>
            </div>
        </section>
    @endforelse
</div>

<!-- CTA Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Interested in {{ $service->title }}?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your project and bring your vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Get Started Today
        </a>
    </div>
</section>
@endsection 
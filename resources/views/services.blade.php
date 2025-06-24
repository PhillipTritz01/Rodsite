@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="py-24 bg-gray-900 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl text-accent font-display uppercase tracking-wider border-none" data-aos="fade-up">Our Services</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
            Comprehensive creative solutions to bring your vision to life.
        </p>
    </div>
</section>

<div class="bg-gray-900 py-12">

    <!-- Service 1: Film & Video Production (Image Right) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Film &amp; Video Production</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        From music videos to films and everything in between. We can capture your vision and make it come true with professional cinematography and post-production services.
                    </p>
                                    <a href="{{ route('services.film-video') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Learn More
                </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2: Photography (Image Left) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Photography</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        Portraits, family photoshoots, to product photography. Let us capture the moment or help your business with quality pictures that tell your story.
                    </p>
                    <a href="{{ route('services.photography') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        Explore Photography
                    </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>
    
    <!-- Service 3: Graphic Design & Illustration (Image Right) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Graphic Design &amp; Illustration</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        Modern logos that are clean and trendy, we guarantee your brand will stand out. From brand identity to marketing materials, we create designs that make an impact.
                    </p>
                    <a href="{{ route('services.graphic-design') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Design Work
                    </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service 4: Web Development (Image Left) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Web Development</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        Modern, responsive websites that look great on all devices. We build with the latest technologies to ensure a fast and secure experience for your users.
                    </p>
                    <a href="{{ route('services.web-development') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        See Web Projects
                    </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service 5: Podcast Production (Image Right) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Podcast Production</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        High-quality audio recording, editing, and distribution. We'll help you launch and grow your podcast from the ground up.
                    </p>
                    <a href="{{ route('services.podcast') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        Hear Our Work
                    </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service 6: Something Else (Image Left) -->
    <section class="relative my-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
            <div class="w-full lg:w-1/2">
                <article class="py-8">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Something Else?</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        Some projects just don't fit into a neat category. We love creative challenges and unique projects. Let us know what you need, and we'll be happy to make it happen.
                    </p>
                    <a href="{{ route('services.something-else') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        Discuss Your Project
                    </a>
                </article>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop&auto=format"
                         class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

</div>

<!-- CTA Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your project and bring your creative vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Contact Us Today
        </a>
    </div>
</section>
@endsection 
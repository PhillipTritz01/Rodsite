@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=1920&h=1080&fit=crop&auto=format" 
             alt="Photography" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-6" data-aos="fade-up">
                Photography
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
                Capturing life's precious moments with artistic vision and professional expertise. From portraits to commercial work, we tell your story through stunning imagery.
            </p>
            <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="#portfolio" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105 text-center">
                    View Our Portfolio
                </a>
                <a href="#contact" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 text-center">
                    Book a Session
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Photography Services</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Professional photography services tailored to capture your unique story
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portrait Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Portrait Photography</h3>
                <p class="text-gray-300">Professional headshots, family portraits, and personal branding photography that captures your essence.</p>
            </div>

            <!-- Wedding Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Wedding Photography</h3>
                <p class="text-gray-300">Romantic and timeless wedding photography that preserves your special day's most precious moments.</p>
            </div>

            <!-- Commercial Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Commercial Photography</h3>
                <p class="text-gray-300">Product photography, corporate headshots, and marketing materials that elevate your brand.</p>
            </div>

            <!-- Event Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Event Photography</h3>
                <p class="text-gray-300">Capturing the energy and emotion of your special events, parties, and corporate functions.</p>
            </div>

            <!-- Lifestyle Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Lifestyle Photography</h3>
                <p class="text-gray-300">Natural, candid photography that captures authentic moments and genuine emotions.</p>
            </div>

            <!-- Real Estate Photography -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Real Estate Photography</h3>
                <p class="text-gray-300">Professional property photography that showcases homes and commercial spaces at their best.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Portfolio</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A collection of our recent photography work across various styles and subjects
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($photographyProjects as $index => $project)
                <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                    <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                        <img src="{{ $project->image }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             alt="{{ $project->title }}">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-300">{{ Str::limit($project->description, 60) }}</p>
                    @if($project->client)
                        <p class="text-accent text-sm mt-1">Client: {{ $project->client }}</p>
                    @endif
                </div>
            @empty
                <!-- Fallback to static portfolio if no projects -->
                <div class="col-span-full text-center py-12">
                    <h3 class="text-2xl font-bold text-white mb-4">No Photography Projects Yet</h3>
                    <p class="text-gray-300 mb-6">Add your photography projects through the admin panel to showcase your work here.</p>
                    <a href="/admin/projects/create" class="inline-block bg-accent hover:bg-accent/80 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Add Photography Projects
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Process</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                From consultation to final delivery, we ensure a smooth and professional experience
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Consultation</h3>
                <p class="text-gray-300">We discuss your vision, style preferences, and specific requirements for your shoot.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Planning</h3>
                <p class="text-gray-300">Location scouting, styling coordination, and timeline development for your session.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Photography</h3>
                <p class="text-gray-300">Professional photo session with high-end equipment and creative direction.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Post-Processing</h3>
                <p class="text-gray-300">Professional editing and retouching to deliver stunning final images.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Ready to Book Your Session?</h2>
        <p class="text-xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
            Let's create beautiful memories together. Contact us to discuss your photography needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105">
                Book a Session
            </a>
            <a href="tel:+14031234567" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                Call Us Today
            </a>
        </div>
    </div>
</section>
@endsection
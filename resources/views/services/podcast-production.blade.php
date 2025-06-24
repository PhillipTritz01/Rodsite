@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=1920&h=1080&fit=crop&auto=format" 
             alt="Podcast Production" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-6" data-aos="fade-up">
                Podcast Production
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
                Professional podcast production services from recording to distribution. We help you create engaging audio content that connects with your audience and builds your brand.
            </p>
            <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="#services" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105 text-center">
                    Our Services
                </a>
                <a href="#contact" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 text-center">
                    Start Your Podcast
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section id="services" class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Podcast Services</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Complete podcast production services to bring your voice to the world
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Recording & Production -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Recording & Production</h3>
                <p class="text-gray-300">Professional studio recording with high-quality equipment and expert audio engineering.</p>
            </div>

            <!-- Audio Editing -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Audio Editing</h3>
                <p class="text-gray-300">Expert editing, noise reduction, and sound enhancement to create polished episodes.</p>
            </div>

            <!-- Show Development -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Show Development</h3>
                <p class="text-gray-300">Concept development, format creation, and content strategy for engaging podcast series.</p>
            </div>

            <!-- Music & Sound Design -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Music & Sound Design</h3>
                <p class="text-gray-300">Custom intro/outro music, sound effects, and audio branding for your podcast.</p>
            </div>

            <!-- Distribution -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Distribution</h3>
                <p class="text-gray-300">Publishing to major platforms including Spotify, Apple Podcasts, Google Podcasts, and more.</p>
            </div>

            <!-- Analytics & Growth -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Analytics & Growth</h3>
                <p class="text-gray-300">Performance tracking, audience insights, and growth strategies to expand your reach.</p>
            </div>
        </div>
    </div>
</section>

<!-- Equipment & Studio -->
<section class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Professional Studio</h2>
                <p class="text-xl text-gray-300 mb-8">
                    Our state-of-the-art recording studio is equipped with industry-standard equipment to ensure your podcast sounds professional and engaging.
                </p>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        High-quality microphones and audio interfaces
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Acoustically treated recording environment
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Professional mixing and mastering equipment
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Remote recording capabilities for guests
                    </li>
                </ul>
            </div>
            <div data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=600&h=400&fit=crop&auto=format" 
                     alt="Recording Studio" 
                     class="rounded-lg shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Production Process</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Our streamlined process ensures professional results from concept to publication
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Consultation</h3>
                <p class="text-gray-300">We discuss your podcast concept, target audience, and production goals.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Pre-Production</h3>
                <p class="text-gray-300">Format development, content planning, and guest coordination.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Recording</h3>
                <p class="text-gray-300">Professional recording sessions in our studio or remotely.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Post-Production</h3>
                <p class="text-gray-300">Editing, mixing, mastering, and distribution to all major platforms.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Production Packages</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Choose the package that best fits your podcast production needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Package -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-bold text-white mb-4">Basic</h3>
                <p class="text-gray-300 mb-6">Perfect for getting started with professional podcast production</p>
                <ul class="space-y-3 text-gray-300 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Recording & basic editing
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Noise reduction & enhancement
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        MP3 delivery
                    </li>
                </ul>
                <a href="#contact" class="block w-full bg-accent hover:bg-accent/80 text-black font-semibold px-6 py-3 rounded-lg transition-all duration-300 text-center">
                    Get Quote
                </a>
            </div>

            <!-- Professional Package -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300 border-2 border-accent" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-white">Professional</h3>
                    <span class="bg-accent text-black px-3 py-1 rounded-full text-sm font-semibold">Popular</span>
                </div>
                <p class="text-gray-300 mb-6">Complete production package for serious podcasters</p>
                <ul class="space-y-3 text-gray-300 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Basic
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom intro/outro music
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Platform distribution
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Show notes & transcription
                    </li>
                </ul>
                <a href="#contact" class="block w-full bg-accent hover:bg-accent/80 text-black font-semibold px-6 py-3 rounded-lg transition-all duration-300 text-center">
                    Get Quote
                </a>
            </div>

            <!-- Premium Package -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-bold text-white mb-4">Premium</h3>
                <p class="text-gray-300 mb-6">Full-service podcast production and management</p>
                <ul class="space-y-3 text-gray-300 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Professional
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Content strategy & planning
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Guest booking & coordination
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Marketing & promotion
                    </li>
                </ul>
                <a href="#contact" class="block w-full bg-accent hover:bg-accent/80 text-black font-semibold px-6 py-3 rounded-lg transition-all duration-300 text-center">
                    Get Quote
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Ready to Start Your Podcast?</h2>
        <p class="text-xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
            Let's discuss your podcast concept and create something amazing together
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105">
                Start Your Podcast
            </a>
            <a href="tel:+14031234567" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                Call Us Today
            </a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
{{-- HERO with video background --}}
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    {{-- ❶ Full-bleed video background --}}
    <video
        class="absolute inset-0 w-full h-full object-cover pointer-events-none"
        poster="https://via.placeholder.com/1920x1080/111111/ffffff?text=Callisto+Hero"
        autoplay
        muted
        loop
        playsinline
        preload="metadata"
    >
        <!-- Multi-source for browser compatibility -->
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.webm" type="video/webm">
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
        
        <!-- Fallback for unsupported browsers -->
        Your browser does not support the video tag.
    </video>

    {{-- ❲ Dark overlay for text legibility --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- ❸ Foreground content --}}
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="text-center">
            <!-- Starset Media Logo -->
            <div class="mb-8" data-aos="fade-up">
                <div class="flex items-center justify-center space-x-4 mb-6">
                    <!-- Logo Icon -->
                    <div class="w-20 h-20 bg-white rounded-lg flex items-center justify-center shadow-lg">
                        <span class="text-3xl font-bold text-black">SM</span>
                    </div>
                    <!-- Brand Name -->
                    <div class="text-left">
                        <h1 class="text-4xl md:text-5xl font-bold text-white">Starset Media</h1>
                        <p class="text-gray-300 text-lg">A Southern Alberta Media Company</p>
                    </div>
                </div>
            </div>
            
            <!-- Main Headlines -->
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
                Passion, <span class="text-gray-300">Pride,</span> Creativity.
            </h2>
            
            <p class="text-xl md:text-2xl mb-8 text-gray-300 leading-relaxed max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Our work showcases each of these values. We are not hampered by the norms and conventions of art.
            </p>
            
            <!-- Vision Section -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Vision</h3>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    No one person has ever loved a greater distance than Whitney, her partner has gone on a trip to help colonize Callisto, a moon orbiting Jupiter.
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('services') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                    Our Services
                </a>
                <a href="{{ route('film') }}" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300">
                    View Our Work
                </a>
            </div>
            
            <!-- Featured Project Badge -->
            <div class="mt-12" data-aos="fade-up" data-aos-delay="500">
                <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3">
                    <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                    <span class="text-white font-medium">Now Featured: Callisto</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce" data-aos="fade-up" data-aos-delay="600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>


<!-- Our Services Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">Our Services</h2>
            <a href="{{ route('services') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                Learn More
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Film/Video Production -->
            <div class="bg-black/50 p-8 rounded-lg hover:bg-black/70 transition-all duration-300 hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gray-600 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white">Film/Video Production</h3>
                <p class="text-muted mb-6 leading-relaxed">From music videos to films and everything in between. We can capture your vision and make it come true.</p>
                <a href="{{ route('services') }}" class="text-gray-300 hover:text-white font-semibold transition-colors">Learn More</a>
            </div>
            
            <!-- Photography -->
            <div class="bg-black/50 p-8 rounded-lg hover:bg-black/70 transition-all duration-300 hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gray-600 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white">Photography</h3>
                <p class="text-muted mb-6 leading-relaxed">Portraits, family photoshoots, to product photography. Let us capture the moment or help your business with quality pictures.</p>
                <a href="{{ route('services') }}" class="text-gray-300 hover:text-white font-semibold transition-colors">Learn More</a>
            </div>
            
            <!-- Graphic Design -->
            <div class="bg-black/50 p-8 rounded-lg hover:bg-black/70 transition-all duration-300 hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gray-600 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white">Graphic Design & Illustration</h3>
                <p class="text-muted mb-6 leading-relaxed">Modern logos that are clean and trendy, we guarantee your brand will stand out.</p>
                <a href="{{ route('services') }}" class="text-gray-300 hover:text-white font-semibold transition-colors">Learn More</a>
            </div>
            
            <!-- Something Else -->
            <div class="bg-black/50 p-8 rounded-lg hover:bg-black/70 transition-all duration-300 hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gray-600 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white">Something Else?</h3>
                <p class="text-muted mb-6 leading-relaxed">Some projects just don't fit into every category. Let us know what you need and we will be happy to make it come true.</p>
                <a href="{{ route('services') }}" class="text-gray-300 hover:text-white font-semibold transition-colors">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- The Crew Section -->
<section class="py-20 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">The Crew</h2>
            <a href="{{ route('crew') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                View All Services
            </a>
        </div>
        
        <!-- Featured Crew Member -->
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-gray-900 rounded-lg p-8 mb-12">
                <div class="w-32 h-32 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">SM</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Add a Subtitle</h3>
                <h4 class="text-xl text-gray-300 mb-4">Full Name</h4>
                <p class="text-gray-300 leading-relaxed max-w-2xl mx-auto">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">Testimonials</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-black/50 p-8 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-white mb-2">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4">Full name</h4>
                <p class="text-gray-300 leading-relaxed">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
            
            <div class="bg-black/50 p-8 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold text-white mb-2">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4">Full Name</h4>
                <p class="text-gray-300 leading-relaxed">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
            
            <div class="bg-black/50 p-8 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold text-white mb-2">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4">Full Name</h4>
                <p class="text-gray-300 leading-relaxed">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">Let's Chat!</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                We'd love to hear from you! Feel free to submit the form or contact us. Responses may take up to a full business day.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-gray-900 p-8 rounded-lg" data-aos="fade-right">
                <h3 class="text-2xl font-bold mb-6">Send us a message</h3>
                
                <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Name *</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email *</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium mb-2">Service of Interest *</label>
                        <select id="service" name="service" required
                                class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                            <option value="">Select a service</option>
                            <option value="film-video">Film & Video</option>
                            <option value="photography">Photography</option>
                            <option value="graphic-design">Graphic Design</option>
                            <option value="something-else">Something Else</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div data-aos="fade-left">
                <h3 class="text-2xl font-bold mb-6">Get in touch</h3>
                <div class="space-y-6">
                    <div>
                        <h4 class="text-xl font-semibold text-gray-300 mb-2">General Inquiries</h4>
                        <p class="text-gray-300 mb-2">📧 info@starsetmedia.ca</p>
                        <p class="text-gray-300">📱 (403) 123-4567</p>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold text-gray-300 mb-2">Rodrigo Henriquez</h4>
                        <p class="text-gray-300 mb-1">Creative Director</p>
                        <p class="text-gray-300 mb-2">📧 rodrigo@starsetmedia.ca</p>
                        <p class="text-gray-300">📍 Lethbridge, Alberta</p>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold text-gray-300 mb-2">Jared Middlebrook</h4>
                        <p class="text-gray-300 mb-1">Technical Director</p>
                        <p class="text-gray-300 mb-2">📧 jared@starsetmedia.ca</p>
                        <p class="text-gray-300">📍 Calgary, Alberta</p>
                    </div>

                    <div class="pt-6">
                        <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">Instagram</a>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">YouTube</a>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">Vimeo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 
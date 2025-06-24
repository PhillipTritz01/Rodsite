@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1920&h=1080&fit=crop&auto=format" 
             alt="Graphic Design" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-6" data-aos="fade-up">
                Graphic Design &amp; Illustration
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
                Modern logos that are clean and trendy, we guarantee your brand will stand out. From brand identity to marketing materials, we create designs that make an impact.
            </p>
            <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="#portfolio" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105 text-center">
                    View Our Work
                </a>
                <a href="#contact" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 text-center">
                    Start Your Project
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Design Services</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Creative design solutions that elevate your brand and communicate your message effectively
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Logo Design -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Logo Design</h3>
                <p class="text-gray-300">Custom logo design that captures your brand's essence and creates a memorable visual identity.</p>
            </div>

            <!-- Brand Identity -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Brand Identity</h3>
                <p class="text-gray-300">Complete brand identity packages including color palettes, typography, and brand guidelines.</p>
            </div>

            <!-- Print Design -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Print Design</h3>
                <p class="text-gray-300">Business cards, brochures, flyers, and other print materials that make a lasting impression.</p>
            </div>

            <!-- Digital Graphics -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Digital Graphics</h3>
                <p class="text-gray-300">Social media graphics, web banners, and digital assets optimized for online use.</p>
            </div>

            <!-- Illustration -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Custom Illustration</h3>
                <p class="text-gray-300">Original illustrations and artwork that bring your creative vision to life with unique style.</p>
            </div>

            <!-- Packaging Design -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Packaging Design</h3>
                <p class="text-gray-300">Eye-catching packaging design that makes your products stand out on the shelf.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Design Portfolio</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A showcase of our creative design work across various industries and styles
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative bg-gradient-to-br from-purple-600 to-blue-600 flex items-center justify-center">
                    <div class="text-white text-6xl font-bold">LOGO</div>
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Tech Startup Logo</h3>
                <p class="text-gray-300">Modern logo design for innovative tech company</p>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=600&h=600&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Brand Identity Package</h3>
                <p class="text-gray-300">Complete branding solution for retail business</p>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1558655146-364adaf1fcc9?w=600&h=600&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Print Design</h3>
                <p class="text-gray-300">Business cards and marketing materials</p>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=600&h=600&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Digital Graphics</h3>
                <p class="text-gray-300">Social media templates and web graphics</p>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?w=600&h=600&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Custom Illustration</h3>
                <p class="text-gray-300">Original artwork for book cover design</p>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="600">
                <div class="aspect-square rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=600&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Packaging Design</h3>
                <p class="text-gray-300">Product packaging for consumer goods</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Design Process</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A structured approach to creating designs that exceed expectations
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Discovery</h3>
                <p class="text-gray-300">We learn about your brand, goals, and target audience to create a solid foundation.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Concept</h3>
                <p class="text-gray-300">We develop initial concepts and creative directions based on your requirements.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Design</h3>
                <p class="text-gray-300">We refine the chosen concept into polished, professional designs ready for use.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Delivery</h3>
                <p class="text-gray-300">We deliver final files in all necessary formats along with brand guidelines.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-20 bg-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Ready to Elevate Your Brand?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's create stunning designs that make your brand unforgettable and drive real results.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                Start Your Project
            </a>
        </div>
    </div>
</section>
@endsection 
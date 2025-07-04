@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=1920&h=1080&fit=crop&auto=format" 
             alt="Web Development" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-6" data-aos="fade-up">
                Web Development
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
                Custom websites and web applications that drive results. From concept to launch, we create digital experiences that engage your audience and grow your business.
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
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Development Services</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Full-stack web development solutions tailored to your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Custom Websites -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Custom Websites</h3>
                <p class="text-gray-300">Bespoke websites designed and developed to reflect your brand and meet your specific requirements.</p>
            </div>

            <!-- E-Commerce -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">E-Commerce Solutions</h3>
                <p class="text-gray-300">Powerful online stores with secure payment processing, inventory management, and customer analytics.</p>
            </div>

            <!-- Web Applications -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Web Applications</h3>
                <p class="text-gray-300">Complex web applications with advanced functionality, user management, and database integration.</p>
            </div>

            <!-- CMS Development -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Content Management</h3>
                <p class="text-gray-300">User-friendly CMS solutions that allow you to easily update and manage your website content.</p>
            </div>

            <!-- Mobile Responsive -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Mobile Responsive</h3>
                <p class="text-gray-300">Fully responsive designs that look and function perfectly on all devices and screen sizes.</p>
            </div>

            <!-- SEO Optimization -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">SEO Optimization</h3>
                <p class="text-gray-300">Built-in SEO best practices to help your website rank higher in search engine results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Technologies We Use</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Modern, reliable technologies to build scalable and maintainable solutions
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
            <!-- HTML5 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-orange-500/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-orange-400">HTML5</span>
                </div>
                <p class="text-gray-300 text-sm">HTML5</p>
            </div>

            <!-- CSS3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-500/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-blue-400">CSS3</span>
                </div>
                <p class="text-gray-300 text-sm">CSS3</p>
            </div>

            <!-- JavaScript -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-accent/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-accent">JS</span>
                </div>
                <p class="text-gray-300 text-sm">JavaScript</p>
            </div>

            <!-- React -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-cyan-500/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-cyan-400">React</span>
                </div>
                <p class="text-gray-300 text-sm">React</p>
            </div>

            <!-- Laravel -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-red-500/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-red-400">Laravel</span>
                </div>
                <p class="text-gray-300 text-sm">Laravel</p>
            </div>

            <!-- Node.js -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-green-500/20 rounded-lg mb-4 flex items-center justify-center mx-auto">
                    <span class="text-2xl font-bold text-green-400">Node</span>
                </div>
                <p class="text-gray-300 text-sm">Node.js</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Recent Projects</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A showcase of our latest web development projects and digital solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-video rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Corporate Website</h3>
                <p class="text-gray-300">Modern corporate website with CMS integration and responsive design</p>
            </div>

            <!-- Project 2 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-video rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">E-Commerce Platform</h3>
                <p class="text-gray-300">Full-featured online store with payment integration and inventory management</p>
            </div>

            <!-- Project 3 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="aspect-video rounded-lg overflow-hidden mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop&auto=format" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Web Application</h3>
                <p class="text-gray-300">Custom web application with user authentication and data management</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Development Process</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Our structured approach ensures quality results and timely delivery
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Discovery & Planning</h3>
                <p class="text-gray-300">We analyze your requirements, target audience, and business goals to create a comprehensive project plan.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Design & Prototyping</h3>
                <p class="text-gray-300">Creating wireframes, mockups, and interactive prototypes to visualize the final product.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Development</h3>
                <p class="text-gray-300">Building your website or application using modern technologies and best practices.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-black">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Testing & Launch</h3>
                <p class="text-gray-300">Thorough testing, optimization, and deployment with ongoing support and maintenance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Ready to Build Your Website?</h2>
        <p class="text-xl text-gray-300 mb-8" data-aos="fade-up" data-aos-delay="200">
            Let's discuss your project and create a digital solution that drives results
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg transition-all duration-300 hover:scale-105">
                Start Your Project
            </a>
            <a href="tel:+14031234567" class="inline-block border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                Call Us Today
            </a>
        </div>
    </div>
</section>
@endsection
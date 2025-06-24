@extends('layouts.app')

@section('content')
{{-- HERO with video background --}}
<section class="relative min-h-screen flex items-center text-white overflow-hidden">
    {{-- ❶ Full-bleed video background --}}
    <video
        class="absolute inset-0 w-full h-full object-cover pointer-events-none"
        poster="{{ $homePage->hero_poster }}"
        autoplay
        muted
        loop
        playsinline
        preload="metadata"
    >
        <!-- Multi-source for browser compatibility -->
        <source src="{{ $homePage->hero_video }}" type="video/mp4">
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.webm" type="video/webm">
        
        <!-- Fallback for unsupported browsers -->
        Your browser does not support the video tag.
    </video>

    {{-- ❲ Dark overlay for text legibility --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- ❸ Foreground content --}}
    <div class="relative z-10 container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="text-center flex flex-col justify-center items-center min-h-screen">
            <!-- Starset Media Logo -->
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-out-quart">
                <div class="flex justify-center">
                    <img src="{{ asset('starset-logo.svg') }}" alt="Starset Media" class="h-60 md:h-72 lg:h-80 xl:h-96 w-auto max-w-full animate-on-scroll">
                </div>
            </div>

            <!-- Tagline -->
            <h2 class="mt-10 text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight max-w-4xl mx-auto animate-on-scroll" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                Passion, Pride, <span class="text-white">Creativity.</span>
            </h2>
            <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto animate-on-scroll" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                Our work showcases each of these values. We are not hampered by the norms and conventions of art.
            </p>

            <!-- Call To Action -->
            <div class="mt-10 animate-on-scroll" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                <a href="#services" class="inline-block bg-accent hover:bg-accent/80 text-black font-semibold px-8 py-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce" data-aos="fade-up" data-aos-delay="800" data-aos-duration="600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Full-Screen Photo Section -->
<section class="relative min-h-screen bg-black mt-16">
    <img src="{{ $homePage->fullscreen_photo }}" 
         alt="Team collaboration" 
         class="absolute inset-0 w-full h-full object-cover">
</section>

<!-- Filmography Project Carousel -->
<section class="relative min-h-screen bg-gray-900 flex flex-col items-center justify-center py-12" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center text-white">Our Latest Film Projects</h2>
    
    <!-- Swiper -->
    <div class="swiper-container film-carousel w-full">
        <div class="swiper-wrapper">
            @forelse($filmProjects as $project)
                <div class="swiper-slide">
                    <div class="relative w-full h-full bg-gray-900 overflow-hidden">
                        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop playsinline>
                            <source src="{{ asset('storage/' . ($project->video ?? 'videos/placeholder.mp4')) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">{{ $project->title }}</h3>
                            <p class="text-gray-300 mt-2">{{ Str::limit($project->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                @for ($i = 0; $i < 3; $i++)
                    <div class="swiper-slide">
                        <div class="relative w-full h-full bg-gray-900 overflow-hidden">
                            <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop playsinline>
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6">
                                <h3 class="text-2xl font-bold text-white">Filler Project {{ $i + 1 }}</h3>
                                <p class="text-gray-300 mt-2">This is a placeholder for a stunning film project.</p>
                            </div>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Service Header -->
<div id="services" class="mt-24 mb-16 px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-5xl md:text-7xl text-accent" data-aos="fade-up" data-aos-delay="200">Our Services</h2>
</div>

<!-- All services in one vertical stack -->
<div>

<!-- Film & Video Production Section -->
<section id="film-video-service" class="relative overflow-hidden">
    <!-- Sticky panel that will wipe-open - only visible within this section -->
    <div class="absolute top-0 right-0 w-[60%] h-full overflow-hidden pointer-events-none z-10">
        <div class="sticky top-0 h-[80vh]">
            <img id="service-media"
                 src="{{ $homePage->film_service_bg }}"
                 class="w-full h-full object-cover transition-[clip-path] duration-700 ease-out clip-start" />
        </div>
    </div>

    <!-- Film/Video Production Service Card -->
    <div class="w-[40%] pr-8">
        <article
            class="service-card group flex items-center gap-8 py-24 px-6 pb-64 relative z-20"
            data-media="{{ $homePage->film_service_bg }}">
            <div class="opacity-0 translate-y-6 transition-all duration-700 delay-200 group-[.in-view]:opacity-100 group-[.in-view]:translate-y-0">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Film &amp; Video Production</h3>
                <p class="max-w-md text-lg text-gray-300 mb-6 leading-relaxed">
                    From music videos to films and everything in between. We can capture your vision and make it come true with professional cinematography and post-production services.
                </p>
                <a href="{{ route('services.film-video') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </article>
    </div>
</section>

<!-- Photography Section -->
<section id="photography-service" class="relative overflow-hidden">
    <!-- Sticky panel that will wipe-open - only visible within this section (LEFT SIDE) -->
    <div class="absolute top-0 left-0 w-[60%] h-full overflow-hidden pointer-events-none z-10">
        <div class="sticky top-0 h-[80vh]">
            <img id="photography-media"
                 src="{{ $homePage->photography_service_bg }}"
                 class="w-full h-full object-cover transition-[clip-path] duration-700 ease-out clip-start-left" />
        </div>
    </div>

    <!-- Photography Service Card (RIGHT SIDE) -->
    <div class="w-[40%] pl-8 ml-auto">
        <article
            class="photography-card group flex items-center gap-8 py-24 px-6 pb-64 relative z-20"
            data-media="{{ $homePage->photography_service_bg }}"
            data-target="photography-media">
            <div class="opacity-0 translate-y-6 transition-all duration-700 delay-200 group-[.in-view]:opacity-100 group-[.in-view]:translate-y-0 mt-12">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Photography</h3>
                <p class="max-w-md text-lg text-gray-300 mb-6 leading-relaxed">
                    Portraits, family photoshoots, to product photography. Let us capture the moment or help your business with quality pictures that tell your story.
                </p>
                <a href="{{ route('services.photography') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Explore Photography Services
                </a>
            </div>
        </article>
    </div>
</section>

<!-- Graphic Design Section -->
<section id="design-service" class="relative overflow-hidden">
    <!-- Sticky panel that will wipe-open - only visible within this section -->
    <div class="absolute top-0 right-0 w-[60%] h-full overflow-hidden pointer-events-none z-10">
        <div class="sticky top-0 h-[80vh]">
            <img id="design-media"
                 src="{{ $homePage->design_service_bg }}"
                 class="w-full h-full object-cover transition-[clip-path] duration-700 ease-out clip-start" />
        </div>
    </div>

    <!-- Graphic Design Service Card -->
    <div class="w-[40%] pr-8">
        <article
            class="design-card group flex items-center gap-8 py-24 px-6 pb-64 relative z-20"
            data-media="{{ $homePage->design_service_bg }}"
            data-target="design-media">
            <div class="opacity-0 translate-y-6 transition-all duration-700 delay-200 group-[.in-view]:opacity-100 group-[.in-view]:translate-y-0">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Graphic Design &amp; Illustration</h3>
                <p class="max-w-md text-lg text-gray-300 mb-6 leading-relaxed">
                    Modern logos that are clean and trendy, we guarantee your brand will stand out. From brand identity to marketing materials, we create designs that make an impact.
                </p>
                <a href="{{ route('services.graphic-design') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Discuss Your Project
                </a>
            </div>
        </article>
    </div>
</section>

<!-- Something Else Section -->
<section id="other-service" class="relative overflow-hidden">
    <!-- Sticky panel that will wipe-open - only visible within this section (LEFT SIDE) -->
    <div class="absolute top-0 left-0 w-[60%] h-full overflow-hidden pointer-events-none z-10">
        <div class="sticky top-0 h-[80vh]">
            <img id="other-media"
                 src="{{ $homePage->other_service_bg }}"
                 class="w-full h-full object-cover transition-[clip-path] duration-700 ease-out clip-start-left" />
        </div>
    </div>

    <!-- Something Else Service Card (RIGHT SIDE) -->
    <div class="w-[40%] pl-8 ml-auto">
        <article
            class="other-card group flex items-center gap-8 py-24 px-6 pb-64 relative z-20"
            data-media="{{ $homePage->other_service_bg }}"
            data-target="other-media">
            <div class="opacity-0 translate-y-6 transition-all duration-700 delay-200 group-[.in-view]:opacity-100 group-[.in-view]:translate-y-0">
                <div class="w-16 h-16 bg-accent/30 rounded-lg mb-6 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">Something Else?</h3>
                <p class="max-w-md text-lg text-gray-300 mb-6 leading-relaxed">
                    Some projects just don't fit into every category. Let us know what you need and we will be happy to make it come true. We love creative challenges and unique projects.
                </p>
                <a href="{{ route('services.something-else') }}" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                    Discuss Your Project
                </a>
            </div>
        </article>
    </div>
</section>

</div> <!-- End services wrapper -->

<!-- The Crew Section - Slides from RIGHT -->
<section class="py-32 mb-16" data-aos="slide-left" data-aos-duration="1000" data-aos-easing="ease-out-quart" data-aos-offset="200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 text-white" data-aos="fade-up" data-aos-delay="300">The Crew</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="400">
                Meet the talented team behind Starset Media
            </p>
        </div>
        
        <!-- Crew Members Grid -->
        <div class="flex justify-center items-start gap-8 md:gap-16 max-w-7xl mx-auto flex-wrap lg:flex-nowrap">
            @forelse($crewMembers as $index => $member)
                <div class="text-center group min-w-0" data-aos="zoom-in" data-aos-delay="{{ 400 + ($index * 100) }}" data-aos-duration="600">
                    <div class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 rounded-full mx-auto mb-4 hover:scale-110 transition-all duration-300 hover:shadow-2xl relative overflow-hidden border-3 sm:border-4 md:border-5 lg:border-6 border-accent/30 group-hover:border-accent/60">
                        <img src="{{ $member->image }}" 
                             alt="{{ $member->name }}" 
                             class="w-full h-full object-cover rounded-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-full group-hover:from-accent/10"></div>
                    </div>
                    <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mb-2 group-hover:opacity-80 transition-opacity duration-300">{{ $member->name }}</h3>
                    <p class="text-sm sm:text-base md:text-lg text-gray-400">{{ $member->role }}</p>
                </div>
            @empty
                <!-- Fallback to static content if no crew members in CMS -->
                <div class="text-center group min-w-0" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="600">
                    <div class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 rounded-full mx-auto mb-4 hover:scale-110 transition-all duration-300 hover:shadow-2xl relative overflow-hidden border-3 sm:border-4 md:border-5 lg:border-6 border-accent/30 group-hover:border-accent/60">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face&auto=format" 
                             alt="Team Member" 
                             class="w-full h-full object-cover rounded-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-full group-hover:from-accent/10"></div>
                    </div>
                    <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mb-2 group-hover:opacity-80 transition-opacity duration-300">Add Team Members</h3>
                    <p class="text-sm sm:text-base md:text-lg text-gray-400">Use the CMS to add your team</p>
                </div>
            @endforelse
        </div>
        
        <!-- View All Crew Button -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('crew') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                Meet the Crew
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section - Slides from LEFT -->
<section class="py-32 mb-16" data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out-quart" data-aos-offset="200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 text-white" data-aos="fade-up" data-aos-delay="300">Testimonials</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-500 hover:scale-105 hover:-translate-y-2 shadow-lg hover:shadow-2xl group" data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">
                <div class="mb-6">
                    <div class="flex text-accent mb-4" data-aos="fade-up" data-aos-delay="500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:opacity-80 transition-opacity duration-300" data-aos="fade-up" data-aos-delay="600">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4" data-aos="fade-up" data-aos-delay="700">Full name</h4>
                <p class="text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="800">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
            
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-500 hover:scale-105 hover:-translate-y-2 shadow-lg hover:shadow-2xl group" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                <div class="mb-6">
                    <div class="flex text-accent mb-4" data-aos="fade-up" data-aos-delay="600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:opacity-80 transition-opacity duration-300" data-aos="fade-up" data-aos-delay="700">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4" data-aos="fade-up" data-aos-delay="800">Full Name</h4>
                <p class="text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="900">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
            
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg hover:bg-black/70 transition-all duration-500 hover:scale-105 hover:-translate-y-2 shadow-lg hover:shadow-2xl group" data-aos="fade-left" data-aos-delay="600" data-aos-duration="600">
                <div class="mb-6">
                    <div class="flex text-accent mb-4" data-aos="fade-up" data-aos-delay="700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:opacity-80 transition-opacity duration-300" data-aos="fade-up" data-aos-delay="800">Add a Subtitle</h3>
                <h4 class="text-lg text-gray-300 mb-4" data-aos="fade-up" data-aos-delay="900">Full Name</h4>
                <p class="text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="1000">
                    Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section - Slides from RIGHT -->
<section class="py-32" data-aos="slide-left" data-aos-duration="1000" data-aos-easing="ease-out-quart" data-aos-offset="200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 text-white">Ready to get started?</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Contact us today to get started.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-black/50 backdrop-blur-sm p-8 rounded-lg" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                <h3 class="text-2xl font-bold mb-6">Send us a message</h3>
                
                <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required
                                   class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required
                                   class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-gray-400 focus:outline-none text-white">
                        </div>
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
            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
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
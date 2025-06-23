@extends('layouts.app')

@section('content')
<!-- Film Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Filmography</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Cinematic storytelling that captivates and inspires
            </p>
        </div>
    </div>
</section>

<!-- Featured Project: Callisto -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Project</h2>
            <h3 class="text-2xl font-semibold text-amber-500">Callisto</h3>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="aspect-video bg-gradient-to-br from-amber-900/20 to-black rounded-lg overflow-hidden mb-8 relative">
                <img src="https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?w=1600&h=900&fit=crop&auto=format" 
                     alt="Callisto - Science Fiction Short Film" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-amber-500 rounded-full mx-auto mb-4 flex items-center justify-center hover:bg-amber-400 transition-colors cursor-pointer">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-white text-lg font-medium">Callisto - Coming Soon</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    A cinematic exploration of human connection and cosmic wonder. This passion project showcases our ability to blend stunning visuals with compelling storytelling, creating an immersive experience that resonates with audiences.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Video Portfolio Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Work</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                A collection of our finest video productions and cinematic achievements.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Video Project 1 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=338&fit=crop&auto=format" 
                         alt="Corporate Video Production" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Tech Startup Launch</h3>
                    <p class="text-gray-400 text-sm">A dynamic corporate video showcasing innovation and growth.</p>
                </div>
            </div>

            <!-- Video Project 2 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&h=338&fit=crop&auto=format" 
                         alt="Music Video Production" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Local Artist Showcase</h3>
                    <p class="text-gray-400 text-sm">Creative music video with stunning visual effects.</p>
                </div>
            </div>

            <!-- Video Project 3 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&h=338&fit=crop&auto=format" 
                         alt="Restaurant Commercial" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Restaurant Campaign</h3>
                    <p class="text-gray-400 text-sm">Appetizing commercial showcasing culinary excellence.</p>
                </div>
            </div>

            <!-- Video Project 4 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=338&fit=crop&auto=format" 
                         alt="Documentary Production" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Community Stories</h3>
                    <p class="text-gray-400 text-sm">Heartfelt documentary capturing local community spirit.</p>
                </div>
            </div>

            <!-- Video Project 5 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1519741347686-c1e0aadf4611?w=600&h=338&fit=crop&auto=format" 
                         alt="Wedding Videography" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Wedding Highlights</h3>
                    <p class="text-gray-400 text-sm">Beautiful wedding videography capturing precious moments.</p>
                </div>
            </div>

            <!-- Video Project 6 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video relative">
                    <img src="https://images.unsplash.com/photo-1478720568477-b2709d1e07c6?w=600&h=338&fit=crop&auto=format" 
                         alt="Short Film Production" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:bg-black/60 transition-colors cursor-pointer">
                        <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Urban Echoes</h3>
                    <p class="text-gray-400 text-sm">Award-winning short film exploring city life.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#111111]">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Create Your Film?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your video project and bring your story to the screen.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Start Your Project
        </a>
    </div>
</section>
@endsection 
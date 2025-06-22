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
            <div class="aspect-video bg-gradient-to-br from-amber-900/20 to-black rounded-lg overflow-hidden mb-8">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-amber-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-lg">Callisto - Coming Soon</p>
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
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Corporate Video</p>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Tech Startup Launch</h3>
                    <p class="text-gray-400 text-sm">A dynamic corporate video showcasing innovation and growth.</p>
                </div>
            </div>

            <!-- Video Project 2 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Music Video</p>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Local Artist Showcase</h3>
                    <p class="text-gray-400 text-sm">Creative music video with stunning visual effects.</p>
                </div>
            </div>

            <!-- Video Project 3 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Commercial</p>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Restaurant Campaign</h3>
                    <p class="text-gray-400 text-sm">Appetizing commercial showcasing culinary excellence.</p>
                </div>
            </div>

            <!-- Video Project 4 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Documentary</p>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Community Stories</h3>
                    <p class="text-gray-400 text-sm">Heartfelt documentary capturing local community spirit.</p>
                </div>
            </div>

            <!-- Video Project 5 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Event Coverage</p>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Wedding Highlights</h3>
                    <p class="text-gray-400 text-sm">Beautiful wedding videography capturing precious moments.</p>
                </div>
            </div>

            <!-- Video Project 6 -->
            <div class="bg-black/50 rounded-lg overflow-hidden hover:bg-black/70 transition-colors">
                <div class="aspect-video bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-amber-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <p class="text-gray-400 text-sm">Short Film</p>
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
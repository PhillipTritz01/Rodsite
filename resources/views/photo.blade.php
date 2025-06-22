@extends('layouts.app')

@section('content')
<!-- Photo Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Photography</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Capturing moments that tell your story
            </p>
        </div>
    </div>
</section>

<!-- Photo Gallery -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Portfolio Gallery</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                A showcase of our photography work across different styles and subjects.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Photo 1 -->
            <div class="bg-gradient-to-br from-amber-900/20 to-black rounded-lg overflow-hidden aspect-square">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-amber-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-400 text-sm">Portrait Session</p>
                    </div>
                </div>
            </div>

            <!-- Photo 2 -->
            <div class="bg-gradient-to-br from-blue-900/20 to-black rounded-lg overflow-hidden aspect-[4/5]">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-amber-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-400 text-sm">Event Photography</p>
                    </div>
                </div>
            </div>

            <!-- Photo 3 -->
            <div class="bg-gradient-to-br from-purple-900/20 to-black rounded-lg overflow-hidden aspect-[3/4]">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-amber-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-400 text-sm">Product Photography</p>
                    </div>
                </div>
            </div>

            <!-- Photo 4 -->
            <div class="bg-gradient-to-br from-green-900/20 to-black rounded-lg overflow-hidden aspect-video lg:col-span-2">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-amber-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-400 text-sm">Landscape Photography</p>
                    </div>
                </div>
            </div>

            <!-- Photo 5 -->
            <div class="bg-gradient-to-br from-yellow-900/20 to-black rounded-lg overflow-hidden aspect-square">
                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-amber-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-400 text-sm">Corporate Headshots</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photography Services -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Photography Services</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Professional photography services for every need and occasion.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-900/50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-amber-500 mb-3">Portrait Photography</h3>
                <p class="text-gray-300 mb-4">Professional portraits that capture personality and style.</p>
                <ul class="text-gray-400 text-sm space-y-1">
                    <li>• Individual portraits</li>
                    <li>• Family photography</li>
                    <li>• Senior portraits</li>
                    <li>• Professional headshots</li>
                </ul>
            </div>

            <div class="bg-gray-900/50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-amber-500 mb-3">Event Photography</h3>
                <p class="text-gray-300 mb-4">Capturing special moments and celebrations.</p>
                <ul class="text-gray-400 text-sm space-y-1">
                    <li>• Wedding photography</li>
                    <li>• Corporate events</li>
                    <li>• Birthday parties</li>
                    <li>• Graduation ceremonies</li>
                </ul>
            </div>

            <div class="bg-gray-900/50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-amber-500 mb-3">Commercial Photography</h3>
                <p class="text-gray-300 mb-4">Professional imagery for business and marketing.</p>
                <ul class="text-gray-400 text-sm space-y-1">
                    <li>• Product photography</li>
                    <li>• Real estate photography</li>
                    <li>• Food photography</li>
                    <li>• Architecture photography</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#111111]">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready for Your Photo Session?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's capture your special moments with professional photography that tells your story.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Book Your Session
        </a>
    </div>
</section>
@endsection 
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
            <div class="bg-gradient-to-br from-amber-900/20 to-black rounded-lg overflow-hidden aspect-square relative">
                <img src="https://images.unsplash.com/photo-1554048612-b6a482b224dd?w=600&h=600&fit=crop&auto=format" 
                     alt="Portrait Session" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <p class="text-white font-medium">Portrait Session</p>
                </div>
            </div>

            <!-- Photo 2 -->
            <div class="bg-gradient-to-br from-blue-900/20 to-black rounded-lg overflow-hidden aspect-[4/5] relative">
                <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?w=600&h=750&fit=crop&auto=format" 
                     alt="Event Photography" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <p class="text-white font-medium">Event Photography</p>
                </div>
            </div>

            <!-- Photo 3 -->
            <div class="bg-gradient-to-br from-purple-900/20 to-black rounded-lg overflow-hidden aspect-[3/4] relative">
                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=800&fit=crop&auto=format" 
                     alt="Product Photography" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <p class="text-white font-medium">Product Photography</p>
                </div>
            </div>

            <!-- Photo 4 -->
            <div class="bg-gradient-to-br from-green-900/20 to-black rounded-lg overflow-hidden aspect-video lg:col-span-2 relative">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&h=675&fit=crop&auto=format" 
                     alt="Landscape Photography" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <p class="text-white font-medium">Landscape Photography</p>
                </div>
            </div>

            <!-- Photo 5 -->
            <div class="bg-gradient-to-br from-yellow-900/20 to-black rounded-lg overflow-hidden aspect-square relative">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&h=600&fit=crop&crop=face&auto=format" 
                     alt="Corporate Headshots" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <p class="text-white font-medium">Corporate Headshots</p>
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
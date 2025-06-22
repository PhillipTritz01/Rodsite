@extends('layouts.app')

@section('content')
<!-- Crew Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Crew</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Meet the creative minds behind Starset Media
            </p>
        </div>
    </div>
</section>

<!-- Core Team -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Core Team</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                The passionate professionals driving our creative vision forward.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <!-- Rodrigo Henriquez -->
            <div class="bg-black/50 p-8 rounded-lg text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-amber-500 to-amber-700 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">RH</span>
                </div>
                <h3 class="text-2xl font-bold text-amber-500 mb-2">Rodrigo Henriquez</h3>
                <p class="text-xl text-gray-300 mb-4">Creative Director</p>
                <p class="text-gray-400 mb-4 leading-relaxed">
                    Rodrigo brings years of creative vision and artistic direction to every project. His passion for storytelling and attention to detail ensures that each piece of content we create has both impact and meaning.
                </p>
                <div class="text-gray-300 space-y-1">
                    <p>📧 rodrigo@starsetmedia.ca</p>
                    <p>📍 Lethbridge, Alberta</p>
                </div>
            </div>

            <!-- Jared Middlebrook -->
            <div class="bg-black/50 p-8 rounded-lg text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-amber-500 to-amber-700 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">JM</span>
                </div>
                <h3 class="text-2xl font-bold text-amber-500 mb-2">Jared Middlebrook</h3>
                <p class="text-xl text-gray-300 mb-4">Technical Director</p>
                <p class="text-gray-400 mb-4 leading-relaxed">
                    Jared oversees the technical aspects of our productions, ensuring that every project meets the highest standards of quality. His expertise in post-production and technical workflows keeps our projects running smoothly.
                </p>
                <div class="text-gray-300 space-y-1">
                    <p>📧 jared@starsetmedia.ca</p>
                    <p>📍 Calgary, Alberta</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Extended Team -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Extended Team</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Talented professionals who contribute their expertise to our projects.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-gray-900/50 p-6 rounded-lg text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xl font-bold text-white">SJ</span>
                </div>
                <h3 class="text-lg font-bold text-amber-500 mb-1">Sarah Johnson</h3>
                <p class="text-gray-300 mb-2">Lead Photographer</p>
                <p class="text-gray-400 text-sm">Specializing in portrait and event photography with an eye for capturing authentic emotions.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-gray-900/50 p-6 rounded-lg text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xl font-bold text-white">MT</span>
                </div>
                <h3 class="text-lg font-bold text-amber-500 mb-1">Mike Thompson</h3>
                <p class="text-gray-300 mb-2">Video Editor</p>
                <p class="text-gray-400 text-sm">Expert in post-production with a talent for creating compelling narratives through editing.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-gray-900/50 p-6 rounded-lg text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xl font-bold text-white">AL</span>
                </div>
                <h3 class="text-lg font-bold text-amber-500 mb-1">Alex Liu</h3>
                <p class="text-gray-300 mb-2">Graphic Designer</p>
                <p class="text-gray-400 text-sm">Creative designer specializing in brand identity and visual communication.</p>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-gray-900/50 p-6 rounded-lg text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xl font-bold text-white">EM</span>
                </div>
                <h3 class="text-lg font-bold text-amber-500 mb-1">Emma Martinez</h3>
                <p class="text-gray-300 mb-2">Sound Engineer</p>
                <p class="text-gray-400 text-sm">Audio specialist ensuring crystal clear sound quality in all our productions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Hear from the people who have trusted us with their creative projects.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-black/50 p-6 rounded-lg">
                <div class="mb-4">
                    <div class="flex text-amber-500 mb-2">
                        <span>★★★★★</span>
                    </div>
                    <p class="text-gray-300 mb-4">"Starset Media exceeded our expectations. Their creativity and professionalism made our corporate video stand out from the competition."</p>
                </div>
                <div class="border-t border-gray-700 pt-4">
                    <p class="font-semibold text-amber-500">Jennifer Chen</p>
                    <p class="text-gray-400 text-sm">Marketing Director, TechFlow Inc.</p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-black/50 p-6 rounded-lg">
                <div class="mb-4">
                    <div class="flex text-amber-500 mb-2">
                        <span>★★★★★</span>
                    </div>
                    <p class="text-gray-300 mb-4">"The team captured our wedding day perfectly. Every moment was beautifully documented, and we'll treasure these memories forever."</p>
                </div>
                <div class="border-t border-gray-700 pt-4">
                    <p class="font-semibold text-amber-500">David & Rachel Miller</p>
                    <p class="text-gray-400 text-sm">Wedding Clients</p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-black/50 p-6 rounded-lg">
                <div class="mb-4">
                    <div class="flex text-amber-500 mb-2">
                        <span>★★★★★</span>
                    </div>
                    <p class="text-gray-300 mb-4">"Working with Starset Media was a game-changer for our brand. Their graphic design work elevated our entire visual identity."</p>
                </div>
                <div class="border-t border-gray-700 pt-4">
                    <p class="font-semibold text-amber-500">Marcus Rodriguez</p>
                    <p class="text-gray-400 text-sm">CEO, Urban Lifestyle Co.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#111111]">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Work With Our Team?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's collaborate and create something amazing together. Our team is ready to bring your vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Get In Touch
        </a>
    </div>
</section>
@endsection 
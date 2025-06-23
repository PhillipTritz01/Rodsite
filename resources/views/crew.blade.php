@extends('layouts.app')

@section('content')
<!-- Crew Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">Our Team</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                With multiple areas of expertise, our dream team offers content creation services and assistance with any media needs.
            </p>
        </div>
    </div>
</section>

<!-- Team Members -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Rodrigo Henriquez -->
        <div class="mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:mx-0 mb-6 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&h=600&fit=crop&crop=face&auto=format" 
                             alt="Rodrigo Henriquez" 
                             class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">Rodrigo</h2>
                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-4">Henriquez</h3>
                    <h4 class="text-2xl font-semibold text-accent mb-4">Executive Producer/Director</h4>
                    <p class="text-xl text-accent mb-6">Photography | Film | Graphic Design</p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Rodrigo has his BFA in New Media from the University of Lethbridge. His films have been in film festivals around the world. A director, cinematographer, writer, photographer, graphic designer, film editor, music engineer, musician, and producer, Rodrigo does it all. He loves anything creative, especially when it comes to filmmaking.
                    </p>
                    <a href="#" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Shannon Milligan -->
        <div class="mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">Shannon</h2>
                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-4">Milligan</h3>
                    <h4 class="text-2xl font-semibold text-accent mb-4">Executive Producer/Director/Artist</h4>
                    <p class="text-xl text-accent mb-6">Illustration | Graphic Design | Photography | Motion Graphics</p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Shannon is a New Media B.F.A graduate from the University of Lethbridge. She focuses on film and post-production. Her skill set includes graphic artist, set/prop designer, animator, editor, SFX artist, producer, and director. She is a Jack of all trades and loves a challenge. Building and creating unique worlds through every art form is what Shannon loves to do.
                    </p>
                    <blockquote class="text-accent text-xl italic mb-6 border-l-4 border-accent pl-4">
                        "A new vision, is in the hands of its creator"
                    </blockquote>
                    <a href="#" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Learn More
                    </a>
                </div>
                <div class="text-center lg:text-right order-1 lg:order-2">
                    <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:ml-auto lg:mr-0 mb-6 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b515?w=600&h=600&fit=crop&crop=face&auto=format" 
                             alt="Shannon Milligan" 
                             class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brent Clark -->
        <div class="mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:mx-0 mb-6 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=600&fit=crop&crop=face&auto=format" 
                             alt="Brent Clark" 
                             class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">Brent</h2>
                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-4">Clark</h3>
                    <h4 class="text-2xl font-semibold text-accent mb-4">Executive Assistant/Actor/Writer</h4>
                    <p class="text-xl text-accent mb-6">Actor | Intimacy/Fight Choreographer</p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        A writer, actor, intimacy/fight choreographer, and impromptu performer. After graduating from the UofL with a BFA in Dramatic Arts in 2019, Brent has had his eyes set on the development within the Lethbridge film and live performance community. You can find Brent regularly performing Saturdays at DiDi's Playhaus, or working with the Lethbridge College as an Instructional Assistant.
                    </p>
                    <blockquote class="text-accent text-xl italic mb-6 border-l-4 border-accent pl-4">
                        "A large part of who we are is what we surround ourselves with, and I find Lethbridge the surround sound version of a good time"
                    </blockquote>
                    <a href="#" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Jared Middlebrook -->
        <div class="mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">Jared</h2>
                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-4">Middlebrook</h3>
                    <h4 class="text-2xl font-semibold text-accent mb-4">Cinematographer</h4>
                    <p class="text-xl text-accent mb-6">Photography | Cinematography | Video Editing</p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        With a B.F.A. in New Media and B. Mgt in Marketing, Jared has a unique insight into both the artistic and management side of production. A cinematographer, colourist, film editor, and marketing specialist by trade. Jared has a keen eye for detail and subtext that he pours into every project.
                    </p>
                    <a href="#" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                        Learn More
                    </a>
                </div>
                <div class="text-center lg:text-right order-1 lg:order-2">
                    <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:ml-auto lg:mr-0 mb-6 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=600&h=600&fit=crop&crop=face&auto=format" 
                             alt="Jared Middlebrook" 
                             class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary" data-aos="fade-up">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Work With Our Team?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's collaborate and create something amazing together. Our team is ready to bring your vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg">
            Get In Touch
        </a>
    </div>
</section>
@endsection 
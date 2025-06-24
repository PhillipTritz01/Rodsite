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
        @forelse($crewMembers as $index => $member)
            <div class="mb-20" data-aos="fade-up" data-aos-duration="800">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    @if($index % 2 == 0)
                        <!-- Image Left, Text Right -->
                        <div class="text-center lg:text-left">
                            <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:mx-0 mb-6 flex items-center justify-center relative overflow-hidden">
                                <img src="{{ $member->image }}" 
                                     alt="{{ $member->name }}" 
                                     class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $member->name }}</h2>
                            <h4 class="text-2xl font-semibold text-accent mb-4">{{ $member->role }}</h4>
                            @if($member->location)
                                <p class="text-xl text-accent mb-6">{{ $member->location }}</p>
                            @endif
                            <div class="text-gray-300 text-lg leading-relaxed mb-6 prose prose-lg max-w-none">
                                {!! nl2br(e($member->bio)) !!}
                            </div>
                            @if($member->email)
                                <a href="mailto:{{ $member->email }}" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                                    Contact {{ explode(' ', $member->name)[0] }}
                                </a>
                            @endif
                        </div>
                    @else
                        <!-- Text Left, Image Right -->
                        <div class="order-2 lg:order-1">
                            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $member->name }}</h2>
                            <h4 class="text-2xl font-semibold text-accent mb-4">{{ $member->role }}</h4>
                            @if($member->location)
                                <p class="text-xl text-accent mb-6">{{ $member->location }}</p>
                            @endif
                            <div class="text-gray-300 text-lg leading-relaxed mb-6 prose prose-lg max-w-none">
                                {!! nl2br(e($member->bio)) !!}
                            </div>
                            @if($member->email)
                                <a href="mailto:{{ $member->email }}" class="inline-block bg-white hover:bg-gray-200 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                                    Contact {{ explode(' ', $member->name)[0] }}
                                </a>
                            @endif
                        </div>
                        <div class="text-center lg:text-right order-1 lg:order-2">
                            <div class="w-64 h-64 bg-gradient-to-br from-accent/20 to-accent/40 rounded-lg mx-auto lg:ml-auto lg:mr-0 mb-6 flex items-center justify-center relative overflow-hidden">
                                <img src="{{ $member->image }}" 
                                     alt="{{ $member->name }}" 
                                     class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @empty
            <!-- Fallback message if no crew members -->
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold text-white mb-4">No Team Members Added Yet</h2>
                <p class="text-gray-300 text-lg mb-8">Use the admin panel to add your team members and their photos.</p>
                <a href="/admin/crew/create" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-semibold transition-colors">
                    Add Team Members
                </a>
            </div>
        @endforelse
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
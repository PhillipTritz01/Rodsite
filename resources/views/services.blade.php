@extends('layouts.app')

@section('content')
<!-- Services Hero -->
<section class="relative py-32 bg-gradient-to-br from-primary via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Services</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Comprehensive creative solutions to bring your vision to life
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($services->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                @foreach($services as $service)
                    <div class="bg-black/50 p-8 rounded-lg hover:bg-black/70 transition-all duration-300 hover:scale-105">
                        @if($service->icon)
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mr-4">
                                    <i class="{{ $service->icon }} text-accent text-xl"></i>
                                </div>
                                <h2 class="text-2xl font-bold text-accent">{{ $service->title }}</h2>
                            </div>
                        @else
                            <h2 class="text-2xl font-bold text-accent mb-4">{{ $service->title }}</h2>
                        @endif
                        
                        <p class="text-gray-300 mb-6">{{ $service->description }}</p>
                        
                        @if($service->features_list && count($service->features_list) > 0)
                            <ul class="space-y-2 text-muted mb-6">
                                @foreach($service->features_list as $feature)
                                    <li>• {{ $feature }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if($service->price_from)
                            <div class="mb-4">
                                <span class="text-accent font-semibold">Starting from ${{ number_format($service->price_from, 2) }}</span>
                            </div>
                        @endif
                        
                        <div class="mt-6">
                            <img src="{{ $service->image }}" alt="{{ $service->title }}" 
                                 class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-accent/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-concierge-bell text-accent text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Services Coming Soon</h3>
                <p class="text-gray-300 max-w-md mx-auto">
                    We're working hard to bring you amazing services. Check back soon to see what we have to offer!
                </p>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your project and bring your creative vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent-dark text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Contact Us Today
        </a>
    </div>
</section>
@endsection 
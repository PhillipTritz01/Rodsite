<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-900 to-purple-900 text-white min-h-screen flex items-center">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    {{ __('Passion, Pride, Creativity') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200">
                    {{ __('Our work showcases each of these values. We are not hampered by the norms and conventions of art.') }}
                </p>
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-4">{{ __('Vision') }}</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        {{ __('No one person has ever loved a greater distance than Whitney, her partner has gone on a trip to help colonize Callisto, a moon orbiting Jupiter.') }}
                    </p>
                </div>
                <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                    <a href="{{ route('services') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors">
                        {{ __('Our Services') }}
                    </a>
                    <a href="{{ route('contact') }}" class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-semibold py-3 px-8 rounded-lg transition-all">
                        {{ __('Get In Touch') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('Our Services') }}</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ __('From music videos to films and everything in between. We can capture your vision and make it come true.') }}
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Film/Video Production -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Film/Video Production') }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('From music videos to films and everything in between. We can capture your vision and make it come true.') }}
                        </p>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                            {{ __('Learn More') }} →
                        </a>
                    </div>
                </div>

                <!-- Photography -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-blue-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Photography') }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('Portraits, family photoshoots, to product photography. Let us capture the moment or help your business with quality pictures.') }}
                        </p>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                            {{ __('Learn More') }} →
                        </a>
                    </div>
                </div>

                <!-- Graphic Design & Illustration -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Graphic Design & Illustration') }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('Modern logos that are clean and trendy, we guarantee your brand will stand out.') }}
                        </p>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                            {{ __('Learn More') }} →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Callisto Featured Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ __('Callisto') }}</h2>
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">{{ __('Featured') }}</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        {{ __('Explore our latest featured work and see how we bring creative visions to life with cutting-edge technology and artistic expertise.') }}
                    </p>
                    <a href="{{ route('film') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        {{ __('More Info') }}
                    </a>
                </div>
                <div class="bg-gradient-to-br from-blue-900 to-purple-900 h-96 rounded-lg flex items-center justify-center">
                    <div class="text-center text-white">
                        <h4 class="text-2xl font-bold mb-2">{{ __('Featured Project') }}</h4>
                        <p class="text-blue-200">{{ __('Coming Soon') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('Ready to bring your vision to life?') }}</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __('Let\'s chat about your project and see how we can help you create something amazing.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg text-lg transition-colors">
                {{ __('Let\'s Chat!') }}
            </a>
        </div>
    </section>
</x-app-layout>

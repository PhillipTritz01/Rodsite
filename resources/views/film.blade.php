<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-900 to-indigo-900 text-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('Filmography') }}</h1>
                <p class="text-xl text-gray-200">
                    {{ __('Our film and video production portfolio showcasing creative storytelling') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Video Gallery -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for($i = 1; $i <= 8; $i++)
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="aspect-video bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-sm">{{ __('Sample Video') }} {{ $i }}</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">{{ __('Project Title') }} {{ $i }}</h3>
                            <p class="text-gray-600 text-sm">{{ __('Sample project description showcasing our video production capabilities.') }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Featured Project -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('Featured Project') }}</h2>
                    <p class="text-xl text-gray-600">{{ __('Callisto - Our latest cinematic achievement') }}</p>
                </div>
                <div class="bg-gradient-to-br from-blue-900 to-purple-900 aspect-video rounded-lg flex items-center justify-center text-white">
                    <div class="text-center">
                        <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                        <h3 class="text-2xl font-bold mb-2">{{ __('Callisto') }}</h3>
                        <p class="text-blue-200">{{ __('A journey to Jupiter\'s moon') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('Ready to create your film?') }}</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __('Let\'s discuss your vision and create something extraordinary together.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg text-lg transition-colors">
                {{ __('Start Your Project') }}
            </a>
        </div>
    </section>
</x-app-layout>

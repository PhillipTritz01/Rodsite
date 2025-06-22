<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-green-800 to-blue-900 text-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('Photography') }}</h1>
                <p class="text-xl text-gray-200">
                    {{ __('Capturing moments and creating memories through professional photography') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @for($i = 1; $i <= 12; $i++)
                    @php
                        $heights = ['h-64', 'h-80', 'h-72', 'h-96'];
                        $gradients = [
                            'from-pink-400 to-red-500',
                            'from-blue-400 to-purple-500', 
                            'from-green-400 to-blue-500',
                            'from-yellow-400 to-orange-500',
                            'from-purple-400 to-pink-500',
                            'from-indigo-400 to-blue-500'
                        ];
                        $height = $heights[($i - 1) % count($heights)];
                        $gradient = $gradients[($i - 1) % count($gradients)];
                    @endphp
                    <div class="bg-gradient-to-br {{ $gradient }} {{ $height }} rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 cursor-pointer">
                        <div class="w-full h-full flex items-center justify-center text-white">
                            <div class="text-center">
                                <svg class="w-8 h-8 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-xs opacity-75">{{ __('Photo') }} {{ $i }}</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Photography Services -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('Photography Services') }}</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ __('Professional photography services tailored to your needs') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portrait Photography -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Portrait Photography') }}</h3>
                    <p class="text-gray-600">{{ __('Professional headshots and personal portraits that capture your unique personality.') }}</p>
                </div>

                <!-- Family Photography -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Family Photography') }}</h3>
                    <p class="text-gray-600">{{ __('Family photoshoots that preserve precious moments and create lasting memories.') }}</p>
                </div>

                <!-- Product Photography -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Product Photography') }}</h3>
                    <p class="text-gray-600">{{ __('High-quality product photography that helps your business stand out and drive sales.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('Book your photo session') }}</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __('Ready to capture your special moments? Let\'s schedule your photography session today.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg text-lg transition-colors">
                {{ __('Book Now') }}
            </a>
        </div>
    </section>
</x-app-layout>

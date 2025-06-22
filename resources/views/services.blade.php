<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-purple-900 to-blue-900 text-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('Our Services') }}</h1>
                <p class="text-xl text-gray-200">
                    {{ __('Professional media services to bring your creative vision to life') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Film/Video Production -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="h-64 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg mb-6"></div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Film/Video Production') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('From music videos to films and everything in between. We can capture your vision and make it come true.') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• {{ __('Music Videos') }}</li>
                        <li>• {{ __('Commercial Films') }}</li>
                        <li>• {{ __('Documentary Production') }}</li>
                        <li>• {{ __('Event Videography') }}</li>
                        <li>• {{ __('Corporate Videos') }}</li>
                    </ul>
                    <a href="{{ route('film') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        {{ __('View Portfolio') }}
                    </a>
                </div>

                <!-- Photography -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="h-64 bg-gradient-to-br from-green-500 to-blue-600 rounded-lg mb-6"></div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Photography') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Portraits, family photoshoots, to product photography. Let us capture the moment or help your business with quality pictures.') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• {{ __('Portrait Photography') }}</li>
                        <li>• {{ __('Family Photoshoots') }}</li>
                        <li>• {{ __('Product Photography') }}</li>
                        <li>• {{ __('Event Photography') }}</li>
                        <li>• {{ __('Commercial Photography') }}</li>
                    </ul>
                    <a href="{{ route('photo') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        {{ __('View Gallery') }}
                    </a>
                </div>

                <!-- Graphic Design & Illustration -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="h-64 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg mb-6"></div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Graphic Design & Illustration') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Modern logos that are clean and trendy, we guarantee your brand will stand out.') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• {{ __('Logo Design') }}</li>
                        <li>• {{ __('Brand Identity') }}</li>
                        <li>• {{ __('Print Design') }}</li>
                        <li>• {{ __('Digital Illustrations') }}</li>
                        <li>• {{ __('Marketing Materials') }}</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        {{ __('Get Quote') }}
                    </a>
                </div>

                <!-- Something Else -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="h-64 bg-gradient-to-br from-yellow-500 to-red-600 rounded-lg mb-6"></div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Something Else?') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Some projects just don\'t fit into every category. Let us know what you need and we will be happy to make it come true.') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• {{ __('Custom Projects') }}</li>
                        <li>• {{ __('Creative Consulting') }}</li>
                        <li>• {{ __('Media Strategy') }}</li>
                        <li>• {{ __('Content Creation') }}</li>
                        <li>• {{ __('Post-Production') }}</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        {{ __('Let\'s Discuss') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('Ready to start your project?') }}</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __('Get in touch with us today to discuss your vision and see how we can bring it to life.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg text-lg transition-colors">
                {{ __('Contact Us') }}
            </a>
        </div>
    </section>
</x-app-layout>

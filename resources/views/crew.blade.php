<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-gray-800 to-blue-900 text-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('The Crew') }}</h1>
                <p class="text-xl text-gray-200">
                    {{ __('Meet the talented team behind Starset Media\'s creative vision') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Rodrigo Henriquez -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Rodrigo Henriquez</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Creative Director') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Passionate filmmaker and creative visionary with years of experience in bringing stories to life through innovative media production.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Lethbridge, AB</p>
                        <p>📞 403-393-7411</p>
                    </div>
                </div>

                <!-- Jared Middlebrook -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-green-500 to-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Jared Middlebrook</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Technical Director') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Expert in technical production and post-production workflows, ensuring every project meets the highest quality standards.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Calgary, AB</p>
                        <p>📞 403-680-6178</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('Sarah Thompson') }}</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Lead Photographer') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Skilled photographer with an eye for detail and a passion for capturing authentic moments and emotions.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Calgary, AB</p>
                        <p>📧 sarah@starsetmedia.ca</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-yellow-500 to-red-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('Alex Chen') }}</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Graphic Designer') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Creative designer specializing in brand identity and visual storytelling through innovative graphic design solutions.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Lethbridge, AB</p>
                        <p>📧 alex@starsetmedia.ca</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('Maya Rodriguez') }}</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Editor & Colorist') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Post-production specialist with expertise in video editing and color grading to bring your vision to life.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Calgary, AB</p>
                        <p>📧 maya@starsetmedia.ca</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-teal-500 to-green-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('David Kim') }}</h3>
                    <p class="text-blue-600 font-semibold mb-4">{{ __('Sound Engineer') }}</p>
                    <p class="text-gray-600 mb-4">
                        {{ __('Audio specialist ensuring crystal clear sound quality for all our video and film productions.') }}
                    </p>
                    <div class="text-gray-500 space-y-1">
                        <p>📍 Lethbridge, AB</p>
                        <p>📧 david@starsetmedia.ca</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('Testimonials') }}</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ __('What our clients say about working with our team') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <p class="text-gray-600 mb-4 italic">
                        "{{ __('Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.') }}"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">
                            JD
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">{{ __('John Doe') }}</p>
                            <p class="text-gray-500 text-sm">{{ __('Business Owner') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <p class="text-gray-600 mb-4 italic">
                        "{{ __('Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.') }}"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
                            JS
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">{{ __('Jane Smith') }}</p>
                            <p class="text-gray-500 text-sm">{{ __('Marketing Director') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <p class="text-gray-600 mb-4 italic">
                        "{{ __('Use this space to share a testimonial quote about the business, its products or its services. Insert a quote from a real customer or client here to build trust and win over site visitors.') }}"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center text-white font-semibold">
                            MB
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">{{ __('Mike Brown') }}</p>
                            <p class="text-gray-500 text-sm">{{ __('Creative Director') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('Work with our team') }}</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __('Ready to collaborate with our talented crew? Let\'s discuss your project and bring your vision to life.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg text-lg transition-colors">
                {{ __('Start Collaboration') }}
            </a>
        </div>
    </section>
</x-app-layout>

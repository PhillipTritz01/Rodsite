<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-900 to-purple-900 text-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('Let\'s Chat!') }}</h1>
                <p class="text-xl text-gray-200">
                    {{ __('We\'d love to hear from you! Feel free to submit the form or contact us. Responses may take up to a full business day.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">{{ __('Send us a message') }}</h2>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('First name') }}*
                                </label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('first_name') border-red-500 @enderror"
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Last name') }}*
                                </label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('last_name') border-red-500 @enderror"
                                    value="{{ old('last_name') }}">
                                @error('last_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('Email') }}*
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('Subject') }}
                            </label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('subject') border-red-500 @enderror"
                                value="{{ old('subject') }}">
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('Message') }}*
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" 
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors">
                                {{ __('Submit') }}
                            </button>
                        </div>

                        <p class="text-sm text-gray-600">
                            {{ __('By pressing "Submit" you agree to our Privacy Policy.') }}
                        </p>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">{{ __('Get in touch') }}</h2>
                    
                    <div class="space-y-8">
                        <!-- Rodrigo Henriquez -->
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Rodrigo Henriquez</h3>
                                <p class="text-blue-600 font-semibold">{{ __('Creative Director') }}</p>
                                <p class="text-gray-600">403-393-7411</p>
                                <p class="text-gray-600">Lethbridge, AB</p>
                            </div>
                        </div>

                        <!-- Jared Middlebrook -->
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Jared Middlebrook</h3>
                                <p class="text-blue-600 font-semibold">{{ __('Technical Director') }}</p>
                                <p class="text-gray-600">403-680-6178</p>
                                <p class="text-gray-600">Calgary, AB</p>
                            </div>
                        </div>

                        <!-- General Contact -->
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">{{ __('General Inquiries') }}</h3>
                                <a href="mailto:services@starsetmedia.ca" class="text-blue-600 hover:text-blue-700 font-semibold">
                                    services@starsetmedia.ca
                                </a>
                                <p class="text-gray-600">{{ __('Southern Alberta') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('Follow Us') }}</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

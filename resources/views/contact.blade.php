@extends('layouts.app')

@section('content')
<!-- Contact Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Ready to start your next project? Get in touch and let's create something amazing together.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold mb-6">Send us a message</h2>
                
                @if(session('success'))
                    <div class="bg-green-600/20 border border-green-600 text-green-400 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Name *</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                               class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium mb-2">Service of Interest *</label>
                        <select id="service" name="service" required
                                class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white">
                            <option value="">Select a service</option>
                            <option value="film-video" {{ old('service') == 'film-video' ? 'selected' : '' }}>Film & Video</option>
                            <option value="photography" {{ old('service') == 'photography' ? 'selected' : '' }}>Photography</option>
                            <option value="graphic-design" {{ old('service') == 'graphic-design' ? 'selected' : '' }}>Graphic Design</option>
                            <option value="something-else" {{ old('service') == 'something-else' ? 'selected' : '' }}>Something Else</option>
                        </select>
                        @error('service')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full bg-accent hover:bg-accent-dark text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold mb-6">Get in touch</h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-accent mb-2">General Inquiries</h3>
                        <p class="text-gray-300 mb-2">📧 info@starsetmedia.ca</p>
                        <p class="text-gray-300">�� (403) 123-4567</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-accent mb-2">Rodrigo Henriquez</h3>
                        <p class="text-gray-300 mb-1">Creative Director</p>
                        <p class="text-gray-300 mb-2">📧 rodrigo@starsetmedia.ca</p>
                        <p class="text-gray-300">📍 Lethbridge, Alberta</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-accent mb-2">Jared Middlebrook</h3>
                        <p class="text-gray-300 mb-1">Technical Director</p>
                        <p class="text-gray-300 mb-2">📧 jared@starsetmedia.ca</p>
                        <p class="text-gray-300">📍 Calgary, Alberta</p>
                    </div>

                    <div class="pt-6">
                        <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-accent transition-colors">Instagram</a>
                            <a href="#" class="text-gray-300 hover:text-accent transition-colors">YouTube</a>
                            <a href="#" class="text-gray-300 hover:text-accent transition-colors">Vimeo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 
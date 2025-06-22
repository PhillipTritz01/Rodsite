<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Starset Media') }}</title>

    <!-- Vite CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('meta')
</head>
<body class="bg-white text-gray-900 antialiased">
    <div id="app">
        <!-- Header Navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <nav class="container mx-auto px-4 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <span class="text-2xl font-bold text-gray-900">Starset Media</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-8">
                            <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Home
                            </a>
                            <a href="{{ route('services') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Services
                            </a>
                            <a href="{{ route('film') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Film
                            </a>
                            <a href="{{ route('photo') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Photo
                            </a>
                            <a href="{{ route('crew') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Crew
                            </a>
                            <a href="{{ route('contact') }}" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 text-sm font-medium rounded-md transition-colors">
                                Contact
                            </a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="mobile-menu-button text-gray-900 hover:text-blue-600 focus:outline-none focus:text-blue-600" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Hamburger icon -->
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div class="md:hidden hidden" id="mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200">
                        <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">
                            Services
                        </a>
                        <a href="{{ route('film') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">
                            Film
                        </a>
                        <a href="{{ route('photo') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">
                            Photo
                        </a>
                        <a href="{{ route('crew') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">
                            Crew
                        </a>
                        <a href="{{ route('contact') }}" class="bg-blue-600 text-white hover:bg-blue-700 block px-3 py-2 text-base font-medium rounded-md">
                            Contact
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="container mx-auto px-4 lg:px-8 py-8">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Starset Media</h3>
                        <p class="text-gray-300 mb-4">A Southern Alberta Media Company.<br>From Film/Video, Photography, Graphic Design, and More</p>
                        <div class="text-gray-300 space-y-1">
                            <p>Lethbridge, AB</p>
                            <p>Calgary, AB</p>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Contact</h3>
                        <div class="text-gray-300 space-y-2">
                            <p>Rodrigo Henriquez</p>
                            <p>403-393-7411</p>
                            <p>Jared Middlebrook</p>
                            <p>403-680-6178</p>
                            <a href="mailto:services@starsetmedia.ca" class="text-blue-400 hover:text-blue-300">services@starsetmedia.ca</a>
                        </div>
                    </div>

                    <!-- Social & Links -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                        <div class="flex space-x-4 mb-4">
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="text-sm text-gray-400 space-y-1">
                            <a href="#" class="block hover:text-gray-300">Privacy Policy</a>
                            <a href="#" class="block hover:text-gray-300">Terms & Conditions</a>
                            <a href="#" class="block hover:text-gray-300">Cookie Policy</a>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} Starset Media. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>

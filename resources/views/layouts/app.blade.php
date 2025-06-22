<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' - ' : '' }}Starset Media</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-primary text-white">
    <!-- Navigation -->
    <nav class="bg-primary/90 backdrop-blur-sm fixed w-full z-50 border-b border-accent/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-accent">
                        Starset Media
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">SERVICES</a>
                    <a href="{{ route('film') }}" class="nav-link {{ request()->routeIs('film') ? 'active' : '' }}">FILMOGRAPHY</a>
                    <a href="{{ route('photo') }}" class="nav-link {{ request()->routeIs('photo') ? 'active' : '' }}">PHOTOGRAPHY</a>
                    <a href="{{ route('crew') }}" class="nav-link {{ request()->routeIs('crew') ? 'active' : '' }}">CREW</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white hover:text-accent">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden bg-primary/95 backdrop-blur-sm border-t border-accent/20 hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                <a href="{{ route('services') }}" class="mobile-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">SERVICES</a>
                <a href="{{ route('film') }}" class="mobile-nav-link {{ request()->routeIs('film') ? 'active' : '' }}">FILMOGRAPHY</a>
                <a href="{{ route('photo') }}" class="mobile-nav-link {{ request()->routeIs('photo') ? 'active' : '' }}">PHOTOGRAPHY</a>
                <a href="{{ route('crew') }}" class="mobile-nav-link {{ request()->routeIs('crew') ? 'active' : '' }}">CREW</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary border-t border-accent/20">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-accent mb-4">Starset Media</h3>
                    <p class="text-gray-300 text-lg leading-relaxed">A Southern Alberta Media Company.</p>
                    <p class="text-muted mt-2">From Film/Video, Photography, Graphic Design, and More</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6 text-white">Social</h4>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-300 hover:text-accent transition-colors text-lg">Facebook</a>
                        <a href="#" class="block text-gray-300 hover:text-accent transition-colors text-lg">Instagram</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6 text-white">Policy</h4>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-300 hover:text-accent transition-colors text-lg">Privacy Policy</a>
                        <a href="#" class="block text-gray-300 hover:text-accent transition-colors text-lg">Term & Conditions</a>
                        <a href="#" class="block text-gray-300 hover:text-accent transition-colors text-lg">Cookie Policy</a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800">
                <p class="text-center text-muted text-lg">&copy; {{ date('Y') }} Starset Media</p>
            </div>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply text-white hover:text-accent transition-colors font-medium;
        }
        .nav-link.active {
            @apply text-accent;
        }
        .mobile-nav-link {
            @apply block px-3 py-2 text-white hover:text-accent transition-colors;
        }
        .mobile-nav-link.active {
            @apply text-accent;
        }
    </style>

    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html> 
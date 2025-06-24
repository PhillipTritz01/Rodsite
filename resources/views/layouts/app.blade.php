<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-900 text-white">
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
                    <a href="{{ route('services.photography') }}" class="nav-link {{ request()->routeIs('services.photography') ? 'active' : '' }}">PHOTOGRAPHY</a>
                    <a href="{{ route('crew') }}" class="nav-link {{ request()->routeIs('crew') ? 'active' : '' }}">CREW</a>
                    <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">PORTFOLIO</a>
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
                                    <a href="{{ route('services.photography') }}" class="mobile-nav-link {{ request()->routeIs('services.photography') ? 'active' : '' }}">PHOTOGRAPHY</a>
                <a href="{{ route('crew') }}" class="mobile-nav-link {{ request()->routeIs('crew') ? 'active' : '' }}">CREW</a>
                <a href="{{ route('portfolio') }}" class="mobile-nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">PORTFOLIO</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-accent hover:bg-accent/80 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-50 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

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
    
    <!-- Swiper.js JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize other scripts -->
    <script src="{{ asset('js/serviceReveal.js') }}"></script>
    <script>
        // Initialize AOS with enhanced settings
        AOS.init({
            duration: 800,
            once: true,
            offset: 120,
            easing: 'ease-out-cubic',
            delay: 100,
            anchorPlacement: 'top-bottom'
        });
        
        // Smooth scrolling for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Parallax effect for hero video
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroVideo = document.querySelector('.hero-video');
            if (heroVideo) {
                heroVideo.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
        
        // Enhanced scroll-triggered animations - run once only
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    // Stop observing once animated to prevent re-animation
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe elements for custom animations
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Back to top button functionality
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                backToTopButton.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                backToTopButton.classList.remove('opacity-100', 'pointer-events-auto');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // AOS is set to animate once only, no need to refresh on scroll
    </script>
    
    <style>
        /* Enhanced smooth scrolling */
        html {
            scroll-behavior: smooth;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        
        body {
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        
        /* Ensure all sections don't cause horizontal overflow */
        section {
            overflow-x: hidden;
        }
        
        /* Custom scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .animate-on-scroll.animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Parallax container */
        .parallax-container {
            overflow: hidden;
        }
        
        /* Enhanced transitions */
        * {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            transform: scaleX(0);
            transform-origin: left;
            z-index: 9999;
            transition: transform 0.1s ease-out;
        }
        
        /* Fix for AOS animations causing horizontal scroll */
        [data-aos^="slide"] {
            overflow-x: hidden;
        }
    </style>
</body>
</html> 
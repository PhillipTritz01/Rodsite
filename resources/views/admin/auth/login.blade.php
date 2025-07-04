<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Starset Media</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full space-y-8 p-8">
        <div class="text-center">
            <img src="{{ asset('starset-logo.png') }}" alt="Starset Media" class="h-16 w-auto mx-auto mb-8">
            <h2 class="text-3xl font-bold text-white mb-2">Admin Access</h2>
            <p class="text-gray-400">Sign in or register to access the CMS</p>
        </div>

        @if (session('status'))
            <div class="bg-green-600/20 border border-green-600 text-green-400 px-4 py-3 rounded mb-6">
                {{ session('status') }}
            </div>
        @endif

        <!-- Tab Navigation -->
        <div class="flex border-b border-gray-600 mb-6">
            <button id="login-tab" class="flex-1 py-2 px-4 text-center font-medium text-accent border-b-2 border-accent transition-colors">
                Login
            </button>
            <button id="register-tab" class="flex-1 py-2 px-4 text-center font-medium text-gray-400 border-b-2 border-transparent hover:text-white transition-colors">
                Register
            </button>
        </div>

        <!-- Login Form -->
        <form id="login-form" action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="space-y-4">
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" 
                           id="login-email" 
                           name="email" 
                           value="{{ old('email') }}"
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Enter your email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" 
                           id="login-password" 
                           name="password" 
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Enter your password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="remember" 
                               name="remember" 
                               class="h-4 w-4 text-accent bg-black/50 border-gray-600 rounded focus:ring-accent">
                        <label for="remember" class="ml-2 text-sm text-gray-300">Remember me</label>
                    </div>
                    <a href="{{ route('admin.password.request') }}" class="text-sm text-accent hover:text-accent/80 transition-colors">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <button type="submit" 
                    class="w-full bg-accent hover:bg-accent/80 text-black font-semibold py-3 px-4 rounded-lg transition-colors duration-300">
                Sign In
            </button>
        </form>

        <!-- Register Form -->
        <form id="register-form" action="{{ route('admin.register') }}" method="POST" class="space-y-6 hidden">
            @csrf
            
            <div class="space-y-4">
                <div>
                    <label for="register-name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                    <input type="text" 
                           id="register-name" 
                           name="name" 
                           value="{{ old('name') }}"
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Enter your full name">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="register-email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" 
                           id="register-email" 
                           name="email" 
                           value="{{ old('email') }}"
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Enter your email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="register-password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" 
                           id="register-password" 
                           name="password" 
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Enter your password (min 8 characters)">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="register-password-confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <input type="password" 
                           id="register-password-confirmation" 
                           name="password_confirmation" 
                           required 
                           class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                           placeholder="Confirm your password">
                </div>
            </div>

            <button type="submit" 
                    class="w-full bg-accent hover:bg-accent/80 text-black font-semibold py-3 px-4 rounded-lg transition-colors duration-300">
                Create Account
            </button>
        </form>

        <div class="text-center">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                ← Back to Website
            </a>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            loginTab.addEventListener('click', function() {
                // Switch to login
                loginTab.classList.add('text-accent', 'border-accent');
                loginTab.classList.remove('text-gray-400', 'border-transparent');
                registerTab.classList.add('text-gray-400', 'border-transparent');
                registerTab.classList.remove('text-accent', 'border-accent');
                
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            });

            registerTab.addEventListener('click', function() {
                // Switch to register
                registerTab.classList.add('text-accent', 'border-accent');
                registerTab.classList.remove('text-gray-400', 'border-transparent');
                loginTab.classList.add('text-gray-400', 'border-transparent');
                loginTab.classList.remove('text-accent', 'border-accent');
                
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            });
        });
    </script>
</body>
</html> 
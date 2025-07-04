<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Starset Media</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full space-y-8 p-8">
        <div class="text-center">
            <img src="{{ asset('starset-logo.png') }}" alt="Starset Media" class="h-16 w-auto mx-auto mb-8">
            <h2 class="text-3xl font-bold text-white mb-2">Forgot Password</h2>
            <p class="text-gray-400">Enter your email to receive a password reset link</p>
        </div>

        @if (session('status'))
            <div class="bg-green-600/20 border border-green-600 text-green-400 px-4 py-3 rounded mb-6">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('admin.password.email') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="{{ old('email') }}"
                       required 
                       class="w-full px-4 py-3 bg-black/50 border border-gray-600 rounded-lg focus:border-accent focus:outline-none text-white placeholder-gray-400"
                       placeholder="Enter your email address">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" 
                    class="w-full bg-accent hover:bg-accent/80 text-black font-semibold py-3 px-4 rounded-lg transition-colors duration-300">
                Send Reset Link
            </button>
        </form>

        <div class="text-center space-y-2">
            <a href="{{ route('admin.login') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                ← Back to Login
            </a>
            <br>
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                ← Back to Website
            </a>
        </div>
    </div>
</body>
</html> 
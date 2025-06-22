@extends('layouts.app')

@section('content')
<!-- Services Hero -->
<section class="relative py-32 bg-gradient-to-br from-primary via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Services</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Comprehensive creative solutions to bring your vision to life
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Film & Video -->
            <div class="bg-black/50 p-8 rounded-lg">
                <h2 class="text-2xl font-bold text-accent mb-4">Film & Video Production</h2>
                <p class="text-gray-300 mb-6">Professional video content that tells compelling stories and engages your audience.</p>
                <ul class="space-y-2 text-muted">
                    <li>• Corporate Videos</li>
                    <li>• Commercial Production</li>
                    <li>• Music Videos</li>
                    <li>• Documentary Films</li>
                    <li>• Event Coverage</li>
                    <li>• Post-Production & Editing</li>
                </ul>
            </div>

            <!-- Photography -->
            <div class="bg-black/50 p-8 rounded-lg">
                <h2 class="text-2xl font-bold text-accent mb-4">Photography</h2>
                <p class="text-gray-300 mb-6">Stunning photography that captures moments and creates lasting impressions.</p>
                <ul class="space-y-2 text-muted">
                    <li>• Portrait Photography</li>
                    <li>• Event Photography</li>
                    <li>• Product Photography</li>
                    <li>• Corporate Headshots</li>
                    <li>• Artistic Photography</li>
                    <li>• Photo Editing & Retouching</li>
                </ul>
            </div>

            <!-- Graphic Design -->
            <div class="bg-black/50 p-8 rounded-lg">
                <h2 class="text-2xl font-bold text-accent mb-4">Graphic Design</h2>
                <p class="text-gray-300 mb-6">Creative design solutions that strengthen your brand and communicate your message.</p>
                <ul class="space-y-2 text-muted">
                    <li>• Brand Identity Design</li>
                    <li>• Logo Creation</li>
                    <li>• Marketing Materials</li>
                    <li>• Digital Graphics</li>
                    <li>• Print Design</li>
                    <li>• Web Graphics</li>
                </ul>
            </div>

            <!-- Something Else -->
            <div class="bg-black/50 p-8 rounded-lg">
                <h2 class="text-2xl font-bold text-accent mb-4">Something Else</h2>
                <p class="text-gray-300 mb-6">Custom creative solutions tailored to your unique needs and vision.</p>
                <ul class="space-y-2 text-muted">
                    <li>• Creative Consulting</li>
                    <li>• Concept Development</li>
                    <li>• Multi-Media Projects</li>
                    <li>• Brand Strategy</li>
                    <li>• Digital Experiences</li>
                    <li>• Custom Solutions</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's discuss your project and bring your creative vision to life.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-accent-dark text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Contact Us Today
        </a>
    </div>
</section>
@endsection 
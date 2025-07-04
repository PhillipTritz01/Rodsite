@extends('layouts.app')

@section('content')
<!-- Portfolio Hero -->
<section class="relative py-32 bg-gradient-to-br from-[#111111] via-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">Our Portfolio</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Showcasing our creative work across film, photography, graphic design, and more
            </p>
        </div>
    </div>
</section>

@if($projects->count() > 0)
    <!-- Filter Tabs -->
    <section class="py-8 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up">
                <button class="filter-btn active bg-accent text-black px-6 py-3 rounded-lg font-semibold transition-colors" data-filter="all">
                    All Projects ({{ $projects->count() }})
                </button>
                @if($filmProjects->count() > 0)
                    <button class="filter-btn bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors" data-filter="film">
                        Film ({{ $filmProjects->count() }})
                    </button>
                @endif
                @if($photographyProjects->count() > 0)
                    <button class="filter-btn bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors" data-filter="photography">
                        Photography ({{ $photographyProjects->count() }})
                    </button>
                @endif
                @if($graphicDesignProjects->count() > 0)
                    <button class="filter-btn bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors" data-filter="graphic_design">
                        Graphic Design ({{ $graphicDesignProjects->count() }})
                    </button>
                @endif
                @if($otherProjects->count() > 0)
                    <button class="filter-btn bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors" data-filter="other">
                        Other ({{ $otherProjects->count() }})
                    </button>
                @endif
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                @foreach($projects as $project)
                    <div class="project-item group cursor-pointer" data-type="{{ $project->type }}" data-aos="fade-up" onclick="window.location.href='{{ route('project.show', $project->slug) }}'">
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-all duration-300 hover:scale-105">
                            <div class="aspect-video relative overflow-hidden">
                                <img src="{{ $project->image }}" 
                                     alt="{{ $project->title }}" 
                                     class="w-full h-full object-cover object-top bg-black group-hover:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <span class="inline-block bg-accent text-black px-3 py-1 rounded-full text-sm font-semibold mb-2">
                                            {{ ucfirst(str_replace('_', ' ', $project->type)) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                                <p class="text-gray-300 mb-4">{{ Str::limit($project->description, 100) }}</p>
                                
                                <div class="flex items-center justify-between">
                                    @if($project->client)
                                        <p class="text-accent text-sm">Client: {{ $project->client }}</p>
                                    @endif
                                    @if($project->completion_date)
                                        <p class="text-gray-400 text-sm">{{ $project->completion_date->format('M Y') }}</p>
                                    @endif
                                </div>
                                
                                @if($project->featured)
                                    <div class="mt-3">
                                        <span class="inline-block bg-yellow-500 text-black px-2 py-1 rounded text-xs font-semibold">
                                            Featured
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <!-- No Projects Message -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">No Projects Yet</h2>
            <p class="text-xl text-gray-300 mb-8">
                Start building your portfolio by adding projects through the admin panel.
            </p>
            <a href="/admin/projects/create" class="inline-block bg-accent hover:bg-accent/80 text-black px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg">
                Add Your First Project
            </a>
        </div>
    </section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-[#111111]">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Work Together?</h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's create something amazing for your next project.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-white hover:bg-gray-200 text-black px-8 py-4 rounded-lg font-bold text-lg transition-colors">
            Start Your Project
        </a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-accent', 'text-black');
                b.classList.add('bg-gray-800', 'hover:bg-gray-700', 'text-white');
            });
            this.classList.add('active', 'bg-accent', 'text-black');
            this.classList.remove('bg-gray-800', 'hover:bg-gray-700', 'text-white');
            
            // Filter projects
            projectItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-type') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection 
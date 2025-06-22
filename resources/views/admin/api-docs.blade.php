@extends('admin.layout')

@section('page-title', 'API Documentation')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Starset Media Headless CMS API</h1>
    
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg p-6 text-white mb-8">
        <h2 class="text-xl font-bold mb-2">🚀 Your Custom Headless CMS is Ready!</h2>
        <p class="text-blue-100">
            Use these API endpoints to fetch content for your frontend applications, mobile apps, or any other client that needs Starset Media content.
        </p>
    </div>

    <div class="space-y-8">
        <!-- Base URL -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Base URL</h3>
            <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm">
                {{ url('/api/v1') }}
            </div>
        </div>

        <!-- Projects Endpoints -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">📁 Projects API</h3>
            
            <div class="space-y-6">
                <!-- Get All Projects -->
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Get All Projects</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">GET</span>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm mb-2">
                        GET {{ url('/api/v1/projects') }}
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Parameters:</p>
                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li><code>type</code> - Filter by project type (film, photography, graphic_design, other)</li>
                        <li><code>featured</code> - Show only featured projects (true/false)</li>
                        <li><code>per_page</code> - Number of items per page (default: 12)</li>
                        <li><code>page</code> - Page number for pagination</li>
                    </ul>
                    <a href="{{ url('/api/v1/projects') }}" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 text-sm">
                        → Try it now
                    </a>
                </div>

                <!-- Get Featured Projects -->
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Get Featured Projects</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">GET</span>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm mb-2">
                        GET {{ url('/api/v1/projects/featured') }}
                    </div>
                    <p class="text-sm text-gray-600">Returns up to 6 featured projects for homepage display.</p>
                    <a href="{{ url('/api/v1/projects/featured') }}" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 text-sm">
                        → Try it now
                    </a>
                </div>

                <!-- Get Projects by Type -->
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Get Projects by Type</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">GET</span>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm mb-2">
                        GET {{ url('/api/v1/projects/type/{type}') }}
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Available types:</p>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <a href="{{ url('/api/v1/projects/type/film') }}" target="_blank" class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">film</a>
                        <a href="{{ url('/api/v1/projects/type/photography') }}" target="_blank" class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">photography</a>
                        <a href="{{ url('/api/v1/projects/type/graphic_design') }}" target="_blank" class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">graphic_design</a>
                        <a href="{{ url('/api/v1/projects/type/other') }}" target="_blank" class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">other</a>
                    </div>
                </div>

                <!-- Get Single Project -->
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Get Single Project</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">GET</span>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm mb-2">
                        GET {{ url('/api/v1/projects/{slug}') }}
                    </div>
                    <p class="text-sm text-gray-600">Get a specific project by its slug.</p>
                    <a href="{{ url('/api/v1/projects/callisto-short-film') }}" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 text-sm">
                        → Try with sample project
                    </a>
                </div>

                <!-- Get Project Stats -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Get Project Statistics</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">GET</span>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg font-mono text-sm mb-2">
                        GET {{ url('/api/v1/projects/stats') }}
                    </div>
                    <p class="text-sm text-gray-600">Get project counts by type and other statistics.</p>
                    <a href="{{ url('/api/v1/projects/stats') }}" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 text-sm">
                        → Try it now
                    </a>
                </div>
            </div>
        </div>

        <!-- Response Format -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">📄 Response Format</h3>
            
            <p class="text-sm text-gray-600 mb-4">All API responses follow this consistent format:</p>
            
            <div class="bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
<pre>{
  "success": true,
  "data": [...],
  "pagination": {
    "current_page": 1,
    "last_page": 2,
    "per_page": 12,
    "total": 24,
    "from": 1,
    "to": 12
  }
}</pre>
            </div>
        </div>

        <!-- Sample Project Object -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">🎯 Sample Project Object</h3>
            
            <div class="bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
<pre>{
  "id": 1,
  "title": "Callisto Short Film",
  "slug": "callisto-short-film",
  "description": "A haunting science fiction short film...",
  "type": "film",
  "image_url": "https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?w=800",
  "video_url": "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
  "client": "Independent Production",
  "completion_date": "2024-03-15T00:00:00.000000Z",
  "featured": true,
  "published": true,
  "sort_order": 1,
  "created_at": "2025-06-22T04:30:00.000000Z",
  "updated_at": "2025-06-22T04:30:00.000000Z"
}</pre>
            </div>
        </div>

        <!-- Integration Examples -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">🔧 Integration Examples</h3>
            
            <div class="space-y-4">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">JavaScript/Fetch</h4>
                    <div class="bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
<pre>fetch('{{ url("/api/v1/projects/featured") }}')
  .then(response => response.json())
  .then(data => {
    console.log('Featured projects:', data.data);
  });</pre>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">React Hook Example</h4>
                    <div class="bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
<pre>const [projects, setProjects] = useState([]);

useEffect(() => {
  fetch('{{ url("/api/v1/projects") }}?type=film')
    .then(res => res.json())
    .then(data => setProjects(data.data));
}, []);</pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
            <h3 class="text-lg font-bold text-green-900 mb-4">✨ Benefits of Your Custom Headless CMS</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div>
                    <h4 class="font-semibold text-green-900 mb-2">🚀 Performance</h4>
                    <ul class="text-green-800 space-y-1">
                        <li>• Fast API responses</li>
                        <li>• Efficient database queries</li>
                        <li>• Built-in pagination</li>
                        <li>• Optimized for frontend consumption</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-green-900 mb-2">🔧 Flexibility</h4>
                    <ul class="text-green-800 space-y-1">
                        <li>• Use with any frontend framework</li>
                        <li>• Mobile app integration ready</li>
                        <li>• Custom filtering and sorting</li>
                        <li>• RESTful API design</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-green-900 mb-2">🛡️ Security</h4>
                    <ul class="text-green-800 space-y-1">
                        <li>• Only published content exposed</li>
                        <li>• Laravel security features</li>
                        <li>• Input validation and sanitization</li>
                        <li>• Secure admin interface</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-green-900 mb-2">🎯 User-Friendly</h4>
                    <ul class="text-green-800 space-y-1">
                        <li>• Intuitive admin interface</li>
                        <li>• Easy content management</li>
                        <li>• Real-time preview</li>
                        <li>• No technical knowledge required</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
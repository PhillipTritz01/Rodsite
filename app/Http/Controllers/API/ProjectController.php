<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Project::published()->orderBy('sort_order')->orderBy('created_at', 'desc');

        // Filter by type if provided
        if ($request->has('type') && $request->type !== '') {
            $query->where('type', $request->type);
        }

        // Filter featured projects
        if ($request->has('featured') && $request->featured) {
            $query->where('featured', true);
        }

        // Pagination
        $perPage = $request->get('per_page', 12);
        $projects = $query->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $projects->items(),
            'pagination' => [
                'current_page' => $projects->currentPage(),
                'last_page' => $projects->lastPage(),
                'per_page' => $projects->perPage(),
                'total' => $projects->total(),
                'from' => $projects->firstItem(),
                'to' => $projects->lastItem(),
            ]
        ]);
    }

    /**
     * Display the specified project.
     */
    public function show($slug): JsonResponse
    {
        $project = Project::published()->where('slug', $slug)->first();

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }

    /**
     * Get featured projects.
     */
    public function featured(): JsonResponse
    {
        $projects = Project::published()->featured()->orderBy('sort_order')->take(6)->get();

        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }

    /**
     * Get projects by type.
     */
    public function byType($type): JsonResponse
    {
        $validTypes = ['film', 'photography', 'graphic_design', 'other'];
        
        if (!in_array($type, $validTypes)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid project type'
            ], 400);
        }

        $projects = Project::published()->byType($type)->orderBy('sort_order')->get();

        return response()->json([
            'success' => true,
            'data' => $projects,
            'type' => $type
        ]);
    }

    /**
     * Get project statistics.
     */
    public function stats(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'total_projects' => Project::published()->count(),
                'film_projects' => Project::published()->byType('film')->count(),
                'photography_projects' => Project::published()->byType('photography')->count(),
                'graphic_design_projects' => Project::published()->byType('graphic_design')->count(),
                'featured_projects' => Project::published()->featured()->count(),
            ]
        ]);
    }
}

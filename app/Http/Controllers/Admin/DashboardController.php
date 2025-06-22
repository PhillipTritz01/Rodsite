<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\CrewMember;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'published_projects' => Project::published()->count(),
            'featured_projects' => Project::featured()->count(),
            'crew_members' => CrewMember::count(),
            'services' => Service::count(),
        ];

        $recent_projects = Project::latest()->take(5)->get();
        $recent_crew = CrewMember::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_projects', 'recent_crew'));
    }
}

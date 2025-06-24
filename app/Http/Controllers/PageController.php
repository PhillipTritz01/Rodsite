<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Project;
use App\Models\CrewMember;
use App\Models\HomePage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $filmProjects = Project::published()->where('type', 'film')->orderBy('sort_order')->orderBy('created_at', 'desc')->take(6)->get();
        $crewMembers = \App\Models\CrewMember::published()->where('core_team', true)->orderBy('sort_order')->take(4)->get();
        $homePage = \App\Models\HomePage::first() ?? new \App\Models\HomePage();
        return view('home', compact('filmProjects', 'crewMembers', 'homePage'));
    }

    public function services()
    {
        $services = Service::published()->ordered()->get();
        return view('services', compact('services'));
    }

    public function film()
    {
        $filmProjects = Project::published()->where('type', 'film')->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('film', compact('filmProjects'));
    }



    public function crew()
    {
        $crewMembers = \App\Models\CrewMember::published()->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('crew', compact('crewMembers'));
    }

    public function portfolio()
    {
        $projects = Project::published()->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        $filmProjects = $projects->where('type', 'film');
        $photographyProjects = $projects->where('type', 'photography');
        $graphicDesignProjects = $projects->where('type', 'graphic_design');
        $otherProjects = $projects->where('type', 'other');
        
        return view('portfolio', compact('projects', 'filmProjects', 'photographyProjects', 'graphicDesignProjects', 'otherProjects'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function filmAndVideoProduction()
    {
        return view('services.film-and-video-production');
    }

    public function photography()
    {
        $photographyProjects = Project::published()->where('type', 'photography')->orderBy('sort_order')->orderBy('created_at', 'desc')->take(6)->get();
        return view('services.photography', compact('photographyProjects'));
    }

    public function graphicDesign()
    {
        return view('services.graphic-design');
    }

    public function webDevelopment()
    {
        return view('services.web-development');
    }

    public function podcastProduction()
    {
        return view('services.podcast-production');
    }

    public function somethingElse()
    {
        return view('services.something-else');
    }
}

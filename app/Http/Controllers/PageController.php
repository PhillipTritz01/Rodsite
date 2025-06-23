<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        $services = Service::published()->ordered()->get();
        return view('services', compact('services'));
    }

    public function film()
    {
        return view('film');
    }

    public function photo()
    {
        return view('photo');
    }

    public function crew()
    {
        return view('crew');
    }

    public function contact()
    {
        return view('contact');
    }
}

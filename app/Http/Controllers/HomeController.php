<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        return view('home', compact('projects', 'testimonials'));
    }
}

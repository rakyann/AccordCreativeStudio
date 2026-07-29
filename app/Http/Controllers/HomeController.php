<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::orderBy('created_at', 'desc')->get();
            $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        } catch (Throwable $e) {
            $projects = collect([]);
            $testimonials = collect([]);
        }

        return view('home', compact('projects', 'testimonials'));
    }
}

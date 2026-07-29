<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('projects', 'testimonials'));
    }

    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:5120',
            'link' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $validated['image_path'] = $path;
        }

        Project::create($validated);

        return redirect()->back()->with('success', 'Project portfolio uploaded successfully!');
    }

    public function deleteProject(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully!');
    }

    public function storeTestimonial(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'client_role' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('testimonials', 'public');
            $validated['client_avatar'] = $path;
        }

        Testimonial::create($validated);

        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }

    public function deleteTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }
}

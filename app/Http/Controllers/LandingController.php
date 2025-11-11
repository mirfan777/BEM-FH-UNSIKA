<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SiteProfile;
use App\Models\Blog;
use App\Models\FormSubmission;


class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing_page' , [
            'siteProfile' => app(SiteProfile::class),
            'latestBlogs' => Blog::latest()->take(5)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        FormSubmission::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

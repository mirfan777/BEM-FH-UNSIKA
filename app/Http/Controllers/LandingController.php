<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SiteProfile;
use App\Models\Blog;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing_page' , [
            'siteProfile' => app(SiteProfile::class),
            'latestBlogs' => Blog::latest()->take(5)->get(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SiteProfile;
use App\Models\Blog;

class KegiatanController extends Controller
{

    
    public function index()
    {
        $kegiatan = Blog::all();
        return view('pages.kegiatan.index' , [
            'siteProfile' => app(SiteProfile::class),
            'kegiatan' => $kegiatan,
        ]);
    }

    public function show($slug)
    {
        $kegiatan = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.kegiatan.show', compact('kegiatan'), [
            'siteProfile' => app(SiteProfile::class),
            'kegiatan' => $kegiatan,
        ]);
    }




}

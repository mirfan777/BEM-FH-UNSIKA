<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showVisiMisi()
    {
        return view('pages.profile_visi');
    }

    public function showLogo()
    {
        return view('pages.profile_logo');
    }
}

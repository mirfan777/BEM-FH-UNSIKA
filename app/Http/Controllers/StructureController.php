<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Division;

class StructureController extends Controller
{
    public function show($slug)
    {
        $members = Member::whereHas('division', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();
        $division = Division::where('name', $slug)->first();
        return view('pages.struktur_page', compact('members', 'division'));
    }
}

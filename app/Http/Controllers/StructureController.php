<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Department;

class StructureController extends Controller
{
    public function show($slug)
    {
        $members = Member::whereHas('department', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();
        $department = Department::where('name', $slug)->first();
        return view('pages.struktur_page', compact('members', 'department'));
    }
}

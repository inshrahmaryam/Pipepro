<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        return view('team_members.index'); // Ensure this view exists
    }

    public function create()
    {
        return view('team_members.create'); // Ensure this view exists
    }

    public function store(Request $request)
    {
        // Logic for storing team member data
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first(); // Assumes 1 about row
        $projects = Project::latest()->get();
        $skills = Skill::all();

        // Optional: If showing messages in admin or dashboard
        // $messages = Message::latest()->get();

        return view('dashboard', compact('about', 'projects', 'skills'));
    }
}

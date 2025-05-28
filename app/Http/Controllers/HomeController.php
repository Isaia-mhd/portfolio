<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $languages = Language::all();
        $admin = User::where('role', 'admin')->first();

        return view("welcome", compact("projects","languages", "admin"));
    }
}

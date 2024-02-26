<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project :: all();

        return view('pages.index', compact('projects'));
    }

    public function create() {
        
        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $project = new Project();

        $project -> title = $data['title'];

        $project -> save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project :: all();

        return view('index', compact('projects'));
    }
}

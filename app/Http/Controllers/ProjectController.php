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

    public function show($id) {

        $project = Project :: find($id);

        return view('pages.show', compact('project'));
    }

    public function create() {
        
        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $project = new Project();

        $project -> title = $data['title'];
        $project -> type = $data['type'];


        $project -> save();

        return redirect() -> route('project.show', $project -> id);
    }

    public function edit($id) {

        $project = Project :: find($id);

        return view('pages.edit', compact('project'));
    }

    public function update(Request $request, $id) {

        $data = $request -> all();

        $project = Project :: find($id);

        $project -> title = $data['title'];
        $project -> type = $data['type'];


        $project -> save();

        return redirect() -> route('project.show', $project -> id);
    }
}

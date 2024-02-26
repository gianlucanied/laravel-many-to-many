<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Technology;
use App\Models\Project;


class TechnologyController extends Controller
{
    public function index() {

        $technologies = Technology :: all();

        return view('index', compact('technologies'));
    }
}

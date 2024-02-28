<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ApiController extends Controller
{
    public function getTest() {

        return response() -> json([
            'status' => 'success',
            'message' => 'ok hai fatto giusto'
        ]);
    }

    public function getProject() {

        $projects = Project :: all();

        return response()->json([
            'status' => 'success',
            'projects' => $projects
        ]);
    }
}
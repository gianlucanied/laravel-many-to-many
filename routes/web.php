<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

use App\Http\Controllers\TechnologyController;


Route::get('/', [ProjectController :: class, 'index'])
    -> name('project.index');


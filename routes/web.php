<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

use App\Http\Controllers\TechnologyController;


Route::get('/', [ProjectController :: class, 'index'])
    -> name('project.index');

Route::get('/projects/{id}', [ProjectController :: class, 'show'])
    -> name('project.show');

Route::get('/create', [ProjectController :: class, 'create'])
    -> name('project.create');

Route::post('/create', [ProjectController :: class, 'store'])
-> name('project.store');
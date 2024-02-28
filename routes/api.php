<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route :: group(['prefix' => '/v1'], function() {
    Route :: get('test', [ ApiController :: class, 'getProject'])
    -> name('api.test');
    Route :: get('projects', [ ApiController :: class, 'getProject'])
    -> name('api.projects');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OccupationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jobs',OccupationController::class);

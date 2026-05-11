<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::get('/', function() {
    return redirect()->route('plants.index');
});

Route::resource('plants', PlantController::class);
Route::get('/', function () {
    return view('welcome');
});

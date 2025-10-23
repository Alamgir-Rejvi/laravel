<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdbController;
use App\Http\Controllers\TspController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('idb', $IdbController::class);
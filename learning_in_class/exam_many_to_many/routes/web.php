<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');




Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

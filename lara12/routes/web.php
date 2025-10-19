<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\HasOneThroughController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
//  category
Route::get('/catete', [CategoryController::class, 'index']);

Route::get('/phone', [OneToOneController::class, 'index']);
Route::get('/post', [OneToManyController::class, 'index']);
Route::get('/product', [ManyToManyController::class, 'index']);
Route::get('/car', [HasOneThroughController::class, 'index']);

Route::get('create', [CategoryController::class, 'create'])->name('create');
Route::post('store', [CategoryController::class, 'store'])->name('store');

Route::get('edit/{catagory_id}', [CategoryController::class, 'update'])->name('edit');

Route::post('edit-store', [CategoryController::class, 'editStore'])->name('editStore');

Route::delete('delete', [CategoryController::class, 'destroy'])->name('delete');

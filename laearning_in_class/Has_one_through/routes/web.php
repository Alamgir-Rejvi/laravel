<?php


use App\Models\Mechanic;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;

Route::get('/', function () {
    
    $mechanics = Mechanic::with('car', 'owner')->get();
    return view('welcome', compact('mechanics'));
});




Route::get('/mechanics', [MechanicController::class, 'index'])->name('mechanics.index');
Route::get('/mechanics/{id}', [MechanicController::class, 'show'])->name('mechanics.show');

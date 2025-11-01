<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\MerchandiserController;
use App\Http\Controllers\ProductionController;




Route::get('/', function () {
    return view('welcome');
});




Route::resource('buyers', BuyerController::class);
Route::resource('merchandisers', MerchandiserController::class);
Route::resource('productions', ProductionController::class);

Route::get('/productions', [ProductionController::class, 'index'])->name('productions.index');

Route::get('/production/stages', [ProductionController::class, 'stages'])->name('admin.production.stages');

Route::get('/production/schedule', [ProductionController::class, 'schedule'])->name('admin.production.schedule');

Route::get('/production/reports', [ProductionController::class, 'reports'])->name('admin.production.reports');




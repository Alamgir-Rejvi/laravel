<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\MerchandiserController;



Route::get('/', function () {
    return view('welcome');
});




Route::resource('buyers', BuyerController::class);
Route::resource('merchandisers', MerchandiserController::class);



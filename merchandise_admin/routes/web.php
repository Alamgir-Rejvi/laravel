<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\MerchandiserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\PaymentController;


Route::get('/', function () {
    return view('welcome');
});


// Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){
//     Route::resource('buyers', BuyerController::class);
//     Route::resource('merchandisers', MerchandiserController::class);
//     Route::resource('orders', OrderController::class);
//     Route::resource('samples', SampleController::class);
//     Route::resource('fabrics', FabricController::class);
//     Route::resource('shipments', ShipmentController::class);
//     Route::resource('payments', PaymentController::class);
   
// });


Route::resource('buyers', BuyerController::class);

// Route::prefix('admin')->group(function () {
//     Route::resource('buyers', BuyerController::class);
// });



<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about', function (){
    return 'This is our about page.';
})->name('about');


Route ::get('/contact', function (){
    return "This is our contact page.";
})->name('contact');

Route ::get('/service' , function (){
    return "This is our service page.";
})->name('service');


Route ::get('/hello', function (){
    return view('hello');
})->name('hello');
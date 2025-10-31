<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post/{id}',function(string $id){
//     return "<h1> Post ID : " .$id. "</h1>";
// });

Route::get('/post/{id?}',function(string $id = null){
    if($id){
        return "<h1> Post ID : " .$id. "</h1>";
    }else{
        return "<h1>ID is not Found</h1>";
    };
    
});
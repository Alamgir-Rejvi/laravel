<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserPhone;
use App\Models\User;


Route::get('/', function () {

    // $users = User::find(1);
    // $userphone = User::find(1)->username;
    
    // $userphone = UserPhone::all();
    // foreach ($userphone as $joindata){
    //     return $joindata->user->name. "</br>" . $joindata->user->email . "</br>".
    //     $joindata->user_phone. "</br>".$joindata->address ;

    // }
    
    $profile = User::all();
    foreach ($profile as $joindata){
        
    }
    return $joindata->name. "</br>". $joindata->email ."</br>" . $joindata->profile->address ."</br>" . $joindata->profile->phone;


    return view('welcome');
});

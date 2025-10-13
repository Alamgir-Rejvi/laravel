<?php

use App\Models\UserPhone;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $users = User::find(1);
    // $userphone = User::find(1)->username;
    
    $userphone = UserPhone::all();
    foreach ($userphone as $joindata){
        return $joindata->user->name. "</br>" . $joindata->user->email . "</br>".
        $joindata->user_phone. "</br>".$joindata->address ;

    }
    

    return view('welcome');
});

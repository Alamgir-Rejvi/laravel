<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function index()
    {
        $users = Category::all();
        //    return  $users;
         return view('index',compact('users'));

    }


}

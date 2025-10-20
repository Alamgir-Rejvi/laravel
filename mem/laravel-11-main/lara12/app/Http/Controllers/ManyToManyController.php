<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;

use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
       public function index()
    {
        $product = Product::with('brands')->get();
        //    return  $product;
         return view('index',compact('product'));

    }
}

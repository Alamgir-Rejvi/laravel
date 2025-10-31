<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get product with relations
    $product = Product::with(['buyer', 'manufacturer', 'productions'])->find(1);

// Access related data
    echo $product->buyer->name;
    echo $product->manufacturer->name;
    foreach ($product->productions as $production) {
        echo $production->status;
    }

}



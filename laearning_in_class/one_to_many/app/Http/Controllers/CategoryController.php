<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        // ক্যাটাগরি ও তার প্রোডাক্টগুলোসহ আনা
        $categories = Category::with('products')->get();
        return view('categories.index', compact('categories'));
    }

    public function createSampleData()
    {
        // Category তৈরি
        $electronics = Category::create(['name' => 'Electronics']);
        $furniture = Category::create(['name' => 'Furniture']);

        // Products তৈরি
        Product::create(['name' => 'Laptop', 'category_id' => $electronics->id]);
        Product::create(['name' => 'Mobile', 'category_id' => $electronics->id]);
        Product::create(['name' => 'Chair', 'category_id' => $furniture->id]);

        return 'Sample data created!';
    }
}

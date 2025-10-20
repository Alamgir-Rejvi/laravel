<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
      public function index()
    {
        $post = Post::with('comments')->get();
        //    return  $post;
         return view('index',compact('post'));

    }
}

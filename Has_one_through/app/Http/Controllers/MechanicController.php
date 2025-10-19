<?php

namespace App\Http\Controllers;
use App\Models\Mechanic;

use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {
        // with() দিয়ে eager loading করা হচ্ছে যাতে রিলেশনগুলো আগে থেকেই লোড হয়
        $mechanics = Mechanic::with('car', 'owner')->get();

        // view এ পাঠানো হচ্ছে
        return view('mechanics.index', compact('mechanics'));
    }

    // show() মেথড: নির্দিষ্ট mechanic দেখাবে
    public function show($id)
    {
        // id দিয়ে mechanic বের করছি, সাথে রিলেশনগুলোও নিচ্ছি
        $mechanic = Mechanic::with('car', 'owner')->findOrFail($id);

        return view('mechanics.show', compact('mechanic'));
    }
}





<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Category;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function index()
    {
        $gigs = Gig::with('category', 'seller')->paginate(10);
        return view('gigs.index', compact('gigs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('gigs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        Gig::create([
            'seller_id' => 1, // for now, assume a demo seller
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'delivery_time' => $request->delivery_time,
            'status' => 'published'
        ]);

        return redirect()->route('gigs.index')->with('success', 'Gig created successfully.');
    }

    public function show(Gig $gig)
    {
        return view('gigs.show', compact('gig'));
    }

    public function edit(Gig $gig)
    {
        $categories = Category::all();
        return view('gigs.edit', compact('gig', 'categories'));
    }

    public function update(Request $request, Gig $gig)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        $gig->update($request->all());

        return redirect()->route('gigs.index')->with('success', 'Gig updated successfully.');
    }

    public function destroy(Gig $gig)
    {
        $gig->delete();
        return redirect()->route('gigs.index')->with('success', 'Gig deleted successfully.');
    }
}

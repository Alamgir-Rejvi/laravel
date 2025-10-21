<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Merchandiser;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::with('merchandiser')->latest()->get();
        return view('admin.buyers.index', compact('buyers'));
    }

    public function create()
    {
        $merchandisers = Merchandiser::all();
        return view('admin.buyers.create', compact('merchandisers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'merchandiser_id' => 'required|exists:merchandisers,id',
        ]);

        Buyer::create($request->all());

        return redirect()->route('buyers.index')->with('success', 'Buyer added successfully.');
    }

    public function edit(Buyer $buyer)
    {
        $merchandisers = Merchandiser::all();
        return view('admin.buyers.edit', compact('buyer', 'merchandisers'));
    }

    public function update(Request $request, Buyer $buyer)
    {
        $request->validate([
            'name' => 'required',
            'merchandiser_id' => 'required|exists:merchandisers,id',
        ]);

        $buyer->update($request->all());

        return redirect()->route('buyers.index')->with('success', 'Buyer updated successfully.');
    }

    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect()->route('buyers.index')->with('success', 'Buyer deleted successfully.');
    }
}

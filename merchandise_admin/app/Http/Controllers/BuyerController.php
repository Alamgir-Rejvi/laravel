<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::latest()->get();
        return view('buyers.index', compact('buyers'));
    }

    public function create()
    {
        return view('buyers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:buyers',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Buyer::create($request->all());

        return redirect()->route('buyers.index')->with('success', 'Buyer added successfully!');
    }

    public function edit(string $id)
    {
        $buyer = Buyer::findOrFail($id);
        return view('buyers.edit', compact('buyer'));
    }

    public function update(Request $request, string $id)
    {
        $buyer = Buyer::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:buyers,email,'.$buyer->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $buyer->update($request->all());

        return redirect()->route('buyers.index')->with('success', 'Buyer updated successfully!');
    }

    public function destroy(string $id)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->delete();

        return redirect()->route('buyers.index')->with('success', 'Buyer deleted successfully!');
    }
}

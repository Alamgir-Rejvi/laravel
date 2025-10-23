<?php

namespace App\Http\Controllers;

use App\Models\Merchandiser;
use Illuminate\Http\Request;

class MerchandiserController extends Controller
{
    public function index()
    {
        $merchandisers = Merchandiser::latest()->get();
        return view('merchandisers.index', compact('merchandisers'));
    }

    public function create()
    {
        return view('merchandisers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:merchandisers',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Merchandiser::create($request->all());

        return redirect()->route('merchandisers.index')->with('success', 'Buyer added successfully!');
    }

    public function edit(string $id)
    {
        $merchandiser = Merchandiser::findOrFail($id);
        return view('merchandisers.edit', compact('merchandisers'));
    }

    public function update(Request $request, string $id)
    {
        $merchandiser = Merchandiser::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:merchandisers,email,'.$merchandiser->id,
            'phone' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:255',
        ]);

        $merchandiser->update($request->all());

        return redirect()->route('merchandisers.index')->with('success', 'Merchandiser updated successfully!');
    }

    public function destroy(string $id)
    {
        $merchandiser = Merchandiser::findOrFail($id);
        $merchandiser->delete();

        return redirect()->route('merchandisers.index')->with('success', 'Merchandiser deleted successfully!');
    }
}

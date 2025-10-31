<?php

namespace App\Http\Controllers;

use App\Models\Production;
use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productions = Production::with(['buyer', 'product'])->latest()->get();
        return view('admin.production.index', compact('productions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buyers = Buyer::all();
        $products = Product::all();
        return view('admin.production.create', compact('buyers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'buyer_id' => 'required',
            'product_id' => 'required',
            'order_no' => 'required',
            'target_quantity' => 'required|integer',
            'production_date' => 'required|date',
        ]);

        Production::create($request->all());

        return redirect()->route('productions.index')->with('success', 'Production record added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Production $production)
    {
        return view('admin.production.show', compact('production'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Production $production)
    {
        $buyers = Buyer::all();
        $products = Product::all();
        return view('admin.production.edit', compact('production', 'buyers', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Production $production)
    {
        $request->validate([
            'target_quantity' => 'required|integer',
            'completed_quantity' => 'integer|nullable',
            'status' => 'required',
        ]);

        $production->update($request->all());

        return redirect()->route('productions.index')->with('success', 'Production updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Production $production)
    {
        $production->delete();

        return redirect()->route('productions.index')->with('success', 'Production deleted successfully!');
    }

    public function stages()
    {
    return view('admin.production.stages');
    }


    public function schedule()
    {
    return view('admin.production.schedule');
    }

    public function reports()
    {
    return view('admin.production.reports');
    }

}

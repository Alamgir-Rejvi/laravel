<?php

namespace App\Http\Controllers;

use App\Models\Idb;
use Illuminate\Http\Request;

class IdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idb = Idb::with('student')->get();
        return $idb;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Idb $idb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idb $idb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idb $idb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idb $idb)
    {
        //
    }
}

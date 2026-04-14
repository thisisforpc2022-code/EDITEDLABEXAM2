<?php

namespace App\Http\Controllers;


use App\Models\Rice;
use Illuminate\Http\Request;

class RiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rices = Rice::all();
        return view('rices.index', compact('rices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable'
        ]);

        Rice::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description
    ]);

        return redirect()->route('rices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rice $rice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Rice $rice)
    {
        return view('rices.edit', compact('rice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rice $rice)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable'
        ]);
            $rice->update([
        'name' => $request->name,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description
    ]);
        return redirect()->route('rices.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Rice $rice)
    {
        $rice->delete();

        return redirect()->route('rices.index');
    }
}

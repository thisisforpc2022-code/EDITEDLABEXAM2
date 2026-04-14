<?php

namespace App\Http\Controllers;

use App\Models\Rice;
use App\Models\Order;
use App\Models\Payment;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('rice')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rices = Rice::all();
        return view('orders.create', compact('rices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rice_id' => 'required',
            'quantity' => 'required|integer|min:1'
    ]);

        $rice = Rice::findorFail($request->rice_id);

        $total = $rice->price * $request->quantity;

        $order = Order::create([
            'rice_id' => $rice->id,
            'quantity' => $request->quantity,
            'total' => $total
    ]);

    // optional: auto create payment (good for your project)
        Payment::create([
            'order_id' => $order->id,
            'status' => 'Unpaid'
    ]);

    return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}

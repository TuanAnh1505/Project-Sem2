<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('orderDetails.index', compact('orderDetails'));
    }

    public function create()
    {
        return view('orderDetails.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'OrderID' => 'required|exists:orders,Id',
            'ProductID' => 'required|exists:product,ProductID',
            'Quantity' => 'required|integer',
            'TotalAmount' => 'required|numeric',
        ]);

        OrderDetail::create($validatedData);
        return redirect()->route('orderDetails.index')->with('success', 'Order Detail created successfully');
    }

    public function show(OrderDetail $orderDetail)
    {
        return view('orderDetails.show', compact('orderDetail'));
    }

    public function edit(OrderDetail $orderDetail)
    {
        return view('orderDetails.edit', compact('orderDetail'));
    }

    public function update(Request $request, OrderDetail $orderDetail)
    {
        $validatedData = $request->validate([
            'OrderID' => 'required|exists:orders,Id',
            'ProductID' => 'required|exists:product,ProductID',
            'Quantity' => 'required|integer',
            'TotalAmount' => 'required|numeric',
        ]);

        $orderDetail->update($validatedData);
        return redirect()->route('orderDetails.index')->with('success', 'Order Detail updated successfully');
    }

    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();
        return redirect()->route('orderDetails.index')->with('success', 'Order Detail deleted successfully');
    }
}

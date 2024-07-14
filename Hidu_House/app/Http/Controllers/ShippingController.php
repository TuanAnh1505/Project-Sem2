<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::all();
        return view('shippings.index', compact('shippings'));
    }

    public function create()
    {
        return view('shippings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
            'Phone' => 'required|max:255',
            'Price' => 'required|numeric',
        ]);

        Shipping::create($validatedData);
        return redirect()->route('shippings.index')->with('success', 'Shipping created successfully');
    }

    public function show(Shipping $shipping)
    {
        return view('shippings.show', compact('shipping'));
    }

    public function edit(Shipping $shipping)
    {
        return view('shippings.edit', compact('shipping'));
    }

    public function update(Request $request, Shipping $shipping)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
            'Phone' => 'required|max:255',
            'Price' => 'required|numeric',
        ]);

        $shipping->update($validatedData);
        return redirect()->route('shippings.index')->with('success', 'Shipping updated successfully');
    }

    public function destroy(Shipping $shipping)
    {
        $shipping->delete();
        return redirect()->route('shippings.index')->with('success', 'Shipping deleted successfully');
    }
}

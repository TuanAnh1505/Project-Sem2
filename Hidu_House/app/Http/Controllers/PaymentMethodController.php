<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('paymentMethods.index', compact('paymentMethods'));
    }

    public function create()
    {
        return view('paymentMethods.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);

        PaymentMethod::create($validatedData);
        return redirect()->route('paymentMethods.index')->with('success', 'Payment Method created successfully');
    }

    public function show(PaymentMethod $paymentMethod)
    {
        return view('paymentMethods.show', compact('paymentMethod'));
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('paymentMethods.edit', compact('paymentMethod'));
    }

    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);

        $paymentMethod->update($validatedData);
        return redirect()->route('paymentMethods.index')->with('success', 'Payment Method updated successfully');
    }

    public function destroy(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();
        return redirect()->route('paymentMethods.index')->with('success', 'Payment Method deleted successfully');
    }
}

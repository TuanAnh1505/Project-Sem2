<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        return view('vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('vouchers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'VoucherCode' => 'required|max:255|unique:voucher,VoucherCode',
            'Quantity' => 'required|integer',
            'ExpiryDate' => 'required|date',
        ]);

        Voucher::create($validatedData);
        return redirect()->route('vouchers.index')->with('success', 'Voucher created successfully');
    }

    public function show(Voucher $voucher)
    {
        return view('vouchers.show', compact('voucher'));
    }

    public function edit(Voucher $voucher)
    {
        return view('vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, Voucher $voucher)
    {
        $validatedData = $request->validate([
            'VoucherCode' => 'required|max:255|unique:voucher,VoucherCode,'.$voucher->VoucherID.',VoucherID',
            'Quantity' => 'required|integer',
            'ExpiryDate' => 'required|date',
        ]);

        $voucher->update($validatedData);
        return redirect()->route('vouchers.index')->with('success', 'Voucher updated successfully');
    }

    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('vouchers.index')->with('success', 'Voucher deleted successfully');
    }
}

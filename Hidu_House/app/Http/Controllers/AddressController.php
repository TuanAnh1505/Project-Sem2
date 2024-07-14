<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the addresses.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();
        return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new address.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created address in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'City' => 'required|string|max:255',
            'District' => 'required|string|max:255',
            'Ward' => 'required|string|max:255',
            'Lane_Street' => 'required|string|max:255',
        ]);

        Address::create($validatedData);

        return redirect()->route('addresses.index')
            ->with('success', 'Address created successfully.');
    }

    /**
     * Display the specified address.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified address.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    /**
     * Update the specified address in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $validatedData = $request->validate([
            'City' => 'required|string|max:255',
            'District' => 'required|string|max:255',
            'Ward' => 'required|string|max:255',
            'Lane_Street' => 'required|string|max:255',
        ]);

        $address->update($validatedData);

        return redirect()->route('addresses.index')
            ->with('success', 'Address updated successfully');
    }

    /**
     * Remove the specified address from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('addresses.index')
            ->with('success', 'Address deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'AddressID' => 'nullable|exists:address,AddressID',
            'Password' => 'required|min:6',
            'Phone' => 'required|unique:user,Phone',
            'Gmail' => 'required|email|unique:user,Gmail',
            'VoucherID' => 'nullable|exists:voucher,VoucherID',
            'UserName' => 'required|unique:user,UserName',
        ]);

        User::create($validatedData);
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'AddressID' => 'nullable|exists:address,AddressID',
            'Password' => 'sometimes|min:6',
            'Phone' => 'required|unique:user,Phone,'.$user->UserID.',UserID',
            'Gmail' => 'required|email|unique:user,Gmail,'.$user->UserID.',UserID',
            'VoucherID' => 'nullable|exists:voucher,VoucherID',
            'UserName' => 'required|unique:user,UserName,'.$user->UserID.',UserID',
        ]);

        $user->update($validatedData);
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}

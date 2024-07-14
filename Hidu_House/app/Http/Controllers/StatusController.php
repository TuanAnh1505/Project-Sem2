<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);

        Status::create($validatedData);
        return redirect()->route('statuses.index')->with('success', 'Status created successfully');
    }

    public function show(Status $status)
    {
        return view('statuses.show', compact('status'));
    }

    public function edit(Status $status)
    {
        return view('statuses.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);

        $status->update($validatedData);
        return redirect()->route('statuses.index')->with('success', 'Status updated successfully');
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index')->with('success', 'Status deleted successfully');
    }
}

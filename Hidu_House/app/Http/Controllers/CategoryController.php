<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('categorys.index', compact('categorys'));
    }

    public function create()
    {
        return view('categorys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('categorys.index')
                        ->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categorys.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categorys.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('categorys.index')
                        ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categorys.index')
                        ->with('success', 'Category deleted successfully.');
    }
}

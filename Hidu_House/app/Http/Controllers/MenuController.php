<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MenuController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('admin.menu.index', compact('categories'));
    // }

    public function show($CategoryID)
    {
        // $category = Category::findOrFail($CategoryID);
        // $products = Product::where('CategoryID', $CategoryID)->get();
        // $categories = Category::all();
        // return view('admin.menu.show', compact('category', 'products', 'categories'));
        $category = Category::findOrFail($CategoryID);
        $products = Product::where('CategoryID', $CategoryID)->get();
        $products1 = Product::where('CategoryID', 5)->get();
        $categories = Category::all();
        return view('admin.menu.show', compact('category', 'products', 'products1', 'categories'));
    }

    public function showProduct($ProductID)
    {
        $product = Product::findOrFail($ProductID);
        return view('admin.product.show', compact('product'));
    }
}

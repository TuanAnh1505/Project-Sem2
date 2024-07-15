<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Baiviet;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categoryIdsExcept5 = [1, 2, 3, 4];
        $products = Product::whereIn('CategoryID', $categoryIdsExcept5)->get();
        $products1 = Product::where('CategoryID', 5)->get();
        $categories = Category::all();
        return view('admin.dashboard', compact('products', 'products1', 'categories'));
    }

    public function welcome()
    {
        $categoryIdsExcept5 = [1, 2, 3, 4];
        $products = Product::whereIn('CategoryID', $categoryIdsExcept5)->get();
        $products1 = Product::where('CategoryID', 5)->get();
        $categories = Category::all();
        return view('welcome', compact('products', 'products1', 'categories'));
    }

    public function showBlog()
    {
        $baiviets = Baiviet::all();
        return view('blog', compact('baiviets'));
    }



    public function showDetails($mabv)
    {
        $baiviet = Baiviet::find($mabv);

        if (!$baiviet) {
            abort(404); 
        }

        $otherBaiviets = Baiviet::where('id_bv', '!=', $mabv)->get();

        return view('blog-details', compact('baiviet', 'otherBaiviets'));
    }


    public function showCategories()
{
    $categories = Category::all();
    return view('dmsp', compact('categories'));
}

public function showProductsByCategory($CategoryID)
{
    $products = Product::where('CategoryID', $CategoryID)->get();
    return view('dmsp', compact('products'));
}
}

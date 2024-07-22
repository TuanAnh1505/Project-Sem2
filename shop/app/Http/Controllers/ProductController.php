<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Models\Menu;
use App\Models\Slider;

class ProductController extends Controller
{
    protected $productService;


    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index($id = '', $slug = '')
    {
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);
        $menus = Menu::all(); 

        return view('products.content', [
            'title' => $product->name,
            'product' => $product,
            'products' => $productsMore,
            'menus' => $menus
        ]);
    }
}

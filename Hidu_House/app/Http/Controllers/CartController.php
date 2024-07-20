<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;
use App\Models\Menu; 
use App\Models\Order;
use App\Models\Customer;

class CartController extends Controller
{
    protected $cartService;
    protected $cart;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index1(Request $request)
    {
        $result = $this->cartService->create($request);
        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/carts');
    }

    public function show1()
    {
        $products = $this->cartService->getProduct();
        $menus = Menu::all();

        return view('carts.list', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts'),
            'menus' => $menus
        ]);
    }


   public function update(Request $request)
    {
        $this->cartService->update($request);

        return redirect('/carts');
    }

    public function remove($id = 0)
    {
        $this->cartService->remove($id);

        return redirect('/carts');
    }

    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);

        return redirect()->back();
    }


    
   
}

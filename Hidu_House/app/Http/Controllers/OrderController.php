<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('user', 'status')->paginate(10);
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $statuses = Status::all();
        return view('orders.create', compact('products', 'statuses'));
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'UserID' => 'required|exists:user,UserID',
            'PaymentID' => 'required|exists:payment,PaymentID',
            'ShippingID' => 'required|exists:shipping,id',
            'StatusID' => 'required|exists:status,StatusID',
            'VoucherID' => 'nullable|exists:voucher,VoucherID',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:product,ProductID',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            $order = Order::create([
                'UserID' => $validatedData['UserID'],
                'PaymentID' => $validatedData['PaymentID'],
                'ShippingID' => $validatedData['ShippingID'],
                'StatusID' => $validatedData['StatusID'],
                'VoucherID' => $validatedData['VoucherID'],
            ]);

            $totalQuantity = 0;
            $totalAmount = 0;

            foreach ($validatedData['products'] as $productData) {
                $product = Product::findOrFail($productData['id']);
                $quantity = $productData['quantity'];
                $amount = $product->Price * $quantity;

                OrderDetail::create([
                    'OrderID' => $order->Id,
                    'ProductID' => $product->ProductID,
                    'Quantity' => $quantity,
                    'TotalAmount' => $amount,
                ]);

                $totalQuantity += $quantity;
                $totalAmount += $amount;
            }

            $order->update([
                'Quantity' => $totalQuantity,
                'TotalAmount' => $totalAmount,
            ]);

            DB::commit();

            return redirect()->route('orders.show', $order->Id)->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Error creating order: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->load('user', 'payment', 'shipping', 'status', 'voucher', 'orderDetails.product');
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $statuses = Status::all();
        $order->load('orderDetails.product');
        return view('orders.edit', compact('order', 'statuses'));
    }

    /**
     * Update the specified order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'StatusID' => 'required|exists:status,StatusID',
        ]);

        $order->update($validatedData);

        return redirect()->route('orders.show', $order->Id)->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified order from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        DB::beginTransaction();

        try {
            // Delete related order details
            $order->orderDetails()->delete();

            // Delete the order
            $order->delete();

            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Error deleting order: ' . $e->getMessage());
        }
    }

    /**
     * Display orders for the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrders()
    {
        $orders = Order::where('UserID', Auth::id())
                       ->with('status')
                       ->orderBy('created_at', 'desc')
                       ->paginate(10);

        return view('orders.my-orders', compact('orders'));
    }

    /**
     * Cancel an order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function cancel(Order $order)
    {
        if ($order->UserID !== Auth::id()) {
            return back()->with('error', 'You are not authorized to cancel this order.');
        }

        if ($order->StatusID !== 1) { // Assuming 1 is 'Pending' status
            return back()->with('error', 'This order cannot be cancelled.');
        }

        $order->update(['StatusID' => 5]); // Assuming 5 is 'Cancelled' status

        return redirect()->route('orders.my-orders')->with('success', 'Order cancelled successfully');
    }
}

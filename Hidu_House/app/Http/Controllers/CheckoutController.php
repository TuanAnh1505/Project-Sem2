<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Payment;
use App\Models\Shipping;
use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display the checkout page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $total = $this->calculateTotal($cart);
        $shippingMethods = Shipping::all();
        $paymentMethods = Payment::all();

        return view('checkout.index', compact('cart', 'total', 'shippingMethods', 'paymentMethods'));
    }

    /**
     * Process the checkout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_id' => 'required|exists:shipping,id',
            'payment_id' => 'required|exists:payment,PaymentID',
            'voucher_code' => 'nullable|exists:voucher,VoucherCode',
        ]);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $user = Auth::user();
        $total = $this->calculateTotal($cart);
        $shipping = Shipping::findOrFail($validatedData['shipping_id']);
        $payment = Payment::findOrFail($validatedData['payment_id']);

        // Apply voucher if provided
        $voucher = null;
        if (!empty($validatedData['voucher_code'])) {
            $voucher = Voucher::where('VoucherCode', $validatedData['voucher_code'])
                ->where('ExpiryDate', '>=', now())
                ->where('Quantity', '>', 0)
                ->first();

            if ($voucher) {
                $total -= $voucher->DiscountAmount; // Assuming there's a DiscountAmount field
                $voucher->Quantity -= 1;
                $voucher->save();
            }
        }

        DB::beginTransaction();

        try {
            // Create order
            $order = Order::create([
                'UserID' => $user->UserID,
                'Quantity' => array_sum(array_column($cart, 'quantity')),
                'TotalAmount' => $total + $shipping->Price,
                'PaymentID' => $payment->PaymentID,
                'ShippingID' => $shipping->id,
                'StatusID' => 1, // Assuming 1 is for 'Pending' status
                'VoucherID' => $voucher ? $voucher->VoucherID : null,
            ]);

            // Create order details
            foreach ($cart as $productId => $item) {
                OrderDetail::create([
                    'OrderID' => $order->Id,
                    'ProductID' => $productId,
                    'Quantity' => $item['quantity'],
                    'TotalAmount' => $item['Price'] * $item['quantity'],
                ]);
            }

            DB::commit();

            // Clear the cart
            session()->forget('cart');

            return redirect()->route('orders.show', $order->Id)->with('success', 'Your order has been placed successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while processing your order. Please try again.');
        }
    }

    /**
     * Calculate the total price of the cart.
     *
     * @param array $cart
     * @return float
     */
    private function calculateTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['Price'] * $item['quantity'];
        }
        return $total;
    }
}

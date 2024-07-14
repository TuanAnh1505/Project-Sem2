<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the payments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::with('user', 'paymentMethod')->paginate(10);
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentMethods = PaymentMethod::all();
        return view('payments.create', compact('paymentMethods'));
    }

    /**
     * Store a newly created payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'UserID' => 'required|exists:user,UserID',
            'Time' => 'required|date_format:H:i:s',
            'MethodID' => 'required|exists:paymentmethod,MethodID',
            'Date' => 'required|date',
        ]);

        $payment = Payment::create($validatedData);

        return redirect()->route('payments.show', $payment->PaymentID)->with('success', 'Payment created successfully');
    }

    /**
     * Display the specified payment.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        $payment->load('user', 'paymentMethod');
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified payment.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $paymentMethods = PaymentMethod::all();
        return view('payments.edit', compact('payment', 'paymentMethods'));
    }

    /**
     * Update the specified payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $validatedData = $request->validate([
            'Time' => 'required|date_format:H:i:s',
            'MethodID' => 'required|exists:paymentmethod,MethodID',
            'Date' => 'required|date',
        ]);

        $payment->update($validatedData);

        return redirect()->route('payments.show', $payment->PaymentID)->with('success', 'Payment updated successfully');
    }

    /**
     * Remove the specified payment from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully');
    }

    /**
     * Process a payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $validatedData = $request->validate([
            'MethodID' => 'required|exists:paymentmethod,MethodID',
            'Amount' => 'required|numeric|min:0',
        ]);

        // Here you would typically integrate with a payment gateway
        // For this example, we'll just create a new payment record

        $payment = Payment::create([
            'UserID' => Auth::id(),
            'Time' => now()->format('H:i:s'),
            'MethodID' => $validatedData['MethodID'],
            'Date' => now()->toDateString(),
            'Amount' => $validatedData['Amount'],
        ]);

        // Simulate a successful payment
        $success = true;

        if ($success) {
            return redirect()->route('payments.show', $payment->PaymentID)->with('success', 'Payment processed successfully');
        } else {
            $payment->delete(); // Remove the payment record if it failed
            return back()->with('error', 'Payment processing failed. Please try again.');
        }
    }

    /**
     * Display the user's payment history.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $payments = Payment::where('UserID', Auth::id())
                           ->with('paymentMethod')
                           ->orderBy('Date', 'desc')
                           ->orderBy('Time', 'desc')
                           ->paginate(10);

        return view('payments.history', compact('payments'));
    }

    /**
     * Generate a payment report.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function report(Request $request)
    {
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $payments = Payment::whereBetween('Date', [$validatedData['start_date'], $validatedData['end_date']])
                           ->with('user', 'paymentMethod')
                           ->get();

        $totalAmount = $payments->sum('Amount');
        $paymentMethodTotals = $payments->groupBy('MethodID')
                                        ->map(function ($group) {
                                            return $group->sum('Amount');
                                        });

        return view('payments.report', compact('payments', 'totalAmount', 'paymentMethodTotals'));
    }
}

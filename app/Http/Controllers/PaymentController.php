<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function place_order(Request $request)
    {
        $userId = Auth::id();
        $order_id_tbl = $request->tbl_order_id;
        $payment = new Payment();


        $payment->rzr_order_id = $request->order_id;
        $payment->tbl_order_id = $order_id_tbl;
        $payment->user_id = $userId;
        $payment->payment_id = $request->payment_id;
        $payment->payment_mode = $request->payment_mode;

        try {
            $saved = $payment->save();

            if ($saved) {
                $order = Order::find($order_id_tbl);

                $order->payment_status = 'complete';
                $order->update();
                
                
              $cart = Cart::where('user_id', $userId)->delete();

                return response()->json(['response' => 1]);
                
            } else {
                return response()->json(['response' => 0, 'message' => 'Payment not saved'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['response' => 0, 'message' => 'An error occurred'], 500);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function delete_order(Request $request)
    {
        $tbl_order_id = $request->tbl_order_id;
    
        // Delete the order
        $order = Order::where('id', $tbl_order_id)->first();
    
        if ($order) {
            $order->delete();
            
            // Delete associated order items
            $order_items = OrderItem::where('order_id', $tbl_order_id)->get();
    
            foreach ($order_items as $order_item) {
                $order_item->delete();
            }
    
            return response()->json(['message' => 'Order and associated items deleted successfully']);
        } else {
            dd('not delete');
            die();
            return response()->json(['message' => 'Order not found'], 404);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

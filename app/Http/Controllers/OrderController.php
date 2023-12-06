<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Payment;
use Session;
use Exception;
// use Alert;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
     public function orders()
    {
        //orders list of admin dashboard
        
        $orders = Order::latest()->get();
        
        $orderItem = [];
        $user = [];
        foreach($orders as $order){
            $orderItem[] = OrderItem::where('order_id',$order->id)->get();
            $user[] = User::where('id',$order->user_id)->get();
        }
       
        
        return view('admin.pages.orders',compact('orders','orderItem','user'));
    }
   
    public function my_order_details($id)
    {
        $my_orders = Order::find($id);
        //  $orderItem = OrderItem::where('order_id',$id)->get();
        return view('my_order_details',compact('my_orders'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $tbl_order = Order::where('user_id',$userId)->latest()->get();
        // $tbl_order_item = [];

        // foreach ($tbl_order as $order) {
        //     $tbl_order_item[] = OrderItem::where('order_id', $order->id)->get();
            
        //       }
        
        return view('my_order',compact('tbl_order'));
    }

   
    public function store(Request $request)
    {
        
        // database normalization 
        
        $tokenNo = 'ORD-' . strtoupper(uniqid());
        $userId = Auth::id();


        $totalAmount = $request->total_amount;
        $paymentMode = $request->payment_mode;

        $order = new Order();

        $order->order_no = $tokenNo;
        $order->user_id = $userId;
        $order->items = $request->items;
        $order->total_amount = $totalAmount;
        $order->payment_mode = $paymentMode;
        $order->payment_status = $request->has('payment_status') ? $request->payment_status : 'pending';
        $order->delivery_address = $request->delivery_address;
        $order->pin_code = $request->pin_code;
        $order->delivery_status = $request->has('delivery_status') ? $request->delivery_status : 'proccessing';

        $order->save();

        $tbl_order = Order::latest()->first();


        $order_id = $tbl_order->id;
        $home_id = $request->has('home_id') ? $request->home_id : null;
        $royal_id = $request->has('royal_id') ? $request->royal_id : null;
        $hospital_id = $request->has('hospital_id') ? $request->hospital_id : null;
        $hotel_id = $request->has('hotel_id') ? $request->hotel_id : null;
        $pillow_id = $request->has('pillow_id') ? $request->pillow_id : null;
        $protector_id = $request->has('protector_id') ? $request->protector_id : null;
        $topper_id = $request->has('topper_id') ? $request->topper_id : null;
        $product_name = $request->product_name;
        $master_size_id = $request->master_size_id;
        $unit_id = $request->unit_id;
        $size_id = $request->size_id;
        $thickness_id = $request->thickness_id;
        $price = $request->product_price;
        $quantity = $request->quantity;
        $image = $request->image;



        foreach ($product_name as $index => $product) {
            $order_item = new OrderItem();

            $order_item->product_name = $product;

            $order_item->order_id = $order_id;
            
            $order_item->home_id = is_numeric($home_id[$index]) ? (int)$home_id[$index] : null;
            $order_item->royal_id = is_numeric($royal_id[$index]) ? (int)$royal_id[$index] : null;
            $order_item->hospital_id = is_numeric($hospital_id[$index]) ? (int)$hospital_id[$index] : null;
            $order_item->hotel_id = is_numeric($hotel_id[$index]) ? (int)$hotel_id[$index] : null;
            $order_item->pillow_id = is_numeric($pillow_id[$index]) ? (int)$pillow_id[$index] : null;
            $order_item->protector_id = is_numeric($protector_id[$index]) ? (int)$protector_id[$index] : null;
            $order_item->topper_id = is_numeric($topper_id[$index]) ? (int)$topper_id[$index] : null;
            
            $value = $master_size_id[$index];
            
            if (is_numeric($value)) {
                $order_item->master_size_id = (int)$value;
            } else {
                $order_item->master_size_id = $value;
            }
            $order_item->unit_id = (int)$unit_id[$index];
            $order_item->size_id = (int)$size_id[$index];
            // $order_item->thickness_id = (int)$thickness_id[$index];
            if (isset($thickness_id[$index])) {
                $order_item->thickness_id = (int)$thickness_id[$index];
            } else {
                $order_item->thickness_id = null;
            }
            // $order_item->price = (float)$price[$index];
            if (isset($price) && isset($price[$index])) {
                $order_item->price = (float)$price[$index];
            } else {
                $order_item->price = 0.0; 
            }
            $order_item->quantity = (int)$quantity[$index];
            if (isset($image[$index])) {
                $order_item->image = $image[$index];
            } else {
                $order_item->image = null;
            }
           $order_save = $order_item->save();
        }
        
        
        if ($order_save) {
            
          $cart = Cart::where('user_id', $userId)->delete();
        
            return response()->json(['data' => 1]);
        } else {
            return response()->json(['data' => 0]);
        }
        
    }


   

    public function get_pro_price(Request $request)
    {
        
                // database normalization 
        $tokenNo = 'ORD-' . strtoupper(uniqid());
        $userId = Auth::id();


        $totalAmount = $request->total_amount;
        
        $paymentMode = $request->payment_mode;

        $order = new Order();

        $order->order_no = $tokenNo;
        $order->user_id = $userId;
        $order->items = $request->items;
        $order->total_amount = $totalAmount;
        $order->payment_mode = $paymentMode;
        $order->payment_status = $request->has('payment_status') ? $request->payment_status : 'pending';
        $order->delivery_address = $request->delivery_address;
        $order->pin_code = $request->pin_code;
        $order->delivery_status = $request->has('delivery_status') ? $request->delivery_status : 'proccessing';

        $order->save();

        $tbl_order = Order::latest()->first();


        $order_id = $tbl_order->id;
        $home_id = $request->has('home_id') ? $request->home_id : null;
        $royal_id = $request->has('royal_id') ? $request->royal_id : null;
        $hospital_id = $request->has('hospital_id') ? $request->hospital_id : null;
        $hotel_id = $request->has('hotel_id') ? $request->hotel_id : null;
        $pillow_id = $request->has('pillow_id') ? $request->pillow_id : null;
        $protector_id = $request->has('protector_id') ? $request->protector_id : null;
        $topper_id = $request->has('topper_id') ? $request->topper_id : null;
        $product_name = $request->product_name;
        $master_size_id = $request->master_size_id;
        $unit_id = $request->unit_id;
        $size_id = $request->size_id;
        $thickness_id = $request->thickness_id;
        $price = $request->product_price;
        $quantity = $request->quantity;
        $image = $request->image;
           

        foreach ($product_name as $index => $product) {
            $order_item = new OrderItem();

            $order_item->product_name = $product;

            $order_item->order_id = $order_id;
            
            $order_item->home_id = is_numeric($home_id[$index]) ? (int)$home_id[$index] : null;
            $order_item->royal_id = is_numeric($royal_id[$index]) ? (int)$royal_id[$index] : null;
            $order_item->hospital_id = is_numeric($hospital_id[$index]) ? (int)$hospital_id[$index] : null;
            $order_item->hotel_id = is_numeric($hotel_id[$index]) ? (int)$hotel_id[$index] : null;
            $order_item->pillow_id = is_numeric($pillow_id[$index]) ? (int)$pillow_id[$index] : null;
            $order_item->protector_id = is_numeric($protector_id[$index]) ? (int)$protector_id[$index] : null;
            $order_item->topper_id = is_numeric($topper_id[$index]) ? (int)$topper_id[$index] : null;

            $value = $master_size_id[$index];
            
            if (is_numeric($value)) {
                $order_item->master_size_id = (int)$value;
            } else {
                $order_item->master_size_id = $value;
            }
            $order_item->unit_id = (int)$unit_id[$index];
            $order_item->size_id = (int)$size_id[$index];
            // $order_item->thickness_id = (int)$thickness_id[$index];
            if (isset($thickness_id[$index])) {
                $order_item->thickness_id = (int)$thickness_id[$index];
            } else {
                $order_item->thickness_id = null;
            }
            $order_item->price = (float)$price[$index];
            $order_item->quantity = (int)$quantity[$index];
            
           
            
            if (isset($image[$index])) {
                $order_item->image = $image[$index];
            } else {
                $order_item->image = null;
            }

            $order_item->save();
        }


        $api = new Api('rzp_test_bzpYc4IrjNNVG5', 'I5QjM4nVqr1wcwD4LM1dKg9t');

        $totalAmount = $request->ProPrice;
        

        try {

            $order = $api->order->create([
                'amount'   => $totalAmount * 100,
                'currency' => 'INR',

            ]);
            // id from order 
            $tbl_order_id = $tbl_order->id;

            // id from api 
            $order_id = $order->id;
            
            return response()->json([
                'tbl_order_id' => $tbl_order_id,
                'order_id' => $order_id,
                'totalAmount' => $totalAmount,
            ]);
        } catch (Exception $e) {
            
            Session::put('error', $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
        
        
    }

   
    public function cancel_order(Request $request, $id)
    {
      
        $order = Order::find($id);
        $order->delivery_status = 'cancelled';
        
        $order->update();
        
        return redirect('/my_order')->with('success','Order Cancelled Succcessfully');
    }
    
   
    
    
    // track order 
    public function track_package(Request $request, $id)
    {
         $my_orders = Order::find($id);
        return view('track_package',compact('my_orders'));
    }
    
    // order controller for admin 
    
     
    public function order_details($id)
    {
        $orders = Order::find($id);
         $orderItem = OrderItem::where('order_id',$id)->get();
        
        
        // $orderItem = [];
        // $user = [];
        // foreach($orders as $order){
        // $orderItem[] = OrderItem::where('order_id',$id)->get();
        // $user[] = User::where('id',$order->user_id)->get();
        // }
        return view('admin.pages.order_details',compact('orders','orderItem'));
    }
    
    public function order_shipped($id)
    {
        $order = Order::find($id);
        $currentStatus = $order->delivery_status; // Get the current status as a string
        
        if (strpos($currentStatus, 'shipped') === false) {
            // Check if 'shipped' is not already in the string
            $newStatus = $currentStatus . ',shipped';
            $order->delivery_status = $newStatus;
            $order->save();
        }


        
        return redirect()->back()->with('success','Order Shipped Succcessfully');
    }
    public function order_arriving($id)
    {
        $order = Order::find($id);
        $currentStatus = $order->delivery_status; // Get the current status as a string
        
        if (strpos($currentStatus, 'arriving') === false) {
            // Check if 'shipped' is not already in the string
            $newStatus = $currentStatus . ',arriving';
            $order->delivery_status = $newStatus;
            $order->save();
        }


        
        return redirect()->back()->with('success','Order Shipping Today Succcessfully');
    }
    
    public function order_delivered($id)
    {
        $order = Order::find($id);
        
        $order->payment_status = 'complete';
        
        $payment_status = $order->payment_status = 'complete'; 
        $currentStatus = $order->delivery_status; 
        
        if (strpos($currentStatus, 'delivered') === false) {
            $newStatus = $currentStatus . ',delivered';
            $order->delivery_status = $newStatus;
            $order->save();
        }
         
        $order->update();

        
        return redirect()->back()->with('success','Order Delivered Succcessfully');
    }
    
    public function order_reject(Request $request, $id)
    {
      
        $order = Order::find($id);
        $order->delivery_status = 'cancelled';
        
        $order->update();
        
        return redirect()->back()->with('success','Order Reject Succcessfully');
    }
    
    
}

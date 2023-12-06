<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\HomeMattress;
use App\Models\HospitalMattress;
use App\Models\HotelMattress;
use App\Models\RoyalMattress;
use App\Models\MasterSize;
use App\Models\Unit;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        //   dd($userId);
        // $user = User::where('id',$userId)->get();
        $cartItems = Cart::where('user_id', $userId)->get();

        // dd($user);
        // die();
        return view('cart', compact('cartItems','userId'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $cart = new Cart();

        $cart->user_id = $request->user_id;
        $cart->product = $request->product;
        $cart->master_size_id = $request->has('master_size_id') ? $request->master_size_id : null;
        $cart->home_id = $request->has('home_id') ? $request->home_id : null;
        $cart->royal_id = $request->has('royal_id') ? $request->royal_id : null;
        $cart->hospital_id = $request->has('hospital_id') ? $request->hospital_id : null;
        $cart->hotel_id = $request->has('hotel_id') ? $request->hotel_id : null;
        $cart->pillow_id = $request->has('pillow_id') ? $request->pillow_id : null;
        $cart->protector_id = $request->has('protector_id') ? $request->protector_id : null;
        $cart->topper_id = $request->has('topper_id') ? $request->topper_id : null;
        $cart->unit_id = $request->unit_id;
        $cart->Size_id = $request->Size_id;
        $cart->thickness_id = $request->thickness_id;
        $cart->price = $request->price;
        $cart->quantity = $request->quantity;
        $cart->image = $request->image;




        $cart->save();

        return redirect('/cart')->with('success', 'Product added in cart successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart, $id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('delete', 'Cart Item deleted successfully');
    }
}
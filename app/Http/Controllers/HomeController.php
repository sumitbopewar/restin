<?php

namespace App\Http\Controllers;

use App\Models\HomeMattress;
use App\Models\HospitalMattress;
use App\Models\HotelMattress;
use App\Models\RoyalMattress;
use App\Models\MasterSize;
use App\Models\Unit;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $home_mattress = HomeMattress::where('status', 'Active')->Where('master_size_id', 3)->get();
        $royal_mattress = RoyalMattress::where('status', 'Active')->Where('master_size_id', 3)->get();
        return view('home', compact('home_mattress', 'royal_mattress'));
    }

    public function guide()
    {
        return view('guide_to_good_sleep');
    }

    public function contact()
    {
        return view('contact');
    }
    public function warranty()
    {
        return view('warranty');
    }

    public function how_to_choose()
    {
        return view('how_to_choose'); 
    }

    public function pillows()
    {
        return view('pillows');
    }

    public function protector()
    {
        return view('protector');
    }

    public function topper()
    {
        return view('topper');
    }

    public function cart()
    {
        return view('cart');
    }

    public function royal()
    {
        $royal = RoyalMattress::all();
        return view('royal', compact('royal'));
    }

    public function homemattress()
    {
        $homemattress = HomeMattress::all();
        return view('homemattress', compact('homemattress'));
    }

    public function hotel()
    {
        $hotel = HotelMattress::all();
        return view('hotel', compact('hotel'));
    }

    public function hospital()
    {
        $hospital = HospitalMattress::all();
        return view('hospital', compact('hospital'));
    }

    public function get_product_detail(Request $request)
    {
        $home_mattress = HomeMattress::where('id', $request->input('pid'))->first();

        // dd($home_mattress);
        // die();
        session()->put('home_mattress', $home_mattress);

        return response()->json([
            'success' => true
        ]);
    }
    public function get_view_product(Request $request)
    {
        $home_mattress = session()->get('home_mattress', []);
        if (empty($home_mattress)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
        $master_size = MasterSize::all();
        $unit = Unit::all();

        $size_in_mm = SizeMM::where('id', $home_mattress->size_mm)->first();
        $size_in_inch = SizeInch::where('id', $home_mattress->size_inch)->first();

        $thickness = Thickness::where('id', $home_mattress->thickness_id)->first();

        // dd($size_in_mm);
        // die();
    
        return view('view_product', compact('home_mattress', 'master_size', 'unit', 'size_in_mm', 'size_in_inch','thickness'));
    }
    
}
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
use App\Models\pillows;
use App\Models\Protector;
use App\Models\Topper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $home_mattress = HomeMattress::where('status', 'Active')->Where('display', 1)->get();
        $royal_mattress = RoyalMattress::where('status', 'Active')->Where('display', 1)->get();
        return view('home', compact('home_mattress', 'royal_mattress'));
    }

    public function guide()
    {
        return view('guide_to_good_sleep');
    }
    public function new_design()
    {
        return view('New_layouts.index');
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
        $pillow = pillows::where('display', 1)->get();
        
        return view('pillows',compact('pillow'));
    }
    
    public function get_pillow_detail(Request $request)
    {
        $pillow_detail = pillows::where('id', $request->input('pid'))->first();

        
        session()->put('pillow_detail', $pillow_detail);

        return response()->json([
            'success' => true
        ]);
    }
    public function get_view_pillows(Request $request)
    {
        $pillow_detail = session()->get('pillow_detail', []);
        if (empty($pillow_detail)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
       $unit = Unit::all();
        
    
        return view('view_pillow', compact('pillow_detail','unit'));
    }



    public function protector()
    {
        $protector = Protector::where('display', 1)->get();
        
        return view('protector',compact('protector'));
    }
    
     public function get_protector_detail(Request $request)
    {
        $protector = Protector::where('id', $request->input('pid'))->first();

        
        session()->put('protector_detail', $protector);

        return response()->json([
            'success' => true
        ]);
    }
    
    public function get_view_protector(Request $request)
    {
        $protector_detail = session()->get('protector_detail', []);
        if (empty($protector_detail)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
       $unit = Unit::all();
        
    
        return view('view_protector', compact('protector_detail','unit'));
    }
    
    

    public function topper()
    {
         $topper = Topper::where('display', 1)->get();
        
        return view('topper',compact('topper'));
    }
    
     public function get_topper_detail(Request $request)
    {
        $topper = Topper::where('id', $request->input('pid'))->first();

        
        session()->put('topper_detail', $topper);

        return response()->json([
            'success' => true
        ]);
    }
    
    public function get_view_topper(Request $request)
    {
        $topper_detail = session()->get('topper_detail', []);
        if (empty($topper_detail)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
       $unit = Unit::all();
        
    
        return view('view_topper', compact('topper_detail','unit'));
    }
    
    
    
    public function policy()
    {
        return view('privacy_policy');
    }
    public function conditions()
    {
        return view('terms_conditions');
    }

    

    public function royal()
    {
        $royal = RoyalMattress::where('status', 'Active')->Where('display', 1)->get();
        return view('royal', compact('royal'));
    }

    public function homemattress()
    {
        $activamattress = HomeMattress::where('status', 'Active')->Where('display', 1)->where('collection','Activa')->get();
        $comfortmattress = HomeMattress::where('status', 'Active')->Where('display', 1)->where('collection','Comfort')->get();
        $orthoSpinemattress = HomeMattress::where('status', 'Active')->Where('display', 1)->where('collection','OrthoSpine')->get();
       $hybridSpinemattress = HomeMattress::where('status', 'Active')
            ->where('display', 1)
            ->whereIn('collection', ['Hybrid', 'Wellness'])
            ->get();
        
        $viscomemorymattress = HomeMattress::where('status', 'Active')
            ->where('display', 1)
            ->whereIn('collection', ['Visco Memory', 'Spring'])
            ->get();

        return view('homemattress', compact('activamattress','comfortmattress','orthoSpinemattress','hybridSpinemattress'
        ,'viscomemorymattress'));
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

        $thickness = Thickness::where('id', $home_mattress->thickness_id)->get();

        // dd($thickness);
        // die();
    
        return view('view_product', compact('home_mattress', 'master_size', 'unit', 'size_in_mm', 'size_in_inch','thickness'));
    }
    
    
    public function get_royal_product(Request $request)
    {
        $royal_mattress = RoyalMattress::where('id', $request->input('rid'))->first();

        // dd($home_mattress);
        // die();
        session()->put('royal_mattress', $royal_mattress);

        return response()->json([
            'success' => true
        ]);
    }
    
    public function royal_product(Request $request)
    {
        $royal_mattress = session()->get('royal_mattress', []);
        if (empty($royal_mattress)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
        $master_size = MasterSize::all();
        $unit = Unit::all();

        $size_in_mm = SizeMM::where('id', $royal_mattress->size_mm)->first();
        $size_in_inch = SizeInch::where('id', $royal_mattress->size_inch)->first();

        $thickness = Thickness::where('id', $royal_mattress->thickness_id)->get();

        // dd($thickness);
        // die();
    
        return view('royal_product', compact('royal_mattress', 'master_size', 'unit', 'size_in_mm', 'size_in_inch','thickness'));
    }
    

    public function hospital_product_detail(Request $request)
    {
        $hospital_mattress = HospitalMattress::where('id', $request->input('pid'))->first();

        // dd($hospital_mattress);
        // die();
        session()->put('hospital_mattress', $hospital_mattress);

        return response()->json([
            'success' => true
        ]);
    }
    
    public function hospital_product(Request $request)
    {
        $hospital_mattress = session()->get('hospital_mattress', []);
        if (empty($hospital_mattress)) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
        $master_size = MasterSize::all();
        $unit = Unit::all();

        $size_in_mm = SizeMM::where('id', $hospital_mattress->size_mm)->first();
        $size_in_inch = SizeInch::where('id', $hospital_mattress->size_inch)->first();

        $thickness = Thickness::where('id', $hospital_mattress->thickness_id)->get();

        // dd($thickness);
        // die();
    
        return view('hospital_product', compact('hospital_mattress', 'master_size', 'unit', 'size_in_mm', 'size_in_inch','thickness'));
    }

    public function index_page(){
        return view('new_layouts.index_page');
    }

    public function good_sleep(){
        return view('new_layouts.good_sleep');
    }

    public function homesmattress(){
        return view('new_layouts.homesmattress');
    }
    
    public function hospitalmattress(){
        return view('new_layouts.hospitalmattress');
    }

    public function pillows_page(){
        return view('new_layouts.pillows_page');
    }

    public function protector_page(){
        return view('new_layouts.protector_page');
    }

    public function topper_page(){
        return view('new_layouts.topper_page');
    }
    
    public function hotelsmattress(){
        return view('new_layouts.hotelsmattress');
    }

    public function royalemattress(){
        return view('new_layouts.royalemattress');
    }

    public function contact_page(){
        return view('new_layouts.contact_page');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pillows;
use App\Models\size_pillows;
use App\Models\Size_Pillows_MM;
use App\Models\Unit;

class ViewPillowsController extends Controller
{
    public function get_category(Request $request)
    {
        // dd($request);
        // die();
        $unit = Unit::all();

        return response()->json($unit);

    }
    
     public function get_pillows_size(Request $request)
    {
         
        $product_cat = $request->input('pcat');
        $uid = $request->input('uid');
        
        
        $pillow_items_mm = pillows::where('category',$product_cat)->with('pillow_size_mm')->get();
        $pillow_items_inch = pillows::where('category',$product_cat)->with('pillow_size_inch')->get();
       
       
        if($uid == 2){
            
          return response()->json([
                  'pillows_inch_item' => $pillow_items_inch,
              ]);
        }else{
           
            return response()->json([
                  'pillows_mm_item' => $pillow_items_mm,
              ]);
        }
        
       
    }
    
    public function get_pillow_id(Request $request)
    {
        
        $pillow = pillows::where('id',$request->psize)->get();
        // dd($pillow);
        // die();
        return response()->json($pillow);

    }
    

}

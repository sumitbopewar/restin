<?php

namespace App\Http\Controllers;

use App\Models\Topper;
use App\Models\size_protector;
use Illuminate\Http\Request;

class ViewTopperController extends Controller
{
   public function get_topper_category(Request $request)
    {
         
        $product_cat = $request->input('pcat');

        
        $topper_items = Topper::where('category',$product_cat)->get();
        
        $topper_items_size = [];
        foreach($topper_items as $item){
          $topper_items_size[] = size_protector::where('id',$item->size)->get();
        }
       
        return response()->json($topper_items_size);
       
        
       
    }
    
    public function get_topper_size(Request $request)
    {
        // dd($request);
        // die();
        $topper = Topper::where('size',$request->size_id)->where('category',$request->pcat)->get();
        
        return response()->json($topper);

    }
}

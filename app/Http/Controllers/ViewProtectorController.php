<?php

namespace App\Http\Controllers;

use App\Models\Protector;
use App\Models\size_protector;
use Illuminate\Http\Request;

class ViewProtectorController extends Controller
{
    public function get_protector_category(Request $request)
    {
         
        $product_cat = $request->input('pcat');

        
        $protector_items = Protector::where('category',$product_cat)->get();
        
        $protector_items_size = [];
        foreach($protector_items as $item){
          $protector_items_size[] = size_protector::where('id',$item->size)->get();
        }
       
        return response()->json($protector_items_size);
       
        
       
    }
    
    public function get_protector_size(Request $request)
    {
        // dd($request);
        // die();
        $protector = Protector::where('size',$request->size_id)->where('category',$request->pcat)->get();
        
        return response()->json($protector);

    }
}

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

class ViewProductController extends Controller
{
    public function get_unit(Request $request)
    {
        $unit = Unit::all();

            // dd($size_mm);
            // die();

        return response()->json($unit);
            
    }

    public function get_master_size(Request $request)
    {
        $size_mm = SizeMM::where([
            ['master_size_id', '=', $request->input('mid')],
            ['unit_id', '=', $request->input('uid')],
        ])->get();

        $size_inch = SizeInch::where([
            ['master_size_id', '=', $request->input('mid')],
            ['unit_id', '=', $request->input('uid')],
        ])->get();

            // dd($size_mm);
            // die();
            $result = [
                'size_mm' => $size_mm,
                'size_inch' => $size_inch,
            ];

        return response()->json($result);
            
    }

    public function get_size_id(Request $request)
    {
        $thickness = HomeMattress::where(function ($query) use ($request) {
            $size_id = $request->input('size_id');
            $query->where('size_mm', $size_id)
                  ->orWhere('size_inch', $size_id);
        })->first();
        
            // dd($thickness);
            // die();
            

        return response()->json($thickness);
            
    }
}
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
use DB;

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
        $product = $request->input('pname');
        $uid = $request->input('uid');
        $mid = $request->input('mid');


        // $homeMattress = HomeMattress::where('product', $product)->where('master_size_id',$mid)->get();

        $homeMattress = HomeMattress::select('*')
            ->whereIn('id', function ($query) use ($product, $mid) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('home_mattresses')
                    ->where('product', $product)
                    ->where('master_size_id', $mid)
                    ->groupBy('size_mm', 'size_inch');
            })
            ->get();



        // dd($homeMattress);


        // dd($homeMattress);



        $get_sizeMM = [];
        $get_sizeInch = [];

        if ($uid == 1) {
            foreach ($homeMattress as $homeMattress) {
                $sizeMM = SizeMM::where('id', $homeMattress->size_mm)->get();

                $get_sizeMM[] = $sizeMM;
            }
            return response()->json($get_sizeMM);
        } else {
            foreach ($homeMattress as $homeMattress) {
                $sizeInch = SizeInch::where('id', $homeMattress->size_inch)->get();

                $get_sizeInch[] = $sizeInch;
            }
            return response()->json($get_sizeInch);
        }

    }




    public function get_size_id(Request $request)
    {
        $thickness_id = HomeMattress::where(function ($query) use ($request) {
            $size_id = $request->input('size_id');
            $p_name = $request->input('p_name');

            $query->where('product', $p_name)
                ->where(function ($subquery) use ($size_id) {
                    $subquery->where('size_mm', $size_id)
                        ->orWhere('size_inch', $size_id);
                });
        })->get();

        // dd($thickness_id);

        $result = [];

        if ($thickness_id) {
            $related_thickness_ids = $thickness_id->pluck('thickness_id')->toArray();
            // dd($related_thickness_ids);

            // Retrieve the related Thickness records
            $thicknesses = Thickness::whereIn('id', $related_thickness_ids)->get();

            // dd($thicknesses);

            $result = [
                'thickness' => $thicknesses,
                'thickness_id' => $related_thickness_ids,
            ];
        }

        return response()->json($result);
    }

    public function get_thick_id(Request $request)
    {
        $thickness_id = HomeMattress::where('thickness_id', $request->thick_id)->first();


        // dd($thickness_id);
        // die();


        return response()->json($thickness_id);

    }

    public function get_price(Request $request)
    {
        // dd($request);
        // die();


        $price = HomeMattress::where([
            ['thickness_id', '=', $request->input('thick_id')],
            ['product', '=', $request->input('p_name')],
            ['size_mm', '=', $request->input('size_id')],
        ])
            ->orWhere([
                ['thickness_id', '=', $request->input('thick_id')],
                ['product', '=', $request->input('p_name')],
                ['size_inch', '=', $request->input('size_id')],
            ])
            ->get();



        // dd($price);


        return response()->json($price);

    }
}
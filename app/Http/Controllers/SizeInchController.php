<?php

namespace App\Http\Controllers;

use App\Models\SizeInch;
use App\Models\MasterSize;
use App\Models\Unit;
use Illuminate\Http\Request;

class SizeInchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SizeInch $sizeInch)
    {
        $sizeinch = SizeInch::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $unit = Unit::where('status','Active')->get();

        return view('admin.pages.inch_size', compact('sizeinch', 'msize','unit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $master_size_id = $request->get('master_size_id');
        $unit_id = $request->get('unit_id');
        $inch_length = $request->get('inch_length');
        $inch_breath = $request->get('inch_breath');
        $status = $request->get('status');
        
       
        $sizeinch = new SizeInch();
        
        $sizeinch->master_size_id = $master_size_id;
        $sizeinch->unit_id = $unit_id;
        $sizeinch->inch_length = $inch_length;
        $sizeinch->inch_breath = $inch_breath;
        $sizeinch->status = $status;
        
        $sizeinch->save();
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SizeInch $sizeInch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SizeInch $sizeInch, $id)
    {
        $sizeinch = SizeInch::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $unit = Unit::where('status','Active')->get();
        return view('admin.pages.update_inch', compact('sizeinch', 'unit', 'msize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SizeInch $sizeInch, $id)
    {
        $sizeinch = SizeInch::find($id);
        
        $sizeinch->master_size_id = $request->master_size_id;
        $sizeinch->unit_id = $request->unit_id;
        $sizeinch->inch_length = $request->inch_length;
        $sizeinch->inch_breath = $request->inch_breath;
        $sizeinch->status = $request->status;
        
        $sizeinch->update();
        session()->flash('success', 'Size Updated successfully');
        return redirect('/inch_size');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SizeInch $sizeInch, $id)
    {
        $sizeinch = SizeInch::find($id);
        $sizeinch->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/inch_size');
    }
}

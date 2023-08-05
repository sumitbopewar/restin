<?php

namespace App\Http\Controllers;

use App\Models\SizeMM;
use App\Models\MasterSize;
use App\Models\Unit;
use Illuminate\Http\Request;

class SizeMMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SizeMM $sizeMM)
    {
        $sizemm = SizeMM::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $unit = Unit::where('status','Active')->get();

        return view('admin.pages.mm_size', compact('sizemm', 'msize','unit'));
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
        $mm_length = $request->get('mm_length');
        $mm_breath = $request->get('mm_breath');
        $status = $request->get('status');
        
       
        $sizemm = new SizeMM();
        
        $sizemm->master_size_id = $master_size_id;
        $sizemm->unit_id = $unit_id;
        $sizemm->mm_length = $mm_length;
        $sizemm->mm_breath = $mm_breath;
        $sizemm->status = $status;
        
        $sizemm->save();
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SizeMM $sizeMM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SizeMM $sizeMM, $id)
    {
        $sizemm = SizeMM::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $unit = Unit::where('status','Active')->get();
        return view('admin.pages.update_mm', compact('sizemm', 'unit', 'msize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SizeMM $sizeMM, $id)
    {
        $sizemm = SizeMM::find($id);
        
        $sizemm->master_size_id = $request->master_size_id;
        $sizemm->unit_id = $request->unit_id;
        $sizemm->mm_length = $request->mm_length;
        $sizemm->mm_breath = $request->mm_breath;
        $sizemm->status = $request->status;
        
        $sizemm->update();
        session()->flash('success', 'Size Updated successfully');
        return redirect('/mm_size');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SizeMM $sizeMM, $id)
    {
        $sizemm = SizeMM::find($id);
        $sizemm->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/mm_size');
    }
}

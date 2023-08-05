<?php

namespace App\Http\Controllers;

use App\Models\MasterSize;
use Illuminate\Http\Request;

class MasterSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MasterSize $masterSize)
    {
        $msize = MasterSize::all();
        return view('admin.pages.master_size', compact('msize'));
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
        $size_name = $request->get('size_name');
        $status = $request->get('status');
        
       
        $msize = new MasterSize();
        
        $msize->size_name = $size_name;
        $msize->status = $status;
        
        $msize->save();
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterSize $masterSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterSize $masterSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MasterSize $masterSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterSize $masterSize, $id)
    {
        $msize = MasterSize::find($id);
        $msize->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/master_size');
    }
}

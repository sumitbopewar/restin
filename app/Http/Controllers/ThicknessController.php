<?php

namespace App\Http\Controllers;

use App\Models\Thickness;
use Illuminate\Http\Request;

class ThicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Thickness $thickness)
    {
        $thickness = Thickness::all();
        return view('admin.pages.thickness', compact('thickness'));
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
        $thickness = new Thickness();
        
        $thickness->thickness = $request->thickness;
        $thickness->status = $request->status;
        
        $thickness->save();
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Thickness $thickness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thickness $thickness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thickness $thickness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thickness $thickness, $id)
    {
        $thickness = Thickness::find($id);
        $thickness->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/master_size');
    }
}

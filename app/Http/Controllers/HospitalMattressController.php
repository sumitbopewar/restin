<?php

namespace App\Http\Controllers;

use App\Models\HospitalMattress;
use App\Models\MasterSize;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use Illuminate\Http\Request;

class HospitalMattressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HospitalMattress $hospitalMattress)
    {
        $hospitalmat = HospitalMattress::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.hospital_mattress', compact('msize','sizemm','sizeinch','thickness','hospitalmat'));
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
        $hospitalmat = new HospitalMattress();
        
        $hospitalmat->collection = $request->collection;
        $hospitalmat->master_size_id = $request->master_size_id;
        $hospitalmat->size_mm = $request->size_mm;
        $hospitalmat->size_inch = $request->size_inch;
        $hospitalmat->thickness_id = $request->thickness_id;
        $hospitalmat->product = $request->product;
        $hospitalmat->price = $request->price;
        $hospitalmat->status = $request->status;

        $image = $request->file('image');

            // Validate the uploaded image
            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/images', $imageName);
                $hospitalmat->image = $imageName;
            }
        
        $hospitalmat->save();
        session()->flash('success', 'Mattress submitted successfully');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(HospitalMattress $hospitalMattress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HospitalMattress $hospitalMattress, $id)
    {
        $hospital_mat = HospitalMattress::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.update_hospital_mattress', compact('msize','sizemm','sizeinch','thickness','hospital_mat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HospitalMattress $hospitalMattress, $id)
    {
        $hospitalmat = HospitalMattress::find($id);
        
        $hospitalmat->collection = $request->collection;
        $hospitalmat->master_size_id = $request->master_size_id;
        $hospitalmat->size_mm = $request->size_mm;
        $hospitalmat->size_inch = $request->size_inch;
        $hospitalmat->thickness_id = $request->thickness_id;
        $hospitalmat->product = $request->product;
        $hospitalmat->price = $request->price;
        $hospitalmat->status = $request->status;

        $image = $request->file('image');

            // Validate the uploaded image
            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/images', $imageName);
                $hospitalmat->image = $imageName;
            }
        
        $hospitalmat->update();
        session()->flash('success', 'Mattress Updated successfully');

        return redirect('/hospital_mattress');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HospitalMattress $hospitalMattress, $id)
    {
        $hospitalmat = HospitalMattress::find($id);
        $hospitalmat->delete();
        session()->flash('delete', 'Mattress deleted successfully');

        return redirect('/hospital_mattress');
    
    }
}

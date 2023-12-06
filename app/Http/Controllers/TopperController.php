<?php

namespace App\Http\Controllers;

use App\Models\Topper;
use App\Models\size_protector;
use App\Models\Unit;
use Illuminate\Http\Request;

class TopperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::all();
        $size = size_protector::where('unit',2)->get();
        
        $topper = Topper::latest()->get();
         
       return view('admin.pages.topper',compact('size','topper'));
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
        $topper = new Topper();
        
        $topper->product  =$request->product ; 
        $topper->category  =$request->category ; 
        $topper->size  =$request->size ;
        $topper->price  =$request->price ;
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
       
         
        
         if ($image1) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image1->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image1->getClientOriginalName();
                $imagePath = 'public/storage/images/' . $imageName; 
                $image1->move(public_path('storage/images'), $imagePath);  
                $topper->image1 = $imageName;
            }
       
         if ($image2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image2->getClientOriginalName();
                $imagePath = 'public/storage/images/' . $imageName; 
                $image2->move(public_path('storage/images'), $imagePath);  
                $topper->image2 = $imageName;
            }
        
        $topper->save();
        
        session()->flash('success', 'Topper Submitted Successfully');

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Topper $topper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topper $topper, $id)
    {
         $unit = Unit::all();
        $size = size_protector::where('unit',2)->get();
        
        $topper = Topper::find($id);
         
       return view('admin.pages.update_topper',compact('size','topper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topper $topper,$id)
    {
        $topper = Topper::find($id);
        
        $topper->product  =$request->product ; 
        $topper->category  =$request->category ; 
        $topper->size  =$request->size ;
        $topper->price  =$request->price ;
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
       
         
        
         if ($image1) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image1->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image1->getClientOriginalName();
                $imagePath = 'public/storage/images/' . $imageName; 
                $image1->move(public_path('storage/images'), $imagePath);  
                $topper->image1 = $imageName;
            }
       
         if ($image2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image2->getClientOriginalName();
                $imagePath = 'public/storage/images/' . $imageName; 
                $image2->move(public_path('storage/images'), $imagePath);  
                $topper->image2 = $imageName;
            }
        
        $topper->update();
        
        session()->flash('success', 'Topper Updated successfully');
        return redirect('/adm_topper');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topper $topper)
    {
        //
    }
}

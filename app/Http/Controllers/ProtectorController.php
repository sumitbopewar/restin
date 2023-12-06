<?php

namespace App\Http\Controllers;

use App\Models\Protector;
use App\Models\size_protector;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProtectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::all();
        $size = size_protector::where('unit',2)->get();
        
        $protector = protector::all();
         
       return view('admin.pages.protector',compact('size','protector'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_protector()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_protector(Request $request)
    {
       $protector = new protector();
        
        $protector->product  =$request->product ; 
        $protector->category  =$request->category ; 
        $protector->size  =$request->size ;
        $protector->price  =$request->price ;
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
       
         
        
         if ($image1) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image1->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image1->getClientOriginalName();
                // $imagePath = $image1->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image1->move(public_path('storage/images'), $imagePath);  
                $protector->image1 = $imageName;
            }
       
         if ($image2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];

                $extension = strtolower($image2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image2->getClientOriginalName();
                // $imagePath = $image2->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image2->move(public_path('storage/images'), $imagePath);  
                $protector->image2 = $imageName;
            }
        
        $protector->save();
        
        session()->flash('success', 'Protector Submitted Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show_protector(Protector $protector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_protector(Protector $protector ,  $id)
    {
        $unit = Unit::all();
        $size = size_protector::where('unit',2)->get();
        
        $protector = protector::find($id);
         
       return view('admin.pages.update_protector',compact('size','protector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_protector(Request $request, protector $protector,$id)
    {
        $protector = protector::find($id);
        
        $protector->product  =$request->product ; 
        $protector->category  =$request->category ; 
        $protector->size =$request->size;
        $protector->price  =$request->price ;
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
       
       
         if ($image1) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image1->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image1->getClientOriginalName();
                // $imagePath = $image->storeAs('public/images', $imageName);
                
                 $imagePath = 'public/storage/images/' . $imageName; 
                 $image1->move(public_path('storage/images'), $imagePath);  
                $protector->image1 = $imageName;
            }
       
         if ($image2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image2->getClientOriginalName();
                // $imagePath = $image2->storeAs('public/images', $imageName);
                
                 $imagePath = 'public/storage/images/' . $imageName; 
                 $image2->move(public_path('storage/images'), $imagePath); 
    
                $protector->image2 = $imageName;
            }
        
        $protector->update();
        
        session()->flash('success', 'Protector Updated successfully');
        return redirect('/adm_protector');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_protector(Protector $protector , $id)
    {
        $protector =  protector::find($id);
        
        $protector->delete();
        session()->flash('delete', 'Protector deleted successfully');

        return redirect('/adm_protector');
    }
    
    
    // size protector 

    /**_
     * Show the form for creating a new resource.
     */
    public function size_protector()
    {
        $unit = Unit::all();
        $size_protector = size_protector::all();
        
        return view('admin.pages.size_protector',compact('unit','size_protector'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $size_protector = new size_protector();
        
        $size_protector->length  =$request->length ; 
        $size_protector->width  =$request->width ; 
        $size_protector->unit  =$request->unit ;
        
        $size_protector->save();
        
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(protector $protector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(protector $protector, $id)
    {
        $unit = Unit::get();
        $size_prot = size_protector::find($id);
        return view('admin.pages.update_size_protector',compact('unit','size_prot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, protector $protector,$id)
    {
          $size_protector =  size_protector::find($id);
        
        $size_protector->length  =$request->length ; 
        $size_protector->width  =$request->width ; 
        $size_protector->unit  =$request->unit ;
        
        $size_protector->update();
        
        session()->flash('success', 'Size Updated successfully');
        return redirect('/size_protector');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(protector $protector,$id)
    {
        $size_protector =  size_protector::find($id);
        
        $size_protector->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/size_protector');
    }
}

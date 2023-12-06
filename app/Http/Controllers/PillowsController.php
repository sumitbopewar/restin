<?php

namespace App\Http\Controllers;

use App\Models\pillows;
use App\Models\size_pillows;
use App\Models\Size_Pillows_MM;
use App\Models\Unit;
use Illuminate\Http\Request;

class PillowsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::all();
        $size_mm = Size_Pillows_MM::get();
        $size_inch = size_pillows::get();
        
        $pillow = pillows::all();
         
       return view('admin.pages.pillows',compact('size_mm','size_inch','pillow'));
    }

    public function store_pillows(Request $request)
    {
        
        $pillow = new pillows();
        
        $pillow->product  =$request->product ; 
        $pillow->category  =$request->category ; 
        $pillow->size_inch  =$request->size_inch ;
        $pillow->size_mm  =$request->size_mm ;
        $pillow->price  =$request->price ;
        $image = $request->file('image');
        $image2 = $request->file('image2');
       
       
         if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                // $imagePath = $image->storeAs('public/images', $imageName);
                
                 $imagePath = 'public/storage/images/' . $imageName; 
                 $image->move(public_path('storage/images'), $imagePath);  
                $pillow->image = $imageName;
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
    
                $pillow->image2 = $imageName;
            }
        
        $pillow->save();
        
        session()->flash('success', 'Pillow Submitted Successfully');

        return redirect()->back();
    }
    
    public function edit_pillows(pillows $pillows, $id)
    {
        $unit = Unit::all();
        $size_mm = Size_Pillows_MM::where('unit',1)->get();
        $size_inch = size_pillows::where('unit',2)->get();
        
        $pillow = pillows::find($id);
         
       return view('admin.pages.update_pillows',compact('size_mm','size_inch','pillow'));
    }
    public function update_pillows(Request $request, pillows $pillows,$id)
    {
        $pillow = pillows::find($id);
        
        $pillow->product  =$request->product ; 
        $pillow->category  =$request->category ; 
        $pillow->size_inch  =$request->size_inch ;
        $pillow->size_mm  =$request->size_mm ;
        $pillow->price  =$request->price ;
        $image = $request->file('image');
        $image2 = $request->file('image2');
       
       
         if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                // $imagePath = $image->storeAs('public/images', $imageName);
                
                 $imagePath = 'public/storage/images/' . $imageName; 
                 $image->move(public_path('storage/images'), $imagePath);  
                $pillow->image = $imageName;
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
    
                $pillow->image2 = $imageName;
            }
        
        $pillow->update();
        
        session()->flash('success', 'Pillow Updated successfully');
        return redirect('/adm_pillows');
        
    }
    public function destroy_pillows(pillows $pillows,$id)
    {
        $pillow =  pillows::find($id);
        
        $pillow->delete();
        session()->flash('delete', 'Pillow deleted successfully');

        return redirect('/adm_pillows');
    }
    
    
    // size pillows for inch  

    
    public function size_pillows()
    {
        $unit = Unit::all();
        $size_pillow = size_pillows::all();
        
        return view('admin.pages.size_pillows',compact('unit','size_pillow'));
    }

    
    public function store(Request $request)
    {
        $size_pillow = new size_pillows();
        
        $size_pillow->size_length  =$request->size_length ; 
        $size_pillow->size_breadth  =$request->size_breadth ; 
        $size_pillow->unit  =$request->unit ;
        
        $size_pillow->save();
        
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

   
    public function edit(pillows $pillows, $id)
    {
        $unit = Unit::get();
        $size_pil = size_pillows::find($id);
        return view('admin.pages.update_size_pillows',compact('unit','size_pil'));
    }

    
    public function update(Request $request, pillows $pillows,$id)
    {
          $size_pillow =  size_pillows::find($id);
        
        $size_pillow->size_length  =$request->size_length ; 
        $size_pillow->size_breadth  =$request->size_breadth ; 
        $size_pillow->unit  =$request->unit ;
        
        $size_pillow->update();
        
        session()->flash('success', 'Size Updated successfully');
        return redirect('/size_pillows');
    }

   
    public function destroy(pillows $pillows,$id)
    {
        $size_pillow =  size_pillows::find($id);
        
        $size_pillow->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/size_pillows');
    }
    
    
    
    // size in mm for pillows 
    
    public function size_pillows_mm()
    {
        $unit = Unit::all();
        $size_pillow = Size_Pillows_MM::all();
        
        return view('admin.pages.size_pillows_mm',compact('unit','size_pillow'));
    }

  
    public function store_pillow_mm(Request $request)
    {
        $size_pillow_mm = new Size_Pillows_MM();
        
        $size_pillow_mm->size_length_mm  =$request->size_length_mm ; 
        $size_pillow_mm->size_breadth_mm  =$request->size_breadth_mm ; 
        $size_pillow_mm->unit  =$request->unit ;
        
        $size_pillow_mm->save();
        
        session()->flash('success', 'Size submitted successfully');

        return redirect()->back();
    }

   
    public function edit_pillow_mm(pillows $pillows, $id)
    {
        $unit = Unit::get();
        $size_pil = Size_Pillows_MM::find($id);
        return view('admin.pages.update_size_pillows_mm',compact('unit','size_pil'));
    }

    
    public function update_pillow_mm(Request $request, pillows $pillows,$id)
    {
          $size_pillow_mm =  Size_Pillows_MM::find($id);
        
        $size_pillow_mm->size_length_mm  =$request->size_length_mm ; 
        $size_pillow_mm->size_breadth_mm  =$request->size_breadth_mm ; 
        $size_pillow_mm->unit  =$request->unit ;
        
        $size_pillow_mm->update();
        
        session()->flash('success', 'Size Updated successfully');
        return redirect('/size_pillows_mm');
    }

    
    public function destroy_pillow_mm(pillows $pillows,$id)
    {
        $size_pillow_mm =  Size_Pillows_MM::find($id);
        
        $size_pillow_mm->delete();
        session()->flash('delete', 'Size deleted successfully');

        return redirect('/size_pillows_mm');
    }
}

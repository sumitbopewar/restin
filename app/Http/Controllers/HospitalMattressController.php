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
        $hospitalmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $img4 = $request->file('img4');

            // Validate the uploaded image
            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                // $imagePath = $image->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                // $imagePath = $collection_img->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $collection_img->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                // $imagePath = $img2->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img2->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                // $imagePath = $img3->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img3->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img3 = $imageName;
            }
            if ($img4) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img4->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img4->getClientOriginalName();
                // $imagePath = $img4->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img4->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img4 = $imageName;
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
        $hospitalmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $img4 = $request->file('img4');

            // Validate the uploaded image
            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                // $imagePath = $image->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                // $imagePath = $collection_img->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $collection_img->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                // $imagePath = $img2->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img2->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                // $imagePath = $img3->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img3->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img3 = $imageName;
            }
            if ($img4) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img4->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img4->getClientOriginalName();
                // $imagePath = $img4->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $img4->move(public_path('storage/images'), $imagePath);  
                $hospitalmat->img4 = $imageName;
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

<?php

namespace App\Http\Controllers;

use App\Models\HomeMattress;
use App\Models\MasterSize;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use Illuminate\Http\Request;

class HomeMattressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HomeMattress $homeMattress)
    {
        $homemat = HomeMattress::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.home_mattress', compact('msize','sizemm','sizeinch','thickness','homemat'));
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
        $homemat = new HomeMattress();
        
        $homemat->collection = $request->collection;
        $homemat->master_size_id = $request->master_size_id;
        $homemat->size_mm = $request->size_mm;
        $homemat->size_inch = $request->size_inch;
        $homemat->thickness_id = $request->thickness_id;
        $homemat->product = $request->product;
        $homemat->price = $request->price;
        $homemat->status = $request->status;
        $homemat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $image3 = $request->file('image3');

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
                $homemat->image = $imageName;
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
                $homemat->collection_img = $imageName;
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
                $homemat->img2 = $imageName;
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
                $homemat->img3 = $imageName;
            }
            if ($image3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image3->getClientOriginalName();
                // $imagePath = $image3->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image3->move(public_path('storage/images'), $imagePath);  
                $homemat->image3 = $imageName;
            }
        
        $homemat->save();
        session()->flash('success', 'Mattress submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeMattress $homeMattress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeMattress $homeMattress, $id)
    {
        $home_mat = HomeMattress::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.update_home_mattress', compact('msize','sizemm','sizeinch','thickness','home_mat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeMattress $homeMattress, $id)
    {
        $homemat = HomeMattress::find($id);
        
        $homemat->collection = $request->collection;
        $homemat->master_size_id = $request->master_size_id;
        $homemat->size_mm = $request->size_mm;
        $homemat->size_inch = $request->size_inch;
        $homemat->thickness_id = $request->thickness_id;
        $homemat->product = $request->product;
        $homemat->price = $request->price;
        $homemat->status = $request->status;
        $homemat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $image3 = $request->file('image3');


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
                $homemat->image = $imageName;
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
                $homemat->collection_img = $imageName;
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
                $homemat->img2 = $imageName;
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
                $homemat->img3 = $imageName;
            }
            if ($image3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($image3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image3->getClientOriginalName();
                // $imagePath = $image3->storeAs('public/images', $imageName);
                $imagePath = 'public/storage/images/' . $imageName; 
                $image3->move(public_path('storage/images'), $imagePath);  
                $homemat->image3 = $imageName;
            }
        
        $homemat->update();
        session()->flash('success', 'Mattress Updated successfully');

        return redirect('/home_mattress');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeMattress $homeMattress, $id)
    {
        $homemat = HomeMattress::find($id);
        $homemat->delete();
        session()->flash('delete', 'Mattress deleted successfully');

        return redirect('/home_mattress');
    
    }
}

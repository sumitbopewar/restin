<?php

namespace App\Http\Controllers;

use App\Models\RoyalMattress;
use App\Models\MasterSize;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use Illuminate\Http\Request;

class RoyalMattressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RoyalMattress $royalMattress)
    {
        $royalmat = RoyalMattress::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.royal_mattress', compact('msize','sizemm','sizeinch','thickness','royalmat'));
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
        $royalmat = new RoyalMattress();
        
        $royalmat->collection = $request->collection;
        $royalmat->master_size_id = $request->master_size_id;
        $royalmat->size_mm = $request->size_mm;
        $royalmat->size_inch = $request->size_inch;
        $royalmat->thickness_id = $request->thickness_id;
        $royalmat->product = $request->product;
        $royalmat->price = $request->price;
        $royalmat->status = $request->status;
        $royalmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');

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
                $royalmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                $imagePath = $collection_img->storeAs('public/images', $imageName);
                $royalmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                $imagePath = $img2->storeAs('public/images', $imageName);
                $royalmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                $imagePath = $img3->storeAs('public/images', $imageName);
                $royalmat->img3 = $imageName;
            }
        
        $royalmat->save();
        session()->flash('success', 'Mattress submitted successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RoyalMattress $royalMattress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoyalMattress $royalMattress, $id)
    {
        $royal_mat = RoyalMattress::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.update_royal_mattress', compact('msize','sizemm','sizeinch','thickness','royal_mat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoyalMattress $royalMattress, $id)
    {
        $royalmat = RoyalMattress::find($id);
        
        $royalmat->collection = $request->collection;
        $royalmat->master_size_id = $request->master_size_id;
        $royalmat->size_mm = $request->size_mm;
        $royalmat->size_inch = $request->size_inch;
        $royalmat->thickness_id = $request->thickness_id;
        $royalmat->product = $request->product;
        $royalmat->price = $request->price;
        $royalmat->status = $request->status;
        $royalmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');

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
                $royalmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                $imagePath = $collection_img->storeAs('public/images', $imageName);
                $royalmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                $imagePath = $img2->storeAs('public/images', $imageName);
                $royalmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                // Check if the file extension is allowed
                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                $imagePath = $img3->storeAs('public/images', $imageName);
                $royalmat->img3 = $imageName;
            }
        
        $royalmat->update();
        session()->flash('success', 'Mattress Updated successfully');

        return redirect('/royal_mattress');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoyalMattress $royalMattress, $id)
    {
        $royalmat = RoyalMattress::find($id);
        $royalmat->delete();
        session()->flash('delete', 'Mattress deleted successfully');

        return redirect('/royal_mattress');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\HotelMattress;
use App\Models\MasterSize;
use App\Models\SizeMM;
use App\Models\SizeInch;
use App\Models\Thickness;
use Illuminate\Http\Request;

class HotelMattressController extends Controller
{
    
    public function index(HotelMattress $hotelMattress)
    {
        $hotelmat = HotelMattress::latest()->get();
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.hotel_mattress', compact('msize','sizemm','sizeinch','thickness','hotelmat'));
    }


   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $hotelmat = new HotelMattress();
        
        $hotelmat->collection = $request->collection;
        $hotelmat->master_size_id = $request->master_size_id;
        $hotelmat->size_mm = $request->size_mm;
        $hotelmat->size_inch = $request->size_inch;
        $hotelmat->thickness_id = $request->thickness_id;
        $hotelmat->product = $request->product;
        $hotelmat->price = $request->price;
        $hotelmat->status = $request->status;
        $hotelmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $img4 = $request->file('img4');

            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/images', $imageName);
                $hotelmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                $imagePath = $collection_img->storeAs('public/images', $imageName);
                $hotelmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                $imagePath = $img2->storeAs('public/images', $imageName);
                $hotelmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                $imagePath = $img3->storeAs('public/images', $imageName);
                $hotelmat->img3 = $imageName;
            }
            if ($img4) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img4->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img4->getClientOriginalName();
                $imagePath = $img4->storeAs('public/images', $imageName);
                $hotelmat->img4 = $imageName;
            }
        
        $hotelmat->save();
        session()->flash('success', 'Mattress submitted successfully');

        return redirect()->back();
    }

   
    public function show(HotelMattress $hotelMattress)
    {
        
    }

    
    public function edit(HotelMattress $hotelMattress, $id)
    {
        $hotel_mat = HotelMattress::find($id);
        $msize = MasterSize::where('status','Active')->get();
        $sizemm = SizeMM::where('status','Active')->get();
        $sizeinch = SizeInch::where('status','Active')->get();
        $thickness = Thickness::where('status','Active')->get();
        return view('admin.pages.update_hotel_mattress', compact('msize','sizemm','sizeinch','thickness','hotel_mat'));
    }

    public function update(Request $request, HotelMattress $hotelMattress, $id)
    {
        $hotelmat = HotelMattress::find($id);
        
        $hotelmat->collection = $request->collection;
        $hotelmat->master_size_id = $request->master_size_id;
        $hotelmat->size_mm = $request->size_mm;
        $hotelmat->size_inch = $request->size_inch;
        $hotelmat->thickness_id = $request->thickness_id;
        $hotelmat->product = $request->product;
        $hotelmat->price = $request->price;
        $hotelmat->status = $request->status;
        $hotelmat->about = $request->about;

        $image = $request->file('image');
        $collection_img = $request->file('collection_img');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
        $img4 = $request->file('img4');

            if ($image) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($image->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/images', $imageName);
                $hotelmat->image = $imageName;
            }
            if ($collection_img) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($collection_img->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $collection_img->getClientOriginalName();
                $imagePath = $collection_img->storeAs('public/images', $imageName);
                $hotelmat->collection_img = $imageName;
            }
            if ($img2) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img2->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img2->getClientOriginalName();
                $imagePath = $img2->storeAs('public/images', $imageName);
                $hotelmat->img2 = $imageName;
            }
            if ($img3) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img3->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img3->getClientOriginalName();
                $imagePath = $img3->storeAs('public/images', $imageName);
                $hotelmat->img3 = $imageName;
            }
            if ($img4) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];

                $extension = strtolower($img4->getClientOriginalExtension());
                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                }

                $imageName = $img4->getClientOriginalName();
                $imagePath = $img4->storeAs('public/images', $imageName);
                $hotelmat->img4 = $imageName;
            }
        
        $hotelmat->update();
        session()->flash('success', 'Mattress Updated successfully');

        return redirect('/hotel_mattress');
    }


    public function destroy(HotelMattress $hotelMattress, $id)
    {
        $hotelmat = HotelMattress::find($id);
        $hotelmat->delete();
        session()->flash('delete', 'Mattress deleted successfully');

        return redirect('/hotel_mattress');
    
    }
}

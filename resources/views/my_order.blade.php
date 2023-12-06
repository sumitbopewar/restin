@extends('layouts.app')


@section('content')
    <style>
        .container-fluid .card {
            width: 100%;
            border: 0px;
            border-radius: 0px white;
        }

        .card-title {
            font-weight: 700;
            color: black;
            display: inline-flex;

        }

        .card-text a {
            color: black;
            font-weight: 500;
        }



        .bg {
            background-color: #deeefa;
        }

        .icon-img1 {
            margin-top: 50px;
            width: 100px;

        }

        .card-img-overlay {
            position: absolute;
            top: 90px !important;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            border-radius: calc(.25rem - 1px);
        }

        .icon-text {
            margin-top: 10px;
        }
    </style>
    <div class="container-fluid py-5 bg-light px-3 px-lg-5 px-md-5">
        <h2 class="fs-1 fw-lighter p-3">My Orders</h2>
        
         @foreach($tbl_order as $tbl_order)
         <?php 
        
            $givenDate = $tbl_order->created_at;
    $sevenDaysLater = date('jS M Y', strtotime($givenDate . ' +7 days'));
    $dayOfWeek = date('l', strtotime($sevenDaysLater));
        ?>
           <div class="bg-white pb-4 p-5 px-3 px-md-5 px-lg-5 rounded-3 shadow-lg my-2">
                <div class="row">
                    <div class="align-self-center col-lg-3 col-md-3 col-sm-6 text-lg-start text-md-start text-center">
                        <button class="btn btn-secondary rounded-pill py-2 px-4"> {{$tbl_order->order_no}}</button></div>
                    <div class="align-self-center col-lg-3 col-md-3 col-sm-6 fs-6 text-black-50 py-2 text-center">Expected Delivery, {{$dayOfWeek}} {{$sevenDaysLater}}</div>
                    <div class="align-self-center col-lg-6 col-md-6 col-sm-12 pe-md-5 pe-lg-5 pe-0 ps-0 text-lg-end text-md-end text-center">
                         @if($tbl_order->delivery_status != 'cancelled')
                            <button class="btn btn-warning px-4 py-2 border-0 rounded-pill" style="background-color: #c2eaff!important;">
                                <i class="fa-solid fa-truck-fast pe-1"></i>
                                @if($tbl_order->delivery_status == 'proccessing') Proccessing @endif
                                @if($tbl_order->delivery_status == 'proccessing,shipped') Shipped @endif
                                @if($tbl_order->delivery_status == 'proccessing,shipped,arriving')Arriving Today @endif
                                @if($tbl_order->delivery_status == 'proccessing,shipped,arriving,delivered')Delivered @endif
                            </button>
                        @endif
                    </div>
                </div><hr>
                
          <?php
                                        
           $tbl_order_item = Illuminate\Support\Facades\DB::table('order_items') ->where('order_id', $tbl_order->id)->get();
            
            
           ?>
              
               @foreach($tbl_order_item as $item)
               
                <?php
                            
                                $master_size = DB::table('master_sizes')
                                    ->select('size_name', 'id')
                                    ->where('id', $item->master_size_id)
                                    ->first();
                                
                                
                                $size_mm = DB::table('size_m_m_s')
                                    ->select('mm_length', 'mm_breath')
                                    ->where('id', $item->size_id)
                                    ->where('unit_id', $item->unit_id)
                                    ->first();
                                
                                
                                $size_inch = DB::table('size_inches')
                                    ->select('inch_length', 'inch_breath')
                                    ->where('id', $item->size_id)
                                    ->where('unit_id', $item->unit_id)
                                    ->first();
                                
                                $thickness = DB::table('thicknesses')
                                    ->select('thickness', 'id')
                                    ->where('id', $item->thickness_id)
                                    ->first();
                                    
                                 $pillow = DB::table('pillows')
                                    ->select('category', 'id')
                                    ->where('id', $item->pillow_id)
                                    ->where('category', $item->master_size_id)
                                    ->first();
                                
                                    
                                $pillow_inch = DB::table('size_pillows')
                                    ->select('size_length', 'size_breadth')
                                    ->where('id', $item->size_id)
                                    ->where('unit', $item->unit_id)
                                    ->first();
                                    
                                $pillow_mm = DB::table('size__pillows__m_m_s')
                                    ->select('size_length_mm', 'size_breadth_mm')
                                    ->where('id', $item->size_id)
                                    ->where('unit', $item->unit_id)
                                    ->first();
                                    
                                 $protector = DB::table('protectors')
                                    ->select('category', 'id')
                                    ->where('id', $item->protector_id)
                                    ->where('category', $item->master_size_id)
                                    ->first();
                                    
                                $protector_size = DB::table('size_protectors')
                                    ->select('length', 'width')
                                    ->where('id', $item->size_id)
                                    ->first();    
                                     
                                $topper = DB::table('toppers')
                                    ->select('category', 'id')
                                    ->where('id', $item->topper_id)
                                    ->where('category', $item->master_size_id)
                                    ->first();         
                                     
                 ?>
                 
                 <div class="justify-content-center row">
                     
                    <div class="col-md-4 col-lg-4 col-sm-12">
                          <div class="row g-0">
                            <div class="col-md-4">
                                @if($item->image)
                                    <img src="{{ asset('storage/images/' . $item->image) }}" class="h-100 img-fluid p-0 rounded-start w-100" 
                                    width="140px" alt="...product">
                                @endif
                            </div>
                            <div class="col-md-8 align-self-center">
                              <div class="card-body ps-0 p-lg-3 p-md-3">
                                    <h5 class="card-title fs-5">{{$item->product_name}}</h5>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                    <div class="align-self-center col-lg-3 col-md-3 col-sm-12">
                        <small class="text-muted">Size</small><br>
                        
                            
                         @if ($master_size && $thickness )
                            <h5 class="card-title fs-5" style="color: #8acef3!important;">
                                {{ $master_size->size_name }} |
                                @if (isset($size_mm->mm_length) && isset($size_mm->mm_breath))
                                    {{ $size_mm->mm_length }} x {{ $size_mm->mm_breath }} mm
                                @elseif(isset($size_inch->inch_length) && isset($size_inch->inch_breath))
                                    {{ $size_inch->inch_length }} x {{ $size_inch->inch_breath }} inches
                                @endif
                                x {{ $thickness->thickness }}
                            </h5>
                        @endif
                        
                        @if (isset($pillow) && $pillow->category == $item->master_size_id)
                            <h5 class="card-title fs-5" style="color: #8acef3!important;">
                                {{ $pillow->category }} |
                                @if (isset($pillow_mm->size_length_mm) && isset($pillow_mm->size_breadth_mm))
                                    {{ $pillow_mm->size_length_mm }} x {{ $pillow_mm->size_breadth_mm }} mm
                                @elseif(isset($pillow_inch->size_length) && isset($pillow_inch->size_breadth))
                                    {{ $pillow_inch->size_length }} x {{ $pillow_inch->size_breadth }} Inches
                                @endif
                            </h5>
                        @endif

                        @if($protector)  
                            <h5 class="card-title fs-5" style="color: #8acef3!important;">
                                {{ $protector->category }} |
                                @if (isset($protector_size->length) && isset($protector_size->width))
                                    {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                @endif
                             </h5>  
                         @endif
                            
                        @if($topper)  
                            <h5 class="card-title fs-5" style="color: #8acef3!important;">
                                {{ $topper->category }} |
                                @if (isset($protector_size->length) && isset($protector_size->width))
                                    {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                @endif
                             </h5>  
                         @endif
                            
                            
                       
                    </div>
                    
                    <div class="align-self-center col-lg-2 col-md-2 col-sm-12">
                        <small class="text-muted">Quantity</small><br>
                        <h5 class="card-title fs-5" style="color: #8acef3!important;">{{$item->quantity}}</h5>
                    </div>
                    
                    <div class="col-md-2 col-lg-2 col-sm-12 align-self-center">
                        <small class="text-muted">Price</small><br>
                        <h5 class="card-title fs-5" style="color: #8acef3!important;">₹ {{ number_format($item->price, 2) }}</h5>
                    </div>
                    
                </div><hr>
                
              @endforeach
             
                <div class="px-0 px-lg-5 px-md-5 row">
                   
                    <div class="align-self-center col-lg-6 col-md-6 col-sm-12 text-black-50">
                    @if($tbl_order->delivery_status != 'cancelled')
                        <a href="{{ route('track_package', ['id' => $tbl_order->id]) }}"><button type="button" class="btn btn-outline-info mb-2 px-4">Track Package</button></a><br>
                        <a href="{{ route('my_order_details', ['id' => $tbl_order->id]) }}"><button type="button" class="btn btn-outline-secondary px-4">Order Details</button></a>
                    @else
                    <span>Your Order Is Cancelled!</span>
                    @endif
                    </div>
                   
                    
                    <div class="align-self-center col-lg-6 col-md-6 col-sm-12 d-flex fs-5 justify-content-center justify-content-lg-end justify-content-md-end pe-5 text-lg-end text-md-end text-start">
                        <div class="fw-bolder">Grand Total :</div>
                        <div class="ps-4">₹{{ number_format($tbl_order->total_amount, 2) }}</div>
                    </div>

                </div>
            
        </div>
        
        @endforeach
        
     </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var flashMessage = $('.alert');

            if (flashMessage.length > 0) {
                setTimeout(function() {
                    flashMessage.fadeOut('slow');
                }, 5000);
            }
        });
    </script>
    
    <script>
    $(document).ready(function() {
    $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
        }
    );
});
</script>
@endsection

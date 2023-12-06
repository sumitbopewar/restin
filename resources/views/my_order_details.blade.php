@extends('layouts.app')
@section('content')
<style>
    .container .col-md-3 ul li {
        font-weight: 600;
        list-style: none;
        line-height: 1.8!important;
        color: black!important;
    }
</style>
    <div class="container-fluid py-5 bg-light px-3 px-lg-5 px-md-5">
        <h2 class="fs-1 fw-lighter p-3 pb-0">Order Details</h2>
            <?php
                $user_details = Illuminate\Support\Facades\DB::table('users')->where('id', $my_orders->user_id)->first();
                $pay_details = Illuminate\Support\Facades\DB::table('payments')->where('tbl_order_id', $my_orders->id)->first();
                $tbl_order_item = Illuminate\Support\Facades\DB::table('order_items') ->where('order_id', $my_orders->id)->get();
                
                use Carbon\Carbon;
                $givenDate = $my_orders->created_at;
                $sevenDaysLater = Carbon::parse($givenDate)->addDays(7)->setTimezone('Asia/Kolkata');
                
                $formattedDate = $sevenDaysLater->format('l jS M Y');
            ?>
        <div class="justify-content-start p-3 pt-0 row">
            <div class="col-lg-2 col-md-2 col-sm-12 ps-3">Ordered on {{ \Carbon\Carbon::parse($my_orders->created_at)->format('jS M Y') }}</div>
            <div class="col-md-3 col-sm-12 col-lg-3">{{ $my_orders->order_no }}</div>
        </div>
        <div>
        <div class="container">
        <div class="row p-3 justify-content-between border rounded-3">
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="fs-6 fw-bold">Shipping Address</div>
                <div class="p-1" style="word-spacing: 2px;">{{ $user_details->name }}<br> <!--username-->
                    {{ $my_orders->delivery_address }}</div>
                    <div class="p-1">{{ $my_orders->pin_code }}</div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="fs-6 fw-bold">Payment Method : {{ $my_orders->payment_mode }}</div>
                <div class="p-1" style="word-spacing: 2px;">Pay on Delivery (Cash/Card). Cash on delivery (COD)
                        available. Card/Net banking acceptance subject to
                        device availability.
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="fs-6 fw-bold">Order Summary</div>
                <ul class="p-1 list-unstyled">
                    <li class="d-flex justify-content-between">Item(s):<b>{{ $my_orders->items }}</b></li>
                    <li class="d-flex justify-content-between">Shipping:<b>Free</b></li>
                    <li class="d-flex justify-content-between">Grand Total:<b>{{ '₹ ' . number_format($my_orders->total_amount, 2, '.', ',') }}</b></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="container mt-4 border rounded-3 p-3">
            <div class="pb-4 ps-0 ps-md-5 ps-lg-5 row">
                <div class="fs-4 fw-bold">Expected Delivery, {{$formattedDate}}</div>
            </div>
            <div class="justify-content-center p-2 row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="row">
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
                 
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="d-flex">
                        <div class="pe-4">
                            @if($item->image)
                                <img src="{{ asset('storage/images/' . $item->image) }}" style="width: 150px;height: 105px;">
                            @endif
                        </div>
                        <div>
                            <div class="fw-bold">{{$item->product_name}}</div>
                            <div><b>Size:</b>
                            @if ($master_size && $thickness )
                                {{ $master_size->size_name }} |
                                @if (isset($size_mm->mm_length) && isset($size_mm->mm_breath))
                                    {{ $size_mm->mm_length }} x {{ $size_mm->mm_breath }} mm
                                @elseif(isset($size_inch->inch_length) && isset($size_inch->inch_breath))
                                    {{ $size_inch->inch_length }} x {{ $size_inch->inch_breath }} inches
                                @endif
                                x {{ $thickness->thickness }}
                        @endif
                        
                        @if (isset($pillow) && $pillow->category == $item->master_size_id)
                                {{ $pillow->category }} |
                                @if (isset($pillow_mm->size_length_mm) && isset($pillow_mm->size_breadth_mm))
                                    {{ $pillow_mm->size_length_mm }} x {{ $pillow_mm->size_breadth_mm }} mm
                                @elseif(isset($pillow_inch->size_length) && isset($pillow_inch->size_breadth))
                                    {{ $pillow_inch->size_length }} x {{ $pillow_inch->size_breadth }} Inches
                                @endif
                        @endif

                        @if($protector)  
                                {{ $protector->category }} |
                                @if (isset($protector_size->length) && isset($protector_size->width))
                                    {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                @endif
                         @endif
                            
                        @if($topper)  
                                {{ $topper->category }} |
                                @if (isset($protector_size->length) && isset($protector_size->width))
                                    {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                @endif
                         @endif
                            </div>
                            <div><b>Quantity:</b>{{$item->quantity}}</div>
                            <div><b>Price:</b>₹ {{ number_format($item->price, 2) }}</div>
                        </div>
                    </div>
                </div>
                <hr class="my-2 w-50">
                @endforeach
                </div>
                </div>
                <div class="col-md-3 col-sm-12 col-lg-3 text-end align-self-center">
                    <a href="{{ route('track_package', ['id' => $my_orders->id]) }}"><button class="btn btn-warning mb-2 px-5 w-100">Track Package</button></a><br>
                    @if($my_orders->delivery_status != 'proccessing,shipped,arriving,delivered')
                        <a href="{{ url('/my_order/cancel_order/' . $my_orders->id) }}" onclick="return confirm('Are you sure you want to Cancel this Order?')">
                            <button class="btn btn-outline-secondary w-100">Cancel Order</button></a>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
@endsection
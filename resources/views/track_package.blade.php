@extends('layouts.app')
@section('content')
<style>
    .container .col-md-3 ul li {
        font-weight: 600;
        list-style: none;
        line-height: 1.8!important;
        color: black!important;
    }
   
.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 25px;
    margin-bottom: 50px;
    border-radius: 10px;
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important;
}

/*Icon progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px;
} 

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff;
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2):after, #progressbar li:nth-child(3):after {
    left: -50%;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #651FFF;
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c";
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

.icon-content { 
    padding-bottom: 20px;
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
}
</style>
<?php

    $givenDate = $my_orders->created_at;
    $sevenDaysLater = date('jS M Y', strtotime($givenDate . ' +7 days'));
    $dayOfWeek = date('l', strtotime($sevenDaysLater));
    
                                
    $user = DB::table('users')->where('id', $my_orders->user_id)->first();
   
?>

    <div class="container-fluid py-3 bg-light px-3 px-lg-5 px-md-5">
        <h2 class="fs-1 fw-lighter p-3 pb-0"> Arriving <?php echo $dayOfWeek; ?></h2>
        
    </div>
    
<div class="container px-1 px-md-4  mx-auto">
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5> <span class="text-primary font-weight-bold">{{$my_orders->order_no}}</span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival - <span><?php echo $sevenDaysLater; ?></span></p>
                <!--<p>USPS <span class="font-weight-bold">234094567242423422898</span></p>-->
            </div>
        </div>
        <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
            <ul id="progressbar" class="text-center">
                <li class="@if (Str::contains($my_orders->delivery_status, 'proccessing'))active @endif step0"></li>
                <li class="@if (Str::contains($my_orders->delivery_status, 'shipped'))active @endif step0"></li>
                <li class="@if (Str::contains($my_orders->delivery_status, 'arriving'))active @endif step0"></li>
                <li class="@if (Str::contains($my_orders->delivery_status, 'delivered'))active @endif step0"></li>
            </ul>
            </div>
        </div>
        <div class="justify-content-between top" style="display:flex;">
            <div class="icon-content">
                <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Processed</p>
                </div>
            </div>
            <div class="icon-content">
                <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Shipped</p>
                </div>
            </div>
            <div class="icon-content">
                <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>En Route</p>
                </div>
            </div>
            <div class="icon-content">
                <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Arrived</p>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="container-fluid mt-5 py-3 px-5 px-lg-5 px-md-5 mx-5">
      <div class="row gap-3 mx-5 ps-4"> 
            <div class="col-12 col-sm-12 col-md-5 bg-light col-lg-5 shadow border p-3">
                <h5 class="pb-3">Shipping Address</h5>
                <div>{{$user->name}}</div>
                <div>{{$my_orders->delivery_address}}</div>
                <div>{{$my_orders->pin_code}}</div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 bg-light border shadow p-3">
                <h5 class="pb-3">Order Info</h5>
                 <a href="{{ route('my_order_details', ['id' => $my_orders->id]) }}"><button class="btn btn-warning mb-2 px-5 w-100"> Order Details</button></a><br>
                    <a href="{{ url('/my_order/cancel_order/' . $my_orders->id) }}" onclick="return confirm('Are you sure you want to Cancel this Order?')"><button class="btn btn-outline-secondary w-100">Cancel Order</button></a>
                
            </div>
        </div>
  </div>
@endsection
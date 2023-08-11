@extends('layouts.app')


@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Lisu+Bosa:wght@200&family=Noto+Serif+Khojki:wght@500&family=Roboto&display=swap');

.card {
    width: 400px;
    margin: 20px;
    padding: 0px;
}

.card-img-top:hover {
    position: relative;
    float: center;
    z-index: 2;
    width: 400px;
    height: auto;
    transform: scale(1.1);
    transition: transform 0.3s ease-in-out;
}

.home_mattress_head {
    margin-top: 4rem;
    background-image: url('{{ asset('/layouts/img/murron bg.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    /* padding: 10rem; */
    padding: 73px;
    color: white;
    font-size: 3rem;
}

.royal_head {
    color: #f3e37d;
    font-family: 'Noto Serif Khojki', serif !important;
}

._card {
    width: 240px;
}

.royal_cart_logo {
    font-size: 1.2rem !important;
    padding: 7px;
}

.product_name {
    font-size: 1.3rem;
}

.royal_video {
    /* width: 546px;
    height: 294px;  
    background-size: cover; */
    /** Simulationg background-size: cover */
    object-fit: scale-down;
    height: 100%;
    width: 100%;
}

.royal_container{
    margin: auto;
    padding: 0px;
}
</style>

<!--<h1>Royal Mattress</h1>-->
<div class=" text-center home_mattress_head justify-content-between">
    <img src="{{ asset('layouts/img/RR Logo.png') }}" alt="" style="width: 200px; object-fit: contain;">
    <h2 class="royal_head">Royal Mattress</h2>
</div>

<div class="mb-2 mt-3 container">
    <h3 class="m-0" style="font-weight:bold;">Restine Introduce: The Royal Series Mattresses</h3>
    <p style="margin: 0px;">Restine introduces Royal reries of luxury mattresses because you should enjoy the necessary luxury of a
        sumptuous, sensuously comfortable bed at home.
        <br> We also customise mattress based on your individual requirements and preferences Now Losing sleep
        needen't be anything to lose sleep over.
    </p>
</div>

<div class="container mt-3 row royal_container">

    <div class="col-lg-6 col-md-12">

        <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Sinking:</h5>
            <p>The structure of the mattress is designed to ensure proper body support while sleeping ensureing that you
                have Zero Sinking feeling even after prolonged use.</p>
        </div>

        <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Gap:</h5>
            <p>The structured layers of different components are assembled is a manner to prevent gap in the mattress
                and
                ensuring proper support to in a manner all the curves in the body.</p>
        </div>

        <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Noise:</h5>
            <p>The mattress are layered in a proper designed manner to ensure zero noice caused by rubbing of the inner
                material together.</p>
        </div>

        <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Motion:</h5>
            <p>The inner springs in the mattress are independent of each other - they offrindividual support, providing
                greater comfort, so there is less tossing and turning there by eliminationg the discomfort to the other
                sleeping partner.</p>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <video class="royal_video" autoplay loop>
            <source src="{{ asset('layouts/img/Shruti.mp4') }}" type="video/mp4">
            <source src="{{ asset('layouts/img/Shruti.mp4') }}" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>

</div>

<section>
    <div class="row mt-5 d-flex justify-content-between align-items-center cart-container px-5 mx-5">

        <!-- Ortho logo style -->
        <!-- <style>
        .ortho_img {
            /* position: absolute;
            top: 5%;
            left: 10px; */
            height: 100px;
            width: 100px;
        }
        </style> -->

        @foreach ($royal as $item)
        <!-- Ortho Logo -->
        <!-- <img src="{{ asset('layouts/img/ortho logo.png') }}" class="ortho_img"> -->
        <div class="_card col-lg-3 col-md-6">
            <div class="royal_cart-img card-img">
                <a href="#"> <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img" alt="" srcset="">
                </a>
            </div>
            <div class="card-info">
                <p class="text-title product_name">{{$item->product}}</p>
            </div>
            <div class="_card-footer">
                <span class="text-title _product_price"></span>
                <div class="p-0 royal_card-button _card-button">
                    <a href="#"><i class="bi bi-cart3 cart_logo royal_cart_logo"></i></a>
                </div>
            </div>
        </div>
        @endforeach



    </div>




    </div>
</section>


<!-- Carts Ends -->
@endsection
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
        background-image: url('{{ asset(' /layouts/img/murron bg.png') }}');
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
</style>

<!--<h1>Royal Mattress</h1>-->
<div class=" text-center home_mattress_head justify-content-center">
    <img src="{{ asset('layouts/img/RR Logo.png') }}" alt="" style="width: 200px; object-fit: contain;">
    <h2 class="royal_head">Royal Mattress</h2>
</div>

<div class="container">
    <div class="mb-5">
    <h3 class="m-0" style="font-weight:bold;">Restine Introduce: The Royal Series Mattresses</h3>
    <h5>Restine introduces Royal reries of luxury mattresses because you should enjoy the necessary luxury of a sumptuous, sensuously comfortable bed at home.
       <br> We also customise mattress based on your individual requirements and preferences Now Losing sleep needen't be anything to lose sleep over.
    </h5>
    </div>

    <div>
        <h5 class="m-0" style="font-weight:bold;">Zero Sinking:</h5>
        <p>The structure of the mattress is designed to ensure proper body support while sleeping ensureing that you have Zero Sinking feeling even after prolonged use.</p>
    </div>

    <div>
        <h5 class="m-0" style="font-weight:bold;">Zero Gap:</h5>
        <p>The structured layers of different components are assembled is a manner to prevent gap in the mattress and ensuring proper support to in a manner all the curves in the body.</p>
    </div>

    <div>
        <h5 class="m-0" style="font-weight:bold;">Zero Noise:</h5>
        <p>The mattress are layered in a proper designed manner to ensure zero noice caused by rubbing of the inner material together.</p>
    </div>

    <div>
        <h5 class="m-0" style="font-weight:bold;">Zero Motion:</h5>
         <p>The inner springs in the mattress are independent of each other - they offrindividual support, providing greater comfort, so there is less tossing and turning there by eliminationg the discomfort to the other sleeping partner.</p>
    </div>
</div>

<section class="mx-3">
    <div class="row d-flex justify-content-center align-items-center cart-container">

        @foreach ($royal as $item)
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
                <div class="royal_card-button _card-button">
                    <a href="#"><i class="bi bi-cart3 cart_logo"></i></a>
                </div>
            </div>
        </div>
        @endforeach



    </div>


    </div>
</section>


<!-- Carts Ends -->
@endsection
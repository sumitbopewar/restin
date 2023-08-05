@extends('layouts.app')


@section('content')
    <style>
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
            margin-top: 6rem;
            background-image: url('{{ asset('/layouts/img/murron bg.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            /* padding: 10rem; */
            padding: 73px;
            color: white;
            font-size: 3rem;
        }

        .royal_head{
            color: #f3e37d;
        }
    </style>

    <!--<h1>Royal Mattress</h1>-->
    <div class=" text-center home_mattress_head d-grid justify-content-center">
        <img src="{{ asset('layouts/img/RR Logo.png') }}"alt="" style="width: 200px; object-fit: contain;">
        <h2 class="royal_head">Royal Mattress</h2>
    </div>

    <section class="mx-3">
        <div class="row d-flex justify-content-center align-items-center cart-container">

            @foreach ($royal as $item)
                <div class="_card col-lg-4 col-md-6">
                    <div class="royal_cart-img card-img">
                        <a href="#"> <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img"
                                alt="" srcset=""> </a>
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

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
    </style>


    <h2 class=" text-center home_mattress_head" style="background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');">Hospital Mattress</h2>

    <section class="mx-3">
        <div class="row d-flex justify-content-center align-items-center cart-container">
            
            @foreach ($hospital as $item)
                <div class="_card col-lg-4 col-md-6">
                    <div class="card-img">
                        <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img" alt="" srcset="">
                    </div>
                    <div class="card-info">
                        <p class="text-title product_name">{{$item->product}}</p>
                    </div>
                    <div class="_card-footer">
                        <span class="text-title _product_price">Rs. {{$item->price}}</span>
                        <div class="_card-button">
                            <a href="#"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>


    <!-- Carts Ends -->
@endsection

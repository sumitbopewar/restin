
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
    top: 90px!important;
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



<div class="d-flex justify-content-center align-items-center" style="margin-top: 98px;background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');height: 400px;
    background-size: cover;">
     <div class="">
            <h2 class="fw-bold text-white">Cart</h2>
        <p class="card-text text-white"><a href="" class="fw-bold text-white">Home > </a><a href="" class="fw-bold text-white">Cart</a></p>
          
    </div>
</div>


<div class="container py-5">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-sm-12">
            <div class="bg d-flex fw-bold justify-content-around py-3 me-3">
                <div>Product</div>
                <div>Price</div>
                <div>Quantity</div>
                <div>Subtotal</div>
            </div>
            <div class="align-items-baseline d-flex justify-content-around pt-3">
                <div class="">
                    <img src="./Mattresses Images/Normal-Mattress.png" alt="" class="img-fluid" style="height: 150px;"><br>
                    <span class="fw-bold ms-4 ps-5">Delite</span>
                </div>
                <div>
                    Rs. 10,000.00
                </div>
                <div class="border p-2">1</div>
                <div>Rs. 10,000.00</div>
                <div><i class="fa-solid fa-trash" style="color: red;"></i></div>
            </div>
        </div>
        <div class="bg col-lg-4 col-md-4 col-sm-12 p-5 text-center">
            <h3 class="fw-bold">Cart Totals</h3>
            <div class="d-flex justify-content-center pt-4">
                <div class="px-4">
                    <div class="fw-bold py-3">Subtotal</div>
                    <div class="fw-bold">Total</div>
                </div>
                <div>
                    <div class="py-3">Rs. 10,000.00</div>
                    <div class="fs-5 fw-bold text-primary">Rs. 10,000.00</div>
                </div>
            </div>
            <div class="btn btn-outline-dark rounded-3 mt-5">Check Out</div>
        </div>
    </div>
</div>


@endsection

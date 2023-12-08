@extends('new_layouts.include.app')

@section('content')
    <!-- Start Hero Section -->
    <style>
        .page-header {
            background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url(../../layouts/img/back-2.jpeg) center center no-repeat;
            background-size: cover;
        }

        .page-header .breadcrumb-item a,
        .page-header .breadcrumb-item+.breadcrumb-item::before {
            color: #F6F7F8;
        }

        .page-header .breadcrumb-item a:hover,
        .page-header .breadcrumb-item.active {
            color: #fff;
        }

        .display-4 {
            font-weight: 700;
        }

        .breadcrumb li {
            font-weight: 700;
            font-size: 15px;
        }
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Hospital Mattress</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hospital Mattress</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Start Product Section -->
    <div class="product-section" style="padding-bottom:40px;padding-top: 1rem;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('homemattress') }}">
                        <img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Mattress</h3>
                        <span class="icon-cross">
                            <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Section -->
@endsection

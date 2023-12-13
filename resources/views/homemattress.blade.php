@extends('layouts.app')
@section('style')
    <style>
        .page-header {
            background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url('../../layouts/img/back-2.jpeg') center center no-repeat;
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
        .product-section{
            padding-top: 2rem;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Home Mattress</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home Mattress</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row justify-content-around">
                @foreach ($activamattress as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->product }}</h3>

                            <span class="icon-cross product_id" value="{{ $item->id }}">
                                <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4 justify-content-around">
                @foreach ($comfortmattress as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->product }}</h3>

                            <span class="icon-cross product_id" value="{{ $item->id }}">
                                <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4 justify-content-around">
                @foreach ($orthoSpinemattress as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->product }}</h3>

                            <span class="icon-cross product_id" value="{{ $item->id }}">
                                <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4 justify-content-around">
                @foreach ($hybridSpinemattress as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->product }}</h3>

                            <span class="icon-cross product_id" value="{{ $item->id }}">
                                <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4 justify-content-around">
                @foreach ($viscomemorymattress as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->product }}</h3>

                            <span class="icon-cross product_id" value="{{ $item->id }}">
                                <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    </div>
    <!-- End Product Section -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.product_id').click(function() {
                let pid = $(this).attr('value');
                $.ajax({
                    url: '/get_product_detail',
                    type: 'GET',
                    data: {
                        'pid': pid,
                    },
                    success: function(result) {
                        var home_mattress = JSON.stringify(result['home_mattress']);

                        sessionStorage.setItem('home_mattress', home_mattress);

                        window.location.href = '/get_view_product';

                    }
                });

            });

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

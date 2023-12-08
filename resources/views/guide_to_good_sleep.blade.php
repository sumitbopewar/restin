@extends('layouts.app')
@section('script')
    <style>
        .page-header {
            background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url(../../layouts/img/back-2.jpeg) center center no-repeat;
            background-size: cover;
        }

        .page-header .breadcrumb-item a,
        .page-header .breadcrumb-item+.breadcrumb-item::before {
            color: #F6F7F8;
            ;
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
@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Guide To Good Sleep</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Guide To Good Sleep</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h2 class="mb-5">Benefits of Getting Good Sleep</h2>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-12">
                                <p>When we sleep, our body restore, rejuvenate, and regenerate it is a time to recover from
                                    the previous day while repairing and preparing for the next. Adequate sleep reduces
                                    stress and illness, balances our emotions, and improves our overall well being. Sleep
                                    helps us conserve our energy resources to ensure maximum performance throughout the day.
                                </p>
                            </div>
                        </div>
                        <h2 class="mb-5">Benefits of Getting Good Sleep</h2>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-12">
                                <p>When we sleep, our body restore, rejuvenate, and regenerate it is a time to recover from
                                    the previous day while repairing and preparing for the next. Adequate sleep reduces
                                    stress and illness, balances our emotions, and improves our overall well being. Sleep
                                    helps us conserve our energy resources to ensure maximum performance throughout the day.
                                </p>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                                src="https://images.pexels.com/photos/6585601/pexels-photo-6585601.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 h-100 wow zoomIn object-fit-cover" data-wow-delay="0.3s"
                                src="https://images.pexels.com/photos/879010/pexels-photo-879010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                                src="https://images.pexels.com/photos/7018391/pexels-photo-7018391.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                                src="https://images.pexels.com/photos/3768891/pexels-photo-3768891.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                                src="https://images.pexels.com/photos/6585601/pexels-photo-6585601.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 h-100 wow zoomIn object-fit-cover" data-wow-delay="0.3s"
                                src="https://images.pexels.com/photos/879010/pexels-photo-879010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                                src="https://images.pexels.com/photos/7018391/pexels-photo-7018391.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                                src="https://images.pexels.com/photos/3768891/pexels-photo-3768891.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h2 class="mb-5">Health Benefits of a Quality Mattress Sleep</h2>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-12">
                                <p>When it comes to getting adequate sleep, six hours of uninterrupted sleep is better than
                                    eight or nine of fragmented sleep. Research shows that a mattress can either rob you of
                                    sleep, or encourage it. If it's doing its job, it will reduce tossing and turning,
                                    provide proper spinal support, improve circulation, and cushion the body's pressure
                                    points. A comfortable, supportive mattress can provide significant relief to those with
                                    health issues and improve your chances of getting adequate uninterrupted sleep.</p>
                            </div>
                        </div>
                        <h2 class="mb-5">How do you know when it's time for a New Mattress ?</h2>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-12">
                                <p>Don't look at your warranty to tell you how long to keep your mattress. The warranty on a
                                    mattress is not an indicator of how long the product should be used before replacement.
                                    Normally, a mattress provides optimum service for about six to eight years of nightly
                                    use. If your mattress is no longer comfortable or supportive, and you're waking up
                                    tired, stiff, cranky, and with aching muscles and joints, it could be time for a new
                                    mattress.</p>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
@section('script')
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

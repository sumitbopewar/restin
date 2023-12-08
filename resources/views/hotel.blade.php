@extends('layouts.app')
@section('style')
    <style>
        .hero {
            /* background:url('../../layouts/img/header image-01.png'); */
            width: 100%;
            min-height: 50vh;
            background-size: cover;
            background-repeat: cover;
        }

        @media (min-width: 992px) {
            .hero {
                padding: 10px 20px !important;
            }
        }

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
    </style>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Hotel Mattress</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hotel Mattress</li>
                </ol>
            </nav>
        </div>
    </div>

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
                                src="https://images.pexels.com/photos/879010/pexels-photo-879010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 h-100 wow zoomIn object-fit-cover" data-wow-delay="0.3s"
                                src="{{ asset('layouts/img/getting_good_to_sleep.jpg') }}">
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
            <div class="row g-5 align-items-center mt-1">
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
                        <h2 class="mb-5">How do you know When It's Time for a New Mattress ?</h2>
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
                        <h2 class="mb-5">Health Benefits of a Quality Mattress</h2>
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
                        <div class="border-top mt-4 pt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="we-help-section p-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <img class="para-img img-fluid" src="{{ asset('layouts/img/royal-img2.jpg') }}" alt="">
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">How To Choose The Right Mattress</h2>
                    <p>
                        The difference between quality mattresses and less expensive mattresses includes features that you
                        can visibly see and other features that are not visible. One can see the difference with the
                        mattress top, the height of a mattress and the outer fabric however, you can't see the construction
                        materials used underneath the top layer. It's a combination, of all you can and can't see, that make
                        for a quality mattress. All these factors help determine the durability and firmness along with the
                        overall comfort level a mattress can provide.
                    </p>
                    <img src="{{ asset('layouts/img/mattress size chart.png') }}" class="product_img p-0 img-fluid"
                        alt="Pillow img">
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-lg-12 ps-lg-5">
                    <h2 class="section-title mb-4 text-center">MATTRESS SIZE CHART</h2>
                    <p>
                        One of the most important factors to achieve a better night's sleep is a comfortable amount of
                        space. Generally, a mattress should be longer and wider than the amount of space you and your
                        partner uses to sleep. The following sizes area general guide to help you make a better decision.
                    </p>
                </div>
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <img class="para-img img-fluid" src="{{ asset('layouts/img/mattress sizes (1).png') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-between my-5">
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Pocket Spring</h2>
                    <p>
                        Pocket spring case encased in layers of high density foam with proper pillar support to give you
                        good spinal support and undisturbed sleep. Comes in variety of thickness to suit your requirement.
                        Available in 6", 8”,10” & 12".
                    </p>
                    <div class="row">
                        <style>
                            .col-3 img {
                                width: 100%;
                                height: 50px;
                            }
                        </style>
                        <div class="col-12">
                            <img class="img-fluid ps-0" src="{{ asset('layouts/img/DSC09675 copy.png') }}">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid ps-0" src="{{ asset('layouts/img/Pocket Spring Warranty.png') }}">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('layouts/img/both side use.png') }}">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('layouts/img/Fabric.png') }}">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('layouts/img/Firm Comfort.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 mb-lg-0">
                    <img class="para-img img-fluid" src="{{ asset('layouts/img/Pocket Spring.png') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-between my-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <img class="para-img img-fluid" src="{{ asset('layouts/img/royal-img2.jpg') }}" alt="">
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Folding Bed for Hotel as Extra Bed</h2>
                    <h3 class="section-title mb-4">Premium Model</h3>
                    <p>
                        Made from Ms Pipe, (Weight 22.00 kgs)-Sturdy, does not topple.
                        Easy to carry as it is on wheels with mattress of 6" attached to it. Length 78*36(1980*913 mm),
                        Height 18"(460mm), Color:Black.
                    </p>
                    <div class="row">
                        <style>
                            .img1,
                            .img2 {
                                width: 100%;
                                height: 248px;
                            }
                        </style>
                        <div class="col-lg-6"><img src="{{ asset('layouts/img/image 2.jpg') }}" alt=""
                                class="img1"></div>
                        <div class="col-lg-6"><img src="{{ asset('layouts/img/image 1.jpeg') }}" alt=""
                                class="img2"></div>
                    </div>
                    <p>
                        <strong>Note : Mattress Price Extra.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->
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

@extends('layouts.app')
@section('content')
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets_new/images/A (1).png" class="d-block w-100 position1" alt="...">
                <div class="text1">
                    <h1>The Mattress <br><span clsas="d-block">that Refreshes you</span></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets_new/images/B.png" class="d-block w-100 position2" alt="...">
                <div class="text2">
                    <h1>The Sleep Is the <br> Best Meditation</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <style>
        .position1 {
            position: relative;
        }

        .position2 {
            position: relative;
        }

        .text1 {
            color: white;
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-20%, -50%)
        }

        .text2 {
            color: white;
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-20%, -50%)
        }

        @media screen and (min-width: 767px){
            .text1 h1,
            .text2 h1 {
             font-size: 58px;
            }
        }

        .hero.heroImage {
            width: 100%;
            height: 100%;
            background: url('../../assets_new/images/A.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 100%;
        }

        @media screen and (max-width: 660px) {
            .hero.heroImage {
                height: 40vh;
            }

            .hero h1 {
                padding-top: 48px;
                font-size: 38px;
            }
        }

        @media screen and (min-width: 661px) and (max-width: 1000px) {
            .hero.heroImage {
                height: 52vh;
            }

            .hero h1 {
                font-size: 61px;
                padding-top: 109px;
            }
        }

        @media screen and (min-width: 1001px) {
            .hero.heroImage {
                height: 52vh;
                padding: 20px 50px;
                background-position: 42% 31%;
            }

            .intro-excerpt {
                margin-top: 118px;
                text-shadow: 1px 1px 2px black;
            }
        }

        @media screen and (min-width: 1301px) {
            .hero.heroImage {
                height: 70vh;
                padding: 20px 50px;
                background-position: 42% 31%;
            }
        }

        .why-choose-section {
            padding-bottom: 0px !important;
        }

        @media screen and (max-width: 550px) {
            .why-choose-section .feature .icon img {
                width: 50px;
                height: 50px;
            }
        }
        
        @media screen and (max-width:330px){
            #carouselExampleRide{
                height: 35vh;
            }
            .text1 h1, .text2 h1{
                font-size: 20px !important;
                width: 133px;
            }
        }
        @media screen and (min-width:331px) and (max-width:550px){
            #carouselExampleRide{
                height: 35vh;
            }
        }
        .carousel-inner, .carousel-item, img{
            height: 100%;
        }

        @media screen and (max-width: 767px){
            .product-section {
               padding: 1.5rem 0;
            }
            .why-choose-section {
              padding-top: 0px;
            }
            .why-choose-section .row .col-lg-5{
                margin-top: 4.5rem;
            }
            .we-help-section {
                margin-top: 2rem;
            }
        }

        @media screen and (max-width: 999px){
            .product-section {
               padding: 1.5rem 0;
            }
            .why-choose-section {
              padding-top: 0px;
            }
            .we-help-section {
                margin-top: 2rem;
                margin-left: 31px;
            }
        }

        @media screen and (min-width: 515px)and (max-width:999px){
            .why-choose-section .row .col-lg-5 {
                margin-top: 4.5rem;
                margin-left: 1rem;
            }
        }
        
    </style>

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('homemattress') }}">
                        <img src="{{ asset('assets_new/images/Elite.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Mattress</h3>

                        <span class="icon-cross">
                            <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('royal') }}">
                        <img src="{{ asset('layouts/img/01 Royale Latex.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Royale Series</h3>
                        <span class="icon-cross">
                            <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('pillows') }}">
                        <img src="{{ asset('layouts/img/pillowss.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Sleep Essentials</h3>
                        <span class="icon-cross">
                            <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->
            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-4">
                    <div class="row my-lg-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('layouts/img/icon-4.png') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Comfort</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                    vulputate.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('layouts/img/icon-1.png') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Ergonomic</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                    vulputate.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('layouts/img/icon-2.png') }}" class="img-fluid">
                                </div>
                                <h3>Durable</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                    vulputate.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('layouts/img/icon-3.png') }}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hygenic</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                    vulputate.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('layouts/img/p1.jpg') }}" alt="Image" class="imf-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <style>
        .icon img {
            /* mix-blend-mode: ; */
            width: 70px;
            height: 70px;
        }
    </style>

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('layouts/img/folding_bed.jpg') }}" alt="Untree.co">
                        </div>
                        <div class="grid grid-2"><img src="{{ asset('layouts/img/c-3.jpg') }}" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="{{ asset('layouts/img/royal-img2.jpg') }}" alt="Untree.co">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Are you planning to buy a new mattress?</h2>
                    <p>
                        Choosing the right mattress can be confusing as there are plenty of brands available in the market.
                        Many people may not even be aware of the types, and qualities required for the right mattress. A
                        mattress can impact a person’s sleep, and provide proper support to the body, in turn, ensuring
                        healthy sleep posture.
                    </p>
                    <p>
                        When you visit your local mattress store, you have hundreds of options for mattress designs and
                        materials. You can choose between mattresses of various firmness levels, and have the choice of a
                        memory foam mattress, spring mattress, latex mattress, or an organic, all-natural mattress. You can
                        also find mattresses with advanced features that allow you to adjust the position of the bed to
                        improve your posture and sleep.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <video class="img-fluid p-0" autoplay loop muted>
                    <source src="{{ asset('assets_new/videos/Sequence 04.mp4') }}" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <style>
        @media screen and (max-width: 500px) {
            .product-section {
                padding: 0.5rem 0;
            }

            .why-choose-section {
                padding: 1.2rem 0;
            }
        }

        .more {
            color: #0000ffb5;
        }

        .more:hover {
            color: white;
        }
    </style>

    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Mattress</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{ asset('storage/images/01 Onyx.png') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#" class="text-dark">Onyx</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img
                                src="{{ asset('layouts/img/01 Royale Memory.png') }}" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#" class="text-dark">Royale Memory</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{ asset('storage/images/01 Pearl.png') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#" class="text-dark">Pearl</a></h3>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Section -->
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

@extends('layouts.app')


@section('content')
<!-- Navbar Menu -->

<!--Carousel Section-->

<style>





/* CSS */
.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}


@media screen and (max-width: 600px) {
    .carousel {
        margin-top: 4.5rem;
    }

    h1 {
        font-size: 1.5rem;
        font-weight: 900;
        margin-bottom: 0rem;
        font: bold;
    }

    .hero_slider .carousel-caption {
        text-align: left;
        top: 30%;
        left: 64%;
        right: 80%;
        font: bold;
        font-weight: 500;
        bottom: 0;
        right: 0;
        transform: translate(-75%, -35%);
        max-width: 1320px;
    }

    .buynow {
        margin-top: 0.5rem !important;
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
        font-size: 1rem;
    }

    .cart-container{
        padding: 0px;
    }
}

</style>

<section id="home" class="hero_slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-indicators">
                <button style="height: 15px; width: 15px; border-radius: 50%; background-color: grey;" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button style="height: 15px; width: 15px; border-radius: 50%; background-color: grey;" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-item active">
                <img src="{{ asset('layouts/img/c-1.png') }}" class="img d-block w-100" alt="img-1"
                    style="margin-top: -60px;">
                <div class="carousel-caption col-md-6 col-10 col-offset-md-6">
                    <h1>The Mattress that<br>refreshes you</h1>
                    <a href="cart.php"><button class="btn btn-lg btn-primary rounded-0 px-5 mt-5 buynow">BUY
                            NOW</button></a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('layouts/img/c-2.png') }}" class="img d-block w-100" alt="img-3"
                    style="margin-top: -60px;">
                <div class="carousel-caption carousel-caption col-md-6 col-10 col-offset-md-6">
                    <h1>The Sleep Is the<br>Best Meditation</h1>
                    <a href="cart.php"><button class="btn btn-lg btn-primary rounded-0 px-5 mt-5 buynow">BUY
                            NOW</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// JavaScript code to make the carousel auto-slide
// Get the carousel element
const carouselElement = document.getElementById('carouselExampleCaptions');

// Initialize the carousel with options
const carousel = new bootstrap.Carousel(carouselElement, {
    interval: 3000 // Time in milliseconds between slides (5 seconds in this example)
});
</script>



<!-- Icons Section -->
<!-- <section>
    <div class="container text-center " style="padding: 0px;">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-4.png') }}" alt="">
                <h5 class="icon-title ">Comfort</h5>
            </div>
            <div class="col-md-6 col-sm-6">
                <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-1.png') }}" alt="">
                <h5 class="icon-title">Ergonomic</h5>
            </div>
            <div class="col-md-6 col-sm-6">
                <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-2.png') }}" alt="">
                <h5 class="icon-title">Durable</h5>
            </div>
            <div class="col-md-6 col-sm-6">
                <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-3.png') }}" alt="">
                <h5 class="icon-title">Hygenic</h5>
            </div>

        </div>
    </div>
</section> -->

<style>
.icon_section {
    margin: auto;
}

@media screen and (max-width: 590px) {
    /* .row>* {
        flex-shrink: 0;
        width: 50%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x) * .5);
        padding-left: calc(var(--bs-gutter-x) * .5);
        margin-top: var(--bs-gutter-y);
    } */

    .icon-title {
        font-weight: 700;
        margin-bottom: 32px;
    }

    .icon-img {
        margin-top: 33px;
        width: 130px;
    }
}
</style>

<!-- Icon section -->
<section>
    <div class="container text-center icon_section row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-4.png') }}" alt="">
            <h5 class="icon-title ">Comfort</h5>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-1.png') }}" alt="">
            <h5 class="icon-title">Ergonomic</h5>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-2.png') }}" alt="">
            <h5 class="icon-title">Durable</h5>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-3.png') }}" alt="">
            <h5 class="icon-title">Hygenic</h5>
        </div>
    </div>
</section>

<!-- Card Section starts -->

<section class="mx-3">
    <!-- <h2 class="OP text-center">Home Mattress</h2> -->

    <!-- Navigate Buttons starts -->

    <nav class="">
        <div class="nav nav-tabs products_div" id="nav-tab" role="tablist">
            <button class="mx-2 active tabs button-89" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home Mattress</button>
            <button class="mx-2 tabs button-89" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Royal Mattress</button>
            <button class="mx-2 tabs button-89" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sleep
                Essentials</button>
        </div>
    </nav>
    <!-- Navigate Buttons ends -->

    <script>
    var tab = document.querySelector('.OP');
    var count = document.querySelectorAll('.tabs').length;

    for (let i = 0; i < count; i++) {
        document.querySelectorAll('.tabs')[i].addEventListener('click', () => {
            let head = document.querySelectorAll('.tabs')[i].innerHTML;
            tab.innerHTML = head;
        })

    }
    </script>

    <!-- Home Mattress starts -->
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            <div class="row d-flex justify-content-around px-5 align-items-center cart-container">

                @foreach ($home_mattress as $item)
                <div class="_card col-lg-4 col-md-6">

                    <div class="card-img">
                        <a href="" class="product_id" value="{{ $item->id }}">
                            <img src="{{ asset('layouts/img/' . $item->image) }}" class="product_img" alt=""
                                srcset=""></a>
                    </div>

                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{ $item->product }}</p>
                        <div class="_card-button rounded">
                            <a href="cart.php"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>

                </div>
                @endforeach

                <div class="container text-center">
                    <a href="#" class="btn btn-outline-primary mb-5 px-5 rounded-0">Show More</a>
                </div>

            </div>
        </div>
        <!-- Home Mattress Ends -->

        <!-- Royal Mattress starts -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="row d-flex justify-content-around px-5 align-items-center cart-container">

                <div class="_card col-lg-4 col-md-6">
                    <div class="royal_cart-img card-img">
                        <a href="#"> <img src="{{ asset('layouts/img/Royal Rest (A).png') }}" class="product_img" alt=""
                                srcset=""> </a>
                    </div>
                    <div class="card-info">
                        <p class="text-title product_name">Royal Rest</p>
                    </div>
                    <div class="_card-footer">
                        <div class="royal_card-button _card-button">
                            <a href="cart.php"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="container text-center">
                <a href="#" class="btn btn-outline-primary mb-5 px-5 rounded-0">Show More</a>
            </div>
        </div>
        <!-- Royal Mattress ends -->

        <!-- Sleep Essentials Starts -->
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="row d-flex justify-content-around px-5 align-items-center cart-container">

                <div class="_card col-lg-4 col-md-6">
                    <div class="card-img">
                        <a href="delite.php"> <img src="{{ asset('layouts/img/Royal Rest (A).png') }}"
                                class="product_img" alt="" srcset=""> </a>
                    </div>
                    <div class="card-info">
                        <p class="text-title product_name">Royal Rest</p>
                    </div>
                    <div class="_card-footer">
                        <div class="_card-button rounded">
                            <a href="cart.php"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container text-center">
                <a href="#" class="btn btn-outline-primary mb-5 px-5 rounded-0">Show More</a>
            </div>

        </div>
        <!-- Sleep Essentials ends -->
    </div>


</section>



<!-- carousel  -->

<!-- <div class="container py-5 bg-light">
    <div class="row">
        <div class="col-4 p-5">
            <h1 style="font-weight: 700;">50+ Beutiful rooms inspiration</h1>
            <p>Our designer already made a lot of beutiful prototipe of rooms that inspire you</p>
            <button type="button" class="btn btn-primary rounded-0 text-white">Explore More</button>
        </div>

        <div class="col-8">

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>
                </div>



                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>
    </div>
</div> -->

<div class="container py-5 bg-light">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 pb-3">
            <h1 style="font-weight: 700;">50+ Beutiful rooms inspiration</h1>
            <p>Our designer already made a lot of beutiful prototipe of rooms that inspire you</p>
            <button type="button" class="btn btn-primary rounded-0 text-white">Explore More</button>
        </div>

        <div class="col-lg-8 col-md-12 col-sm-12">

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/p1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 500px!important;">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset('layouts/img/c2.png') }}" class="d-block w-100" alt="..."
                                    style="height: 400px!important;">
                            </div>
                        </div>
                    </div>

                </div>




                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>
    </div>
</div>
<!-- Footer -->



<script>
$(document).ready(function() {
    $('.product_id').click(function() {
        let pid = $(this).attr('value');
        // console.log(pid);
        $.ajax({
            url: '/get_product_detail',
            type: 'GET',
            data: {
                'pid': pid,
            },
            success: function(result) {
                console.log(result);
                var home_mattress = JSON.stringify(result['home_mattress']);
                // console.log(home_mattress);

                sessionStorage.setItem('home_mattress', home_mattress);

                window.location.href = '/get_view_product';

            }
        });

    });

});






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
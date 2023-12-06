@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="layouts/css/style2.css">
    <!--Carousel Section-->
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
                    <img src="{{ asset('layouts/img/mattress that refreses you.png') }}"  class="img d-block w-100 caro-img" alt="img-1"
                        >
                    <div class="carousel-caption col-md-6 col-10 col-offset-md-6 wow fadeInLeft">
                        <h1>The Mattress that<br>Refreshes you</h1>
                       
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="{{ asset('layouts/img/sleep is the best meditation (1).png') }}"  class="img d-block w-100 caro-img" alt="img-3"
                        >
                    <div class="carousel-caption carousel-caption col-md-6 col-10 col-offset-md-6">
                        <h1>The Sleep Is the<br>Best Meditation</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!--Icon section -->

 <style>
    .icon_div{
        display: flex;
        flex-direction: column;
        align-items:center;
        justify-content: space-around;
    }
    .icon-img{
        border-radius: 50%;
        transition: all 0.3s ease-in;
    }
    .icon-img:hover{
        transition: all 0.2s ease-in-out;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }
 </style>
<section>
    <div class="container text-center icon_section row p-2">
        <div class="col-3 col-lg-3 col-md-3 col-sm-3 icon_div wow bounceInUp">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-4.png') }}" alt="">
            <h5 class="icon-title ">Comfort</h5>
        </div>
        
        <div class="col-3 col-lg-3 col-md-3 col-sm-3 icon_div wow bounceInDown">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-1.png') }}" alt="">
            <h5 class="icon-title">Ergonomic</h5>
        </div>
        <div class="col-3 col-lg-3 col-md-3 col-sm-3 icon_div wow bounceInUp">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-2.png') }}" alt="">
            <h5 class="icon-title">Durable</h5>
        </div>
        <div class="col-3 col-lg-3 col-md-3 col-sm-3 icon_div wow bounceInDown">
            <img class="icon-img img-fluid p-0" src="{{ asset('layouts/img/icon-3.png') }}" alt="">
            <h5 class="icon-title">Hygenic</h5>
        </div>
    </div>
</section>

 <!--Card Section starts -->

 <style>
    .card.section img{
        width: 100%;
        height: 280px;
        border:none;
    }

    .card .item h6 i{
        font-size: 20px;
        color: #0d6efd !important;
        margin-top: 6px;
        display: inline-block;
        float: right;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        transition: all 0.2s ease-out;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .card .item h6 i:hover{
        transform: scale(1);
        background: #0d6efd;
        color: white !important;
        transition: all 0.5s ease-out;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px;
    }

    .card .item .main-button {
        text-align: center;
        margin-bottom: 40px;
    }

    .card .item .main-button a:hover{
        background :#0d6efd;
    }

    @media screen and (min-width: 200px) and (max-width: 400px){
        .card.section img {
         width: 100%;
         height: 100%;
      }
    }
 </style>

 


<section style="background: #c2eaff;" class="pb-3">
    <div class="row d-flex justify-content-around px-0 px-lg-5 px-md-5 align-items-center cart-container">
     <div class="card section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6 style="color: #0d6efd;">| Services</h6>
                        <h2>We Provide The Best Services You Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="item">
                        <div class="main-button">
                        <a href="{{route('homemattress')}}">Mattress</a>
                        </div>
                        <a href="{{route('homemattress')}}">
                            <img src="{{ asset('layouts/img/home_elite .png') }}" class="product_img" alt=""
                            srcset=""></a>    
                        <span class="category" style="background: #c2eaff;">Elite</span>
                        <h6><a href="{{route('cart')}}"><i class="fas fa-solid fa-cart-plus"></i></a></h6>
                        <!-- <h4><a href="card-details.html">54 Mid Street Florida, OR 27001</a></h4> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="item">
                        <div class="main-button">
                        <a href="{{route('royal')}}">Royale Series</a>
                        </div>
                        <a href="{{route('royal')}}"><img src="{{ asset('layouts/img/home_royale.png') }}" class="" alt="royal" srcset=""> </a>
                        <span class="category" style="background: #c2eaff;">Royale Rest</span>
                        <h6><a href="{{route('cart')}}"><i class="fas fa-solid fa-cart-plus"></i></a></h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="item">
                        <div class="main-button">
                        <a href="{{route('pillows')}}">Sleep Essentials</a>
                        </div>
                        <a href="{{route('homemattress')}}">
                        <a href="{{route('pillows')}}"> <img src="{{ asset('layouts/img/pillowss.png') }}" class="product_img" alt=""
                            srcset=""></a>
                        <span class="category" style="background: #c2eaff;">Pillow</span>
                        <h6><a href="{{route('cart')}}"><i class="fas fa-solid fa-cart-plus"></i></a></h6>
                    </div>
                </div>
            </div>
        <div>
    </div>
     
     <!-- Home Mattress starts -->
   <!-- <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            <div class="row d-flex justify-content-around px-0 px-lg-5 px-md-5 align-items-center cart-container">
                
                <div class="col-xl-4 col-lg-6 col-md-6 text-center wow fadeInUp">
                    <a href="{{route('homemattress')}}"><button class="active tabs btn btn-secondary product_btns my-3"> Mattress</button></a>
                    <div class="_card mx-auto">
                    <div class="card-img">
                        <a href="{{route('homemattress')}}">
                            <img src="{{ asset('layouts/img/home_elite .png') }}" class="product_img" alt=""
                                srcset=""></a>    
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">ELITE</p>
                        <div class="_card-button rounded">
                            <a href="{{route('cart')}}"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                
               <div class="col-xl-4 col-lg-6 col-md-6 text-center wow fadeInUp">
                   <a href="{{route('royal')}}"><button class="tabs btn btn-secondary product_btns my-3" >Royale Series</button></a>
                   <div class="_card mx-auto">
                    <div class="royal_cart-img card-img">
                        <a href="{{route('royal')}}" > <img src="{{ asset('layouts/img/home_royale.png') }}" class="product_img" alt="royal"
                                srcset=""> </a>
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">ROYALE REST</p>
                        <div class="_card-button rounded">
                            <a href="{{route('cart')}}"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                
               <div class=" col-lg-4 col-md-6 text-center wow fadeInUp">
                   <a href="{{route('pillows')}}"><button class="tabs btn btn-secondary product_btns my-3">Sleep Essentials</button></a>
                   <div class="_card mx-auto">
                    <div class="card-img">
                        <a href="{{route('pillows')}}"> <img src="{{ asset('layouts/img/pillowss.png') }}"
                                class="product_img" alt="" srcset="" style="width:300px;"> </a>
                    </div>
                   <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">PILLOW</p>
                        <div class="_card-button rounded">
                            <a href="{{route('cart')}}"><i class="bi bi-cart3 cart_logo"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
               

               

            </div>
        </div> 
        Home Mattress Ends -->
  
    <!-- </div> --> 
</section>

<style>
    @media screen and (min-width:200px) and (max-width:995px){
        .h_image{
            height: 100%;
        }
    }
    @media screen and (min-width:996){
        .h_image{
            height: 400px!important;
        }
    }
</style>
<div class="container mb-3 mt-5">
    
    <div class="row p-3 d-flex gap-5 pb-4">
        <div class="col-lg-5 col-md-12 wow bounceInLeft ps-3">
            <h2 style="font-weight: 700;">Are you planning to buy a new mattress? </h2>
            <p style="text-align: justify;" class="pt-2">
                Choosing the right mattress can be confusing as there are plenty of brands available in the market. Many people may not even be aware of the types, and qualities required for the right mattress. A mattress can impact a person’s sleep, and provide proper support to the body, in turn, ensuring healthy sleep posture.
            </p>
            
            <p style="text-align: justify;">
                When you visit your local mattress store, you have hundreds of options for mattress designs and materials. You can choose between mattresses of various firmness levels, and have the choice of a memory foam mattress, spring mattress, latex mattress, or an organic, all-natural
                mattress. You can also find mattresses with advanced features that allow you to adjust the position of the bed to improve your posture and sleep.
    
            </p>
        </div>
        
        <div class="col-lg-6 col-md-12 wow bounceInRight h_image">
            <img src="{{ asset('layouts/img/1677.jpg') }}" class="d-block w-100" alt="..."style="">
        </div>  
        
    </div>

</div>
 <!--Footer -->


@endsection





<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Under Construction</title>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--    <style>-->
<!--        body {-->
<!--            text-align: center;-->
<!--            font-family: Arial, sans-serif;-->
<!--            margin-top: 100px;-->
<!--            background-color: #f5f5f5;-->
<!--        }-->
<!--        h1 {-->
<!--            font-size: 36px;-->
<!--        }-->
<!--        p {-->
<!--            font-size: 18px;-->
<!--        }-->
<!--        .contact-details {-->
<!--            margin-top: 50px;-->
<!--            font-size: 16px;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--    <div class="container">-->
<!--        <h1>Under Construction</h1>-->
<!--        <p>We apologize for the inconvenience. This site is currently under construction.</p>-->
<!--        <div class="contact-details">-->
<!--            <p>Contact us for more information:</p>-->
<!--            <p>Email:  customer@restin.in</p>-->
<!--            <p>Phone: +91 77559 18227</p>-->
<!--            <p>Address: N 101/7, MIDC, Hingna Road, Nagpur-440016-->
<!--            Maharashtra, India</p>-->
<!--        </div>-->
<!--    </div>-->

<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->


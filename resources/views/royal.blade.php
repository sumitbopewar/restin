@extends('layouts.app')


@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Lisu+Bosa:wght@200&family=Noto+Serif+Khojki:wght@500&family=Roboto&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    
*{
    font-family: 'Lato', sans-serif;
}

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

.royal_head {
    color: #f3e37d;
    font-family: 'Noto Serif Khojki', serif !important;
}



.royal_cart_logo {
    font-size: 1.2rem !important;
    padding: 7px;
}

.product_name {
    font-size: 1.3rem;
}

.royal_video {
   
    object-fit: scale-down;
    height: 100%;
    width: 100%;
}

.royal_container{
    margin: auto;
    padding: 0px;
}

p{
    font-size: 1.1rem;
}
.roy{
    min-height:100%;
}
.royal_icons{
    width: 70px;
    height: 65px;
    padding-right: 7px;
    margin: auto;
}
        
</style>

<!--<h1>Royal Mattress</h1>-->

<h2 class=" text-center home_mattress_head text-dark img_res" style="background-image: url('{{ asset('/layouts/img/New_Royale Header (1).png') }}');">  </h2>
<div class="mb-2 mt-3 container">
    
    <p class="text-center mt-5 mb-4 wow fadeInUp">
        <img src="layouts/img/Horizontal-Line-PNG.png" style="height: 20px;width: 20%;">
        <br>Do you remember the last time you woke up in a luxury hotel room.<br>That feeling of pure relaxation. Refreshed, energized and so<br>
        comfortable that you didn’t want to get out of bed.<br> Now imagine that feeling every day in your own home.<br>
        <b>The Restin Royale Premium Mattress</b> is an opportunity for you to<br> take home that feeling you get when staying at a 5* Hotel.<br>
       <img src="layouts/img/Horizontal-Line-PNG.png" style="height: 20px;width: 20%;">
    </p>
    
    
    <h3 class="m-0" style="font-weight:bold;">Restin Introduce: The Royale Series Mattresses</h3>
    <p style="margin: 0px;">Restin introduces Royale series of luxury mattresses because you should enjoy the necessary luxury of a
        sumptuous, sensuously comfortable bed at home.<br>
         We also customise mattress based on your individual requirements and preferences. Now Losing sleep
        needn't be anything to lose sleep over.
    </p>
</div>

<div class="container mt-3 row royal_container">

    <div class="col-lg-6 col-md-12 wow bounceInLeft">
        
        <div class="d-flex">
            <img class="para-img royal_icons mr-2" src="{{asset('layouts/img/Zero Sinking.png')}}" alt="">
            <div>
                <h5 class="m-0" style="font-weight:bold;">Zero Sinking:</h5>
                <p>The structure of the mattress is designed to ensure proper body support while sleeping ensuring that you
                    have Zero Sinking feeling even after prolonged use.</p>
            </div>
        </div>

        <div class="d-flex">
            <img class="para-img royal_icons mr-2" src="{{asset('layouts/img/Zero Gap.png')}}" alt="">
            <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Gap:</h5>
            <p>The structured layers of different components are assembled is a manner to prevent gap in the mattress and
                ensuring proper support to in a manner all the curves in the body.</p>
                
            </div>
        </div>

        <div class="d-flex">
            <img class="para-img royal_icons mr-2" src="{{asset('layouts/img/Zero Noise.png')}}" alt="">
            <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Noise:</h5>
            <p>The mattress are layered in a proper designed manner to ensure zero noise caused by rubbing of the inner
                material together.</p>
            </div>
        </div>

        <div class="d-flex">
            <img class="para-img royal_icons mr-2" src="{{asset('layouts/img/Zero Motion.png')}}" alt="">
            <div>
            <h5 class="m-0" style="font-weight:bold;">Zero Motion:</h5>
            <p>The inner springs in the mattress are independent of each other - they offer individual  support, providing
                greater comfort, so there is less tossing and turning there by eliminating the discomfort to the other
                sleeping partner.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 wow bounceInRight">
    
        <img class="royal_video" src="{{asset('layouts/img/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv copy.png')}}" alt="">
    </div>

</div>

    <div class="row m-5 d-flex justify-content-evenly align-items-center cart-container">

        @foreach ($royal as $item)
            <div class="_card col-lg-3 col-md-6 my-4 wow fadeInUp">
                <div class="roy">
                    
                    <div class="royal_cart-img card-img">
                        <a href="#"> <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img"
                        alt="">
                        </a>
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name text-uppercase">{{$item->product}}</p>
                        <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="p-0 royal_card-button _card-button product_id" value="{{ $item->id }}">
                               <i class="bi bi-cart3 cart_logo royal_cart_logo"></i>
                            </div>
                        </div>
                    </div>
                    
               </div>
                
            </div>
        @endforeach



    </div>




    </div>


<!-- Carts Ends -->


 <script>
        $(document).ready(function() {
             $('.product_id').on('click', function(event) {
                  event.preventDefault();
                let rid = $(this).attr('value');
                $.ajax({
                    url: '/get_royal_product',
                    type: 'GET',
                    data: {
                        'rid': rid,
                    },
                    success: function(result) {
                        var royal_mattress = JSON.stringify(result['royal_mattress']);
                        sessionStorage.setItem('royal_mattress', royal_mattress);
                        window.location.href = '/royal_product';
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('AJAX Error:', errorThrown);
                        // You can add error handling here, like displaying an error message to the user.
                    }
                });
        
            });
        
  
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
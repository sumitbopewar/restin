@extends('layouts.app')


@section('content')


<style>

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
    
    .royal_icons {
        width: 79px;
        height: 70px;
        padding-right: 7px;
        margin: auto;
        object-fit: contain;
    }
</style>
<style>
    .product_container {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .pillow_img {
        object-fit: scale-down;
        /* width: 20%; */
        /* margin: auto; */
    }

    .content_box {
        justify-content: space-around;
        /* padding: 15px; */
        margin-top: 20px;

    }


    .fonds {
        font-size: 1.1rem;
    }

    .product_content {
        width: 50%;
        /* padding: 10px; */
        padding-right: 20px;
    }

    .pillow_img {
        width: 50%;
        /* padding: 10px; */
    }

    .main-box{
        padding: 15px;margin-top: 20px;
    }

    .product_content li{
        margin: 10px; text-align: justify;
    }


    @media screen and (max-width: 1000px) {
        .content_box {
            flex-direction: column;
        }

        .product_content {
            width: 100%;
        }

        .pillow_img {
            width: 100%;
        }
    }
    
</style>

<!--<h1>Home Mattress</h1>-->

<h2 class=" text-center home_mattress_head img_res" style="background-image: url('{{ asset("/layouts/img/Pillow Header.png") }}');"></h2>

<!--</section>-->
<div class="container product_container fonds ">
    <h3 style="font-size:50px;" class="ps-3">PILLOW</h3>
    <p class="ps-3">
        The perfect mattress should always have the perfect pillows to accompany it ! <br> Your investment in your sleep has only been met halfway if you don’t have great pillows, too.
    </p>


    <div class="main-box" >
        <h3 class="" >FIBER PILLOWS</h3>
        <div class="d-flex content_box ">
            <div class="product_content wow bounceInLeft">
                <p style="text-align: justify">Pillows are filled with hypoallergenic polyester fibers-Polyester is a synthetic fabric engineered to mimic the softness, coolness, and breathability of natural cotton. They come in a wide range of sizes, as well as loft and firmness settings.<br> It provides good support, is light weight, and spot washable.</p>
                <img src="{{asset('layouts/img/Fiber Pillow Image.png')}}" class="product_img p-0 img-fluid" alt="Pillow img" style="height: 300px; width: 560px;">
            </div>
            <div class="pillow_img wow bounceInRight">
                <img class="para-img img-fluid" src="{{asset('layouts/img/piilowB.png')}}" alt="" style="padding: 0px; height:auto; width:100%">
            </div>
        </div>
    </div>


    <div class="main-box" >
        <h3 class="" >MEMORY FOAM PILLOWS</h3>
        <div class="d-flex content_box ">
            <div class="product_content wow bounceInLeft">
                <ul>
                    <li><b>Prevents cricks in your neck-</b> The dense material of a memory foam pillow prevents your neck from bending in awkward directions. This is why they are great to use when traveling.</li>
                    <li><b>Keeps your spine aligned-</b> As the memory foam pillow prevents your neck from bending, it allows your spine to remain aligned.</li>
                    <li><b>Molds to the shape of your head –</b> Memory foam pillows contour to the shape of your head, just as a memory foam mattress contours itself to your body.</li>
                    
                </ul>
            </div>
            <div class="pillow_img p-3 wow bounceInRight">
                <img src="{{asset('layouts/img/Memory Foam Pillows (1).png')}}" class="product_img" alt="Pillow img">
            </div>
           
        </div> 
        <div class="wow fadeInUp">
                <ul>
                <li style="margin-left: 10px;"><b>Memory foam pillows -</b> Available in a variety of shapes, which is convenient because the type of pillow needed will vary based upon your sleeping position.</li>
                    <li style="margin: 10px; text-align: justify;"><b>No adjusting-</b> Memory foam does not require flipping, fluffing, or any of the adjustments of a regular pillow, as it will retain its shape and size.</li>
                    <li style="margin: 10px; text-align: justify;"><b>Reduces snoring-</b> Regular pillows tilt your head upwards, causing air passages to close, However, memory foam pillows contour to your neck, allowing your air passages to remain open.</li>
                </ul>
        </div>
    </div>
    
    
    <div class="main-box" >
        <h3 class="" >RESTIN LATEX PILLOWS </h3>
        <div class="d-flex content_box ">
            <div class="product_content wow bounceInLeft">
                <p style="text-align: justify">Pillows are made of natural rubber latex and are soft and comfortable to use. The structure is designed to ensure to maintain the unform shape of the pillow and provide ergonomic and comfortable support for the head, neck and shoulders. </p>
                <p style="text-align: justify">This Ergonomic pillow can be adjusted according to your shape, allowing your shoulders, neck and head to rest in a natural position. When you wake up, the pillow will return to its original shape without any deformation. It has no no peculiar smell. The Outer fabric is made of removable bamboo fibre and polyester and can be machine washed.</p>
        
            </div>
            <div class="pillow_img wow bounceInRight">
                <img class="para-img img-fluid" src="{{asset('layouts/img/latex_pill .png')}}" alt="" style="padding: 0px; height:270px; width:100%">
            </div>
        </div>
    </div>
    
    <div class="main-box">
        <div class="row d-flex justify-content-center align-items-center cart-container gap-5">
            
            @foreach($pillow as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{asset('layouts/img/'.$item->image)}}" class="product_img" alt="" srcset="" style="height:100%;width:100%"></a>
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name align-self-center" style="font-size:1.3rem">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{$item->id}}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach  
                
               
        </div>
    </div>
</div>



<script>
        $(document).ready(function() {
            $('.product_id').click(function() {
                let pid = $(this).attr('value');
                // console.log(pid);
                $.ajax({
                    url: '/get_pillow_detail',
                    type: 'GET',
                    data: {
                        'pid': pid,
                    },
                    success: function(result) {
                        console.log(result);
                        var pillow_detail = JSON.stringify(result['pillow_detail']);
                        // console.log(home_mattress);
        
                        sessionStorage.setItem('pillow_detail', pillow_detail);
        
                        window.location.href = '/get_view_pillows';
        
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
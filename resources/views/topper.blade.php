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

        .product_container {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .pillow_img {
            object-fit: scale-down;
            /* width: 20%; */
            margin: auto;
        }

        .content_box {
            justify-content: space-around;
            padding: 15px;

        }


        .fonds {
            font-size: 1.1rem;
        }

        .product_content {
            width: 50%;
            padding: 10px;
        }

        .pillow_img {
            width: 50%;
            padding: 10px;
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

        .product_dis {
            margin-left: 2rem;
        }
    </style>

    <!--<h1>Home Mattress</h1>-->

    <h2 class=" text-center home_mattress_head img_res"  style="background-image: url('{{ asset("/layouts/img/Topper Header(1).png") }}');"></h2>

    <div class="container product_container fonds">
        <p calss="">
            Mattress Toppers are the best way to enhance the Comfort of your Used Mattress without spending too much.
            Available in 2 models :Premium & Memory.

        </p>

        <h3>Premium</h3>

        <p>This High density Pu foam mattress topper provides FIRM support to give you a good night sleep. It replaces the
            discomfort of your sagged mattress as the Topper helps in providing all body support while sleeping. It adds to
            your sleeping experience and is comfortable for all kinds of sleepers.</p>
        <p>Firmness: Medium</p>

        <ul class="product_dis">
            <li>The mattress topper is made of High density Pu Foam.</li>
            <li>Fabric quality is Premium Damask Jaquard.</li>
            <li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
            <li>This mattress topper comes with 3 years of warranty.</li>
        </ul>


        <div class="row mt-3">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <h3>Memory</h3>
                <p style="text-align:justify">This Memory foam mattress topper lets you tune the firmness and support of your mattress to give you the sleeping
                    experience you have dreamed of. The topper is a good choice for sleepers with back, neck, and shoulder pain as
                    well. No more tossing and turning all night long as RESTIN memory foam mattress topper is designed with a
                    universal adaptive feel to provide the cooling, contouring and comfort so that you will wake up refreshed and
                    rejuvenated regardless of your sleeping style</p>
                <p>Firmness: Medium Soft</p>
        
                <ul class="product_dis">
                    <li>The mattress topper is made of memory foam.</li>
                    <li>It comes with a detachable top cover.</li>
                    <li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
                    <li>This mattress topper comes with 3 years of warranty.</li>
                    <li>It contours the body and distributes body weight evenly.</li>
                </ul>
            </div>
            
            @foreach($topper as $item)
            <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center d-flex">
                <div class="_card col-lg-4 col-md-6">
                      <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{asset('storage/images/'.$item->image1)}}" class="product_img" alt="" srcset="" style="height:100%;width:100%"></a>
                      </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name align-self-center" style="font-size:1.3rem">{{$item->product}}</p>
                        <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="topper_id" value="{{$item->id}}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
        
        
    </div>
    <script>
        $(document).ready(function() {
            $('.topper_id').click(function() {
                let pid = $(this).attr('value');
                // console.log(pid);
                $.ajax({
                    url: '/get_topper_detail',
                    type: 'GET',
                    data: {
                        'pid': pid,
                    },
                    success: function(result) {
                        // console.log(result);
                        var topper_detail = JSON.stringify(result['topper_detail']);
        
                        sessionStorage.setItem('topper_detail', topper_detail);
        
                        window.location.href = '/get_view_topper';
        
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

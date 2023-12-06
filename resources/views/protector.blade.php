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
     
    .product_container{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    
      .pillow_img {
        object-fit: scale-down;
        /* width: 20%; */
        margin: auto;
    }
    
    .content_box{
        justify-content: space-around;
        padding: 15px;
        
    }
    .fonds{
        font-size: 1.1rem;
    }
    .product_content{
        width: 50%;
        padding: 10px;
    }
    .pillow_img{
        width: 50%;
        padding: 10px;
    }
                
    @media screen and (max-width: 1000px) {
        .content_box{
           flex-direction: column;
        }
        
        .product_content{
           width: 100%;
        }
        .pillow_img{
            width: 100%;
        }
        
        .fonds{
           margin-bottom:385px!important;
        }
    }
</style>

    <h2 class=" text-center home_mattress_head img_res" style="background-image: url('{{ asset("/layouts/img/Protector Header.png") }}');"></h2>
    
    <div class="container product_container fonds" style="margin-bottom:70px">
    <h3 style="font-size:50px;" class="ps-3 text-uppercase">Protector</h3>
    
    <div class="d-flex content_box ">
        <div class="product_content">
            <ul style="text-align: justify;">
                <li class="pb-2">Mattress Protector extends the life of your mattress. This will not change the feel of your mattress and provides comfort as it naturally absorbs moisture. 100% waterproof with airflow technology allows air to circulate through the protector, but repels liquids.</li>
                
                <li class="pb-2">Protects Mattress against allergens, dust mites, bacteria, perspiration, urine and fluids. Ideal for use when putting infants to bed to protect your mattress against bed wetting.</li>
                
                <li class="pb-2">Mattress Protector is made of <b>Water proof, Dustproof fabric</b> with the Top Surface of Premium Terry cloth with TPU coating on the back.</li>
                
                <li class="pb-2"><b>PERFECT FIT:</b> Fits your mattress of 78×72-inch size with thickness up to 10″ (skirting provided up to 18 “). Available in all sizes. Can be custom made also.</li>
                
                <li class="pb-2"><b>EASY TO CLEAN:</b> Machine washable, which adds the convenience of washing and drying easily. Use mild detergent and cold wash. While drying, keep the Terry Side up.</li>
            </ul>
            <ul class="fs-4 list-unstyled mt-2 text-center">
                <li class="pb-2">Available in <b>LIGHT & DARK</b> shade</li>
                
                <li class="pb-2">Available in <b>2 Qualities</b></li>
                <li class="mt-3"><img src="{{asset('layouts/img/protector icons.png')}}" class="img-fluid ps-0" style="height: 125px;"></li>
            </ul>
        </div>
        <div class="pillow_img mt-0" style="background-image: url('{{ asset("/layouts/img/mattress-protector-1_jhz00v-1x1.jpg") }}');background-size: 100% 100%;height: 350px;">
            <div class="ps-0 ps-lg-5 ps-md-5 pt-5">
                <img src="{{asset('layouts/img/Premium Quality.png')}}" class="p-3" style="height: 150px;" ><br>
                <img src="{{asset('layouts/img/warranty.png')}}" class="p-3" style="height: 150px;">
            </div>
            
            
            @foreach($protector as $item)
                <div class="d-flex justify-content-center justify-content-lg-end justify-content-md-end pt-3">
                    <div class="_card col-lg-4 col-md-6 mx-auto" style="height: 345px;">
                        <div class="card-img" style="position:relative;">
                             <a href="#">
                            <img src="{{asset('storage/images/'.$item->image1)}}" class="product_img" alt="" srcset="" style="height:100%;width:100%"></a>
                        </div>
                        <div class="card-info d-flex justify-content-between py-2">
                            <p class="text-title product_name align-self-center" style="font-size:1.3rem">{{$item->product}}</p>
                             <div class="_card-footer">
                                <span class="text-title _product_price"></span>
                                <div class="_card-button">
                                    <a href="#" class="protector_id" value="{{$item->id}}"><i class="bi bi-cart3 cart_logo"></i></a>
                                </div>
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
            $('.protector_id').click(function() {
                let pid = $(this).attr('value');
                console.log(pid);
                $.ajax({
                    url: '/get_protector_detail',
                    type: 'GET',
                    data: {
                        'pid': pid,
                    },
                    success: function(result) {
                        console.log(result);
                        var protector_detail = JSON.stringify(result['protector_detail']);
                        // console.log(home_mattress);
        
                        sessionStorage.setItem('protector_detail', protector_detail);
        
                        window.location.href = '/get_view_protector';
        
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
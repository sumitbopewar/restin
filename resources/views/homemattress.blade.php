@extends('layouts.app')

@section('style')

@endsection

@section('content')
    <style>
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
    </style>


    <h2 class="text-center home_mattress_head img_res justify-content-center d-flex"
    style="background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');">
        <span class="align-self-center wow fadeInUp">Home Mattress</span></h2>

    <section class="mx-3 p-3">
        
        <div class="row d-flex justify-content-center align-items-center cart-container gap-5">
            @foreach ($activamattress as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{ asset('storage/images/'.$item->image) }}" class="product_img" alt="" srcset=""></a>
                        <!--<span> <img src="{{ asset('storage/images/'.$item->collection_img) }}" class="collection_tag w-25"-->
                        <!-- style="position: absolute;left: -100px;transform:none;" alt="collection"-->
                        <!--        srcset=""></span>-->
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{ $item->id }}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
        
       
        <div class="row d-flex justify-content-center align-items-center cart-container gap-5 pt-5">
            @foreach ($comfortmattress as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{ asset('storage/images/'.$item->image) }}" class="product_img" alt="" srcset=""></a>
                        <!--<span> <img src="{{ asset('storage/images/'.$item->collection_img) }}" class="collection_tag w-25"-->
                        <!-- style="position: absolute;left: -100px;transform:none;" alt="collection"-->
                        <!--        srcset=""></span>-->
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{ $item->id }}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
        
         <div class="row d-flex justify-content-center align-items-center cart-container gap-5 pt-5">
            @foreach ($orthoSpinemattress as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{ asset('storage/images/'.$item->image) }}" class="product_img" alt="" srcset=""></a>
                        <!--<span> <img src="{{ asset('storage/images/'.$item->collection_img) }}" class="collection_tag w-25"-->
                        <!-- style="position: absolute;left: -100px;transform:none;" alt="collection"-->
                        <!--        srcset=""></span>-->
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{ $item->id }}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
        
        <div class="row d-flex justify-content-center align-items-center cart-container gap-5 pt-5">
            @foreach ($hybridSpinemattress as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#">
                        <img src="{{ asset('storage/images/'.$item->image) }}" class="product_img" alt="" srcset=""></a>
                        <!--<span> <img src="{{ asset('storage/images/'.$item->collection_img) }}" class="collection_tag w-25"-->
                        <!-- style="position: absolute;left: -100px;transform:none;" alt="collection"-->
                        <!--        srcset=""></span>-->
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{ $item->id }}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
        
       
        
        <div class="row d-flex justify-content-center align-items-center cart-container gap-5 pt-5">
            @foreach ($viscomemorymattress as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img" style="position:relative;">
                         <a href="#" ">
                        <img src="{{ asset('storage/images/'.$item->image) }}" class="product_img" alt="" srcset=""></a>
                        <!--<span> <img src="{{ asset('storage/images/'.$item->collection_img) }}" class="collection_tag w-25"-->
                        <!-- style="position: absolute;left: -100px;transform:none;" alt="collection"-->
                        <!--        srcset=""></span>-->
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                         <div class="_card-footer">
                            <span class="text-title _product_price"></span>
                            <div class="_card-button">
                                <a href="#" class="product_id" value="{{ $item->id }}"><i class="bi bi-cart3 cart_logo"></i></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
        
       
        
        
        
    </section>


    <!-- Carts Ends -->
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

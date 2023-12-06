@extends('layouts.app')


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


    <h2 class=" text-center home_mattress_head justify-content-center d-flex img_res" style="background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');">
        <span class="align-self-center wow fadeInUp">Hospital Mattress</span></h2>

    <section class="mx-3 p-3">
        <div class="row d-flex justify-content-center align-items-center cart-container">
            
            @foreach ($hospital as $item)
                <div class="_card col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card-img">
                        <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img" alt="" srcset="">
                    </div>
                    <div class="card-info d-flex justify-content-between py-2">
                        <p class="text-title product_name">{{$item->product}}</p>
                        <div class="_card-footer">
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
                console.log(pid);
                $.ajax({
                    url: '/hospital_product_detail',
                    type: 'GET',
                    data: {
                        'pid': pid,
                    },
                    success: function(result) {
                        console.log(result);
                        var hospital_mattress = JSON.stringify(result['hospital_mattress']);
                        // console.log(home_mattress);
        
                        sessionStorage.setItem('hospital_mattress', hospital_mattress);
        
                        window.location.href = '/hospital_product';
        
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

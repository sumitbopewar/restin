@extends('layouts.app')
@section('style')
    <style>
        .page-header {
            background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url('../../layouts/img/Protector Header.png') center center no-repeat;
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

        .we-help-section {
            padding: 0px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Protector</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Protector</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p>
                        Mattress Protector extends the life of your mattress. This will not change the feel of your mattress
                        and provides comfort as it naturally absorbs moisture. 100% waterproof with airflow technology
                        allows air to circulate through the protector, but repels liquids.
                    </p>
                    <p>
                        Protects Mattress against allergens, dust mites, bacteria, perspiration, urine and fluids. Ideal for
                        use when putting infants to bed to protect your mattress against bed wetting.
                    </p>
                    <p>
                        Mattress Protector is made of <strong>Water proof, Dustproof fabric</strong> with the Top Surface of
                        Premium Terry cloth with TPU coating on the back.
                    </p>
                    <p>
                        <strong>PERFECT FIT:</strong> Fits your mattress of 78×72-inch size with thickness up to 10″
                        (skirting provided up to 18 “). Available in all sizes. Can be custom made also.
                    </p>
                    <p>
                        <strong>EASY TO CLEAN:</strong> Machine washable, which adds the convenience of washing and drying
                        easily. Use mild detergent and cold wash. While drying, keep the Terry Side up.
                    </p>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <div class="pillow_img mt-0"
                        style="background-image: url('{{ asset('/layouts/img/mattress-protector-1_jhz00v-1x1.jpg') }}');background-size: 100% 100%;height: 350px;">
                        <div class="ps-0 ps-lg-5 ps-md-5 pt-5">
                            <img src="{{ asset('layouts/img/Premium Quality.png') }}" class="p-3"
                                style="height: 150px;"><br>
                            <img src="{{ asset('layouts/img/warranty.png') }}" class="p-3" style="height: 150px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Product Section -->
            <div class="product-section" style="padding-bottom: 2rem;">
                <div class="container">
                    <div class="row d-flex justify-content-around">
                        <div class="col-lg-5 ps-lg-5 text-center">
                            <h2 class="section-title mb-4">Available in <strong>LIGHT & DARK</strong> shade</h2>
                            <h2 class="section-title mb-4">Available <strong>2 Qualities</strong></h2>
                            <img src="{{ asset('layouts/img/protector_icons-removebg-preview.png') }}"
                                class="img-fluid ps-0 my-4">
                        </div>
                        @foreach ($protector as $item)
                        <div class="col-12 col-lg-3 mb-5 mb-md-0" style="margin-top:15px;">
                            <a class="product-item" href="">
                                <img src="{{ asset('storage/images/' . $item->image1) }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $item->product }}</h3>
                                <span class="icon-cross protector_id" value="{{ $item->id }}">
                                    <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Product Section -->
        </div>
    </div>
@endsection
@section('script')
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

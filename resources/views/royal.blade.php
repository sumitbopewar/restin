@extends('layouts.app')

@section('style')
    <style>
        .hero {
            height: 20rem;
            background: url('../../layouts/img/New_Royale Header (1).png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .row-cols-lg-2 img {
            width: 50px;
            height: 50px;
        }

        .row-cols-lg-2 p {
            font-size: 15px;
        }

        .why-choose-section {
            padding: 1rem;
            text-align: justify;
        }

        .icon img {
            /* mix-blend-mode: ; */
            width: 50px;
            height: 50px;
        }

        .product-section {
            padding: 0px;
            padding-bottom: 2rem;
        }
    </style>
@endsection
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt fw-bold">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center mt-5 mb-4 wow fadeInUp">
                    <img src="layouts/img/Horizontal-Line-PNG.png" style="height: 20px;width: 20%;">
                    <br>Do you remember the last time you woke up in a luxury hotel room.<br>That feeling of pure
                    relaxation. Refreshed, energized and so<br>
                    comfortable that you didn’t want to get out of bed.<br> Now imagine that feeling every day in your own
                    home.<br>
                    <b>The Restin Royale Premium Mattress</b> is an opportunity for you to<br> take home that feeling you
                    get when staying at a 5* Hotel.<br>
                    <img src="layouts/img/Horizontal-Line-PNG.png" style="height: 20px;width: 20%;">
                </p>
            </div>
        </div>

        <div class="why-choose-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-12 mb-4">
                        <h2 class="section-title">Restin Introduce: The Royale Series Mattresses</h2>
                        <p>Restin introduces Royale series of luxury mattresses because you should enjoy the necessary
                            luxury of a sumptuous, sensuously comfortable bed at home. We also customise mattress based on
                            your individual requirements and preferences. Now Losing sleep needn't be anything to lose sleep
                            over.</p>
                        <div class="row my-5">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="feature">
                                    <div class="icon">
                                        <img src="{{ asset('layouts/img/Zero Sinking.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <h3>Zero Sinking</h3>
                                    <p>The structure of the mattress is designed to ensure proper body support while
                                        sleeping ensuring that you
                                        have Zero Sinking feeling even after prolonged use.</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="feature">
                                    <div class="icon">
                                        <img src="{{ asset('layouts/img/Zero Gap.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <h3>Zero Gap</h3>
                                    <p>The structured layers of different components are assembled is a manner to prevent
                                        gap in the mattress and
                                        ensuring proper support to in a manner all the curves in the body.</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="feature">
                                    <div class="icon">
                                        <img src="{{ asset('layouts/img/Zero Motion.png') }}" class="img-fluid">
                                    </div>
                                    <h3>Zero Motion</h3>
                                    <p>The inner springs in the mattress are independent of each other - they offer
                                        individual support, providing
                                        greater comfort, so there is less tossing and turning there by eliminating the
                                        discomfort to the other sleeping partner.</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="feature">
                                    <div class="icon">
                                        <img src="{{ asset('layouts/img/Zero Noise.png') }}" alt="Image"
                                            class="imf-fluid">
                                    </div>
                                    <h3>Zero Noise</h3>
                                    <p>The mattress are layered in a proper designed manner to ensure zero noise caused by
                                        rubbing of the inner material together.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="product-section">
        <div class="container">
            <div class="row">
                @foreach ($royal as $item)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="">
                        <img src="{{ asset('layouts/img/' . $item->image) }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{ $item->product }}</h3>

                        <span class="icon-cross product_id" value="{{ $item->id }}">
                            <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    @endsection

    @section('script')
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

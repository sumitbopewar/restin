@extends('layouts.app')
<style>
    .zoom-container {
        position: relative;
        overflow: hidden;
    }

    .zoomed-image {
        position: absolute;
        top: 0;
        left: 100%;
        opacity: 0;
        transform: scale(1.5);
        transition: opacity 0.3s, transform 0.3s;
    }

    .caro-img:hover .zoomed-image {
        opacity: 1;
        left: 0;
        transform: scale(1);
    }

    .home_mattress_head {
        margin-top: 4rem;
        background-image: url('{{ asset('/layouts/img/murron bg.png') }}');
        background-size: cover;
        background-repeat: no-repeat;

        padding: 73px !important;
        color: white;
        font-size: 3rem;
    }

    .royal_head {
        color: #f3e37d;
        font-family: 'Noto Serif Khojki', serif !important;
    }
</style>

@section('content')
    <h2 class=" text-center home_mattress_head text-dark" style="background-image: url('https://restin.in/layouts/img/New_Royale Header (1).png');background-size: 100% 100%;height: 420px;">  </h2>


    <div class="main_card container" style=" margin-top: 1rem;">
        <div class="product-card " style="position:relative;">

            <!--<img src="{{ asset('layouts/img/ortho logo.png') }}" class="collection_tag"-->
            <!--    style="position: absolute;left: -58px;transform:none;width:100px;z-index:999;" alt="collection"-->
            <!--    srcset="">-->

            <!--<img src="{{ asset('layouts/img/7 year.png') }}" class=""-->
            <!--    style="position: absolute;left: -58px;top:177px;transform:none;width:100px;z-index:999;" alt="collection"-->
            <!--    srcset="">-->

            <!--<img src="{{ asset('layouts/img/comfort meter.png') }}" class=""-->
            <!--    style="position: absolute;left: -58px;top:328px;transform:none;width:100px;z-index:999;" alt="collection"-->
            <!--    srcset="">-->

            <div id="carouselExampleRide" class="carousel slide _slider" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $royal_mattress->image) }}" class="d-block w-100 car-img"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $royal_mattress->image) }}" alt="Zoomed Image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $royal_mattress->img2) }}" class="d-block w-100 car-img"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $royal_mattress->img2) }}" alt="Zoomed Image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item caro-img">
                        <img src="{{ asset('storage/images/' . $royal_mattress->img3) }}" class="d-block w-100 car-img"
                            alt="...">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="asdf">
                    <img src="{{ asset('storage/images/' . $royal_mattress->image) }}"
                        class="d-block target-img active block_img" alt="..." data-bs-target="#carouselExampleRide"
                        data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                    <img src="{{ asset('storage/images/' . $royal_mattress->img2) }}" class="d-block target-img block_img"
                        alt="..." type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
                        aria-label="Slide 2">
                    <img src="{{ asset('storage/images/' . $royal_mattress->img3) }}" class="d-block target-img block_img"
                        alt="..." data-bs-target="#carouselExampleRide" data-bs-slide-to="2" aria-label="Slide 3">
                </div>

            </div>

            <div class="_content">
                <form action="/cart_data" method="POST">
                    @csrf

                    @if (auth()->check())
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endif

                    <input type="hidden" name="image" value="{{ $royal_mattress->image }}">
                    <input type="hidden" name="product" value="{{ $royal_mattress->product }}">


                    <h2 class="product-title fw-bold">{{ $royal_mattress->product }}</h2>
                    {{-- product price --}}

                    <h3 class="fw-bold price" id="price"> </h3>

                    {{-- about this item  --}}
                    <p>{{ $royal_mattress->about }} </p>
                    <div class="card-input">

                        <div class="btns inpt ">
                            @foreach ($master_size as $size)
                                <div class="button">
                                    <input type="radio" class="master_size" name="master_size_id"
                                        value="{{ $size->id }}" required/>
                                    <label class="btn btn-default" for="master_size">{{ $size->size_name }}</label>
                                </div>
                            @endforeach


                        </div>
                        <br>

                        <div class="inpt dorpp">
                            <select class="form-select unit_id" aria-label="Default select example" name="unit_id"
                                id="exampleFormControlInput1" data-product-id="{{ $royal_mattress->product }}" required>
                                <option value="">Select Unit</option>
                            </select>
                        </div>

                        <div class="inpt">
                            <label for="product_size" class="form-label">Size</label>
                            <select class="form-select product_size" aria-label="Default select example"
                                id="product_size" name="Size_id" data-product-name="{{ $royal_mattress->product }}" required>
                                <option value="">Select Size</option>

                            </select>
                        </div>

                        <div class="inpt">
                            <label for="thickness_id" class="form-label">Thickness</label>
                            <select class="form-select " aria-label="Default select example" name="thickness_id"
                                id="thickness_id" required>
                                <option value="">Select Thickness</option>

                            </select>
                        </div>

                        <div class="quantity-section card-input inpt">
                            <button type="button" class="decrement-btn btn btn-outline-secondary">-</button>
                            <input type="text" class="quantity-input" name="quantity" value="1"
                                min="1" />
                            <button type="button" class="increment-btn btn btn-outline-secondary">+</button>
                        </div>


                        <div class="purchase-info inpt">
                            @if(Auth::check())
                            <button type="submit" class="btn btn-primary">
                                Add to Cart <i class="fas fa-shopping-cart"></i>
                            </button>
                            @else
                            <a href="{{route('login')}}">
                                <button type="button" class="btn btn-primary">
                                Add to Cart <i class="fas fa-shopping-cart text-white fs-5 p-0"></i>
                               </button>
                            </a>
                            @endif
                        </div>
                    </div>

                </form>


            </div>


        </div>


    </div>


    <script>
        $(document).ready(function() {
            let mid;
            let thick_id;
            let size_id;
            let p_name;

            $('.master_size').click(function() {
                mid = $(this).val();
                
                 if (mid == 6) {
                    window.open('https://wa.me/917755918227', '_blank');
                }


                $.ajax({
                    url: '/royal_unit',
                    type: 'GET',
                    data: {
                        'mid': mid,
                    },
                    success: function(result) {
                        var unitSelect = $('.unit_id');

                        unitSelect.empty();
                        unitSelect.append('<option value="">Select Unit</option>');

                        $.each(result, function(key, value) {
                            unitSelect.append('<option value="' + value.id + '">' +
                                value.unit + '</option>');
                        });
                    },


                });

            });


            $('.unit_id').change(function() {
                let uid = $(this).val();
                let pname = $(this).attr('data-product-id');

                // console.log(mid);
                // console.log(pname);

                $.ajax({
                    url: '/royal_master_size',
                    type: 'GET',
                    data: {
                        'uid': uid,
                        'mid': mid,
                        'pname': pname,
                    },
                    dataType: 'json', // Response data type
                    success: function(result) {

                        // console.log(result);


                        var productSizeSelect = $('.product_size');

                        productSizeSelect.empty();
                        productSizeSelect.append('<option value="">Select Size</option>');

                        $.each(result, function(index, sizeArray) {
                            // sizeArray will be an array containing a single object
                            var size = sizeArray[0];

                            if (size.unit_id == 1) {
                                productSizeSelect.append('<option value="' + size.id +
                                    '">' + size.mm_length + ' * ' + size.mm_breath +
                                    '</option>');
                            } else {
                                productSizeSelect.append('<option value="' + size.id +
                                    '">' + size.inch_length + ' * ' + size
                                    .inch_breath +
                                    '</option>');
                            }
                        });


                    }
                });

            });

            $('.product_size').change(function() {
                let size_id = $(this).val();
                let p_name = $(this).attr('data-product-name');
                // console.log(size_id);
                // console.log(p_name);

                $.ajax({
                    url: '/royal_size_id',
                    type: 'GET',
                    data: {
                        'size_id': size_id,
                        'p_name': p_name,
                        '_': Date.now()
                    },
                    success: function(result) {
                        // console.log(result);

                        var select = $('#thickness_id');
                        select.empty();

                        if (result && result.hasOwnProperty('thickness')) {
                            var thicknesses = result['thickness'];

                            select.append('<option value="">Select Thickness</option>');

                            $.each(thicknesses, function(index, thickness) {
                                select.append('<option value="' + thickness.id +
                                    '">' + thickness.thickness +
                                    '</option>');
                            });
                        } else {
                            select.append('<option value="">Select Thickness</option>');
                        }
                    },


                });

            });

            $('#thickness_id').change(function() {
                let thick_id = $('#thickness_id').val();
                let size_id = $('.product_size').val();
                let p_name = $('.product_size').attr('data-product-name');

                // console.log(thick_id);
                // console.log(size_id);
                // console.log(p_name);

                $.ajax({
                    url: '/royal_price',
                    type: 'GET',
                    data: {
                        'size_id': size_id,
                        'p_name': p_name,
                        'thick_id': thick_id,

                    },
                    success: function(result) {
                        // console.log(result);

                        if (result.length > 0) {
                            var firstObject = result[0];

                            if (firstObject.hasOwnProperty('price') && firstObject.price !==
                                null) {

                                let currentPriceString = firstObject.price;
                                let currentPriceWithoutCommas = currentPriceString.replace(
                                    /,/g, '');
                                let currentPrice = parseFloat(currentPriceWithoutCommas);
                                let discountPercentage = 15;
                                    let discount = currentPrice - (currentPrice * (
                                        discountPercentage /
                                        100));
                                    let discountedPrice = parseInt(discount)

                                // console.log(discountedPrice);

                                let formattedDiscountedPrice = discountedPrice
                                    .toLocaleString('en-IN', {
                                        style: 'currency',
                                        currency: 'INR'
                                    });

                                // console.log(formattedDiscountedPrice);

                                let discountedPriceHTML = formattedDiscountedPrice;



                                $('#price').empty();
                                $('#price').append(
                                    '<input type="hidden" name="price" value="' +
                                    discountedPrice +
                                    '"><input type="hidden" name="royal_id" value="' +
                                    firstObject
                                    .id +
                                    '"><i class="fa-solid fa-indian-rupee-sign fs-6 pe-1 text-danger"></i><span class="fs-4 text-decoration-line-through text-danger get_price">' +
                                    firstObject.price +
                                    '</span> <span class="px-3 new_price" style="color:#0075bc;">' +
                                    discountedPriceHTML +
                                    '</span><span class="fs-6 text-success">15% off</span>'

                                );

                            } else {
                                $('#price').empty();
                                $('#price').append('');
                                console.log(
                                    'Price is not valid or not present in the result object.'
                                );
                            }
                        } else {
                            $('#price').empty();
                            $('#price').append('');
                            console.log('Result array is empty.');
                        }
                    },


                });

            });

        });




        document.addEventListener("DOMContentLoaded", () => {
            const quantityInput = document.querySelector(".quantity-input");
            const incrementBtn = document.querySelector(".increment-btn");
            const decrementBtn = document.querySelector(".decrement-btn");

            incrementBtn.addEventListener("click", () => {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });

            decrementBtn.addEventListener("click", () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 0) {
                    quantityInput.value = currentValue - 1;
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".zoom-container").mousemove(function(e) {
                const $container = $(this);
                const $zoomedImage = $container.find(".zoomed-image");
                const containerWidth = $container.width();
                const containerHeight = $container.height();
                const imageWidth = $zoomedImage.width();
                const imageHeight = $zoomedImage.height();

                const mouseX = e.pageX - $container.offset().left;
                const mouseY = e.pageY - $container.offset().top;

                const moveX = (mouseX / containerWidth) * (imageWidth - containerWidth);
                const moveY = (mouseY / containerHeight) * (imageHeight - containerHeight);

                $zoomedImage.css({
                    left: -moveX + "px",
                    top: -moveY + "px"
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

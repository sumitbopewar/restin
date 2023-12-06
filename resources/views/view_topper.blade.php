@extends('layouts.app')

<style>
    /* Add this CSS to your stylesheet */
    .zoom-container {
        position: relative;
        overflow: hidden;
    }

    .zoomed-image {
        position: absolute;
        top: 0;
        left: 100%;
        /* Initially, place it outside the container */
        opacity: 0;
        transform: scale(1.5);
        /* Adjust the zoom level as needed */
        transition: opacity 0.3s, transform 0.3s;
    }

    .caro-img:hover .zoomed-image {
        opacity: 1;
        left: 0;
        /* Move it inside the container */
        transform: scale(1);
    }
</style>

@section('content')
    <div class="main_card container">
        <div class="product-card " style="position:relative;">
            <div id="carouselExampleRide" class="carousel slide _slider" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $topper_detail->image1) }}" class="d-block w-100 car-img"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $topper_detail->image1) }}" alt="Zoomed Image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $topper_detail->image2) }}" class="d-block w-100 car-img"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $topper_detail->image2) }}" alt="Zoomed Image">
                            </div>
                        </div>
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
                    <img src="{{ asset('storage/images/' . $topper_detail->image1) }}"
                        class="d-block target-img active block_img" alt="..." data-bs-target="#carouselExampleRide"
                        data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                    <img src="{{ asset('storage/images/' . $topper_detail->image2) }}" class="d-block target-img block_img"
                        alt="..." type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
                        aria-label="Slide 2">
                </div>

            </div>

            <div class="_content mt-5 mt-lg-0 mt-md-0 pt-5 pt-lg-0 pt-md-0">

                <form action="/cart_data" method="POST">
                    @csrf
                    @if (auth()->check())
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endif
                    <input type="hidden" name="image" value="">
                    <input type="hidden" name="product" value="">

                    <h2 class="product-title fw-bold">{{$topper_detail->product}}</h2>
                    {{-- product price --}}
                    <h3 class="fw-bold fs-5 price"  style="color:#0075bc;" id="price"> </h3>
                    {{-- <div>
                            <span class="px-3 new-price" style="color:#0075bc;"><i
                                    class="fa-solid fa-indian-rupee-sign fs-5 pe-2"></i></span>
                            <span class="fs-6 text-success">15% off</span>
                        </div> --}}



                    <div class="card-input">
                        
                        <div class="inpt">
                            <label for="topper_category" class="form-label">Category</label>
                            <select class="form-select topper_category" aria-label="Default select example"
                                id="topper_category" name="topper_category" data-product-name="" required>
                                <option value="">Select Category</option>
                                <option value="Premium">Premium</option>
                                <option value="Memory">Memory</option>
                            </select>
                        </div>
                        
                        <!--<div class="inpt dorpp">-->
                        <!--    <label for="unit_id" class="form-label">Unit</label>-->
                        <!--    <select class="form-select unit_id" aria-label="Default select example" name="unit_id"-->
                        <!--        id="exampleFormControlInput1" data-product-id="" required>-->
                        <!--        <option value="" >Select Unit</option>-->
                                
                        <!--    </select>-->
                        <!--</div>-->

                        <div class="inpt">
                            <label for="topper_size" class="form-label">Size</label>
                            <select class="form-select topper_size" aria-label="Default select example"
                                id="topper_size" name="size_id" data-product-name="" required>
                                <option value="">Select Size</option>
                            </select>
                        </div>

                        <div class="quantity-section card-input inpt">
                            <button type="button" class="decrement-btn btn btn-outline-secondary">-</button>
                            <input type="text" name="quantity" class="quantity-input" value="1"
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
            
             
            $('.topper_category').change(function() {
                let pcat = $(this).val();
                
                // console.log(pcat);

                $.ajax({
                    url: '/get_topper_category',
                    type: 'GET',
                    data: {
                        'pcat': pcat,
                    },
                    dataType: 'json', 
                    success: function(result) {
                        
                        // console.log(result);
                        
                        var productSizeSelect = $('.topper_size');

                        productSizeSelect.empty();
                        productSizeSelect.append('<option value="">Select Size</option>');

                       $.each(result, function(key, value) {
                                var optionValue = value[0].id;
                                var optionText = value[0].length + ' * ' + value[0].width; 
                                productSizeSelect.append('<option value="' + optionValue + '">' +
                                optionText + '</option><input type="hidden" name="unit_id" value="'+value[0].unit+
                                '"><input type="hidden" name="Size_id" value="'+optionValue+'">');
                            });
                        }
                });

            });
            
            $('.topper_size').change(function() {
                size_id = $(this).val();
                let pcat = $('.topper_category').val();
                // console.log(size_id);
                // console.log(pcat);

                $.ajax({
                    url: '/get_topper_size',
                    type: 'GET',
                    data: {
                        'size_id': size_id,
                        'pcat': pcat,
                    },
                    success: function(result) {
                        
                        // console.log(result);
                        
                        var priceSelect = $('#price');
                        priceSelect.empty();
                         
                        $.each(result, function(key, value) {
                             var formattedPrice = '₹' + value.price.toLocaleString('en-IN', {
                                style: 'currency',
                                currency: 'INR',
                                minimumFractionDigits: 0,
                                maximumFractionDigits: 0,
                                 useGrouping: true
                            });
                            priceSelect.append(''+formattedPrice+'<input type="hidden" name="product" value="'+value.product+
                            '"><input type="hidden" name="image" value="'+value.image1+'"><input type="hidden" name="price" value="'+value.price+
                            '"><input type="hidden" name="master_size_id" value="'+value.category+'"><input type="hidden" name="topper_id" value="'+value.id+'">');
                        });
                    },


                });

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

@endsection

@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    /* Add this CSS to your stylesheet */
    body{
        background: #fff !important;
    }
    .zoom-container {
        position: relative;
        overflow: hidden;
    }

    .car-img {
    width: 100%;
    height: 450px;
    object-fit: scale-down;
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
        /* Move it inside the container */
        transform: scale(1);
    }
    .collection_tag{
        position: absolute;
        left: -40px;
        transform:none;
        width: 95px;
        z-index:999;
    }
    .collection_tag_1{
        position: absolute;
        left: -40px;
        top: 145px;
        transform:none;
        width: 95px;
        z-index:999;
    }
    .collection_tag_2{
        position: absolute;
        left: -48px;
        transform:none;
        width: 95px;
        z-index:999;
        top: 255px;
    }
    @media screen and (max-width: 1400px){
            .collection_tag{
            width: 80px;
        }
            .collection_tag_1{
            top: 120px;
            width: 80px;
        }
            .collection_tag_2{
            width: 87px;
            top: 210px;
        }
    }
    @media screen and (max-width: 1200px){
            .collection_tag{
            width: 55px;
            top:55px;
        }
            .collection_tag_1{
            top: 120px;
            width: 55px;
        }
            .collection_tag_2{
                width: 62px;
                top: 188px;
        }
    }
    
    @media screen and (max-width: 1000px){
        .collection_main{
            display: flex!important;
            align-items: center!important;
            justify-content: space-between!important;
        }
        .collection_tag{
            height:75px;
            position: unset;
            width:unset;
        }
        .collection_tag_1{
            height:75px;
            position: unset;
            width:unset;
        }
        .collection_tag_2{
            height:50px;
            width:100px;
            position: unset;
        }
    }

</style>

<style>
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 16.25rem;
    left: 7%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: left;
}

.carousel-indicators {
  left: 100px !important;
}

.carousel-indicators .active {
  opacity: 1;
  background-color: red;
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

:active,
:hover,
:focus {
outline: 0 !important;
outline-offset: 0;
}

a,
a:hover {
text-decoration: none;
}


  /* Guide to Good Sleep Section */
h4{
  font-weight: 550;
}
.p1 {
  margin-top: 50px;
  font-size: large;
  line-height: 2;
  width: 100%;
}

.p {
  font-size: large;
  line-height: 2;
  width: 50%;
}
.img-fluid{
  padding-left: 30px;
}

/* view product  */

._slider {
  width: 60%;
  height: 50%
}

.asdf {
  display: flex;
  margin: auto;
  /* justify-content: space-between; */
  justify-content: center;
  flex-wrap: wrap;
}

.block_img {
  height: 100px;
  width: 132px;
}


.target-img {
  margin: 3px;
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.img_btn {
  border: none;
}

.product-card {
  display: flex;
  justify-content: space-between;
  width: 90%;
  /*height: 70%;*/
  margin: auto;
  padding-top: 2rem;
}

.main_card {
  border: 1px solid rgba(0, 0, 0, .125);
  margin-top: 8rem;
  margin-bottom: 4rem;
  width: 90%;
}

._content {
  width: 35%;
  height: 100%;
}

.inpt {
  margin-bottom: 1.3rem;
}

.car-img {
  width: 100%;
  height: 450px;
  object-fit: scale-down;
}

.quantity-section {
  display: flex;
  align-items: center;
  border: 0.5px solid white;

  font-size: 2rem;
  background-color: white;

}

.quantity-input {
  width: 70px;
  text-align: center;
  border: none;
  font-size: 2rem;
}

.foot {
  display: flex;
  justify-content: space-around;
  margin-top: 10px;
  margin-bottom: 10px;
  flex-wrap: wrap;
}

.sz-btn {
  margin: 1px;
}

.button {
  float: left;
  margin: 0 2px 0 0;
  width: 79px;
  height: 40px;
  position: relative;
  margin-bottom: 1.3rem;
}

.button label,
.button input {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.button input[type="radio"] {
  opacity: 0.011;
  z-index: 100;
}

.button input[type="radio"]:checked+label {
  background: #0075bc;
  border-radius: 4px;
  color: white;
}



.button {
  border: 2px solid #0075bc;
  border-radius: .5rem;
}

.button label {
  cursor: pointer;
  z-index: 90;
  line-height: 1.5em;
  font-weight: 500;
}

@media screen and (max-width: 1000px) {
  .product-card {
      display: block;
  }

  ._slider {
      width: 100%;
  }

  .content {
      width: 100%;
  }

  .car-img {
      width: 100%;
      height: 340px;
      object-fit: scale-down;
  }

  .block_img {
      height: 59px;
      width: 91px;
  }

  ._content {
      width: 100%;
      height: 100%;
  }

  .product-card {
      padding-top: 0px;
  }

  .button {
      float: left;
      margin: 0 2px 0 0;
      width: 70px;
      height: 40px;
      position: relative;
      margin-bottom: 1.3rem;
  }
}
.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -webkit-padding-start: calc(0.75rem - 3px);
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #454546;
  background-color: white;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 2px solid #0075bc;
  border-radius: 0.25rem;
  /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}


.form-select:focus {
  box-shadow: none;
}

.form-control {
  border: 2px solid #0075bc;
}

.form-control:focus {
  color: #454546;
  background-color: #fff;
  /*border-color: #86b7fe; */
  outline: 0;
  box-shadow: none;
  font-weight: 600;
}

.carousel-control-prev {
  display: none;
}

.carousel-control-next {
  display: none;
}

.form-label {
  margin-bottom: 0px;
  font-size: 0.9rem;
}

.form-label {
  margin-bottom: 0px;
  font-size: 0.8rem;
  color: #0070b4;
  font-weight: 600;
}        

/* view product end */
.img_res{
    height:420px!important;
    background-size:100% 100%;
}
@media screen and (max-width: 600px){
        .img_res{
        background-size:100% 100%;
        height:170px!important;
        padding:0px!important;
        font-size: 35px;
    }
}
.fixed-icon {
    position: fixed!important;
    bottom: 20px!important;
    right: 20px!important;
    background-color: green!important;
    padding: 7px 14px!important;
    border-radius: 50px!important;
    z-index: 999999!important;
}

.btn-check:focus+.btn, .btn:focus {
    outline: 0!important;
    box-shadow: none!important;
}
/* .btns .btn {
    text-align: center;
    padding: 0px;
    border-radius: 30px;
    color: #000;
    background: #fff;
    border-color: none;
} */
    .show_morediv{
        margin-top: 3rem;
        margin-bottom: 1rem;
    }

@media screen and (max-width: 600px) {
    .carousel {
        margin-top: 4.5rem;
    }

    h1 {
        font-size: 1.5rem;
        font-weight: 900;
        margin-bottom: 0rem;
        font: bold;
    }

    .hero_slider .carousel-caption {
        text-align: left;
        top: 30%;
        left: 64%;
        right: 80%;
        font: bold;
        font-weight: 500;
        bottom: 0;
        right: 0;
        transform: translate(-75%, -35%);
        max-width: 1320px;
    }

    .buynow {
       margin-top: 0.5rem !important;
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
        font-size: 0.7rem;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .cart-container{
        padding: 0px;
    }
    
    #home{
        margin-top: 59px;
        height: 269px;
    }
    
    .carousel-indicators {
     left: 0px !important; 
    }
    
    .caro-img{
     height: 267px;
    }
    
    
}


.icon_section {
    margin: auto;
}

@media screen and (max-width: 590px) {
   

    .icon-title {
        font-weight: 700;
        margin-bottom: 32px;
        font-size:10px;
    }

    .icon-img {
        margin-top: 0px;
        width: 130px;
    }
    
    .product_btns{
        margin: 5px;
    }
}

        .product_btns{
                color: #333;
                background-color: #c2eaff;
                border-color: #c2eaff;
                font-weight: 600;
        }
        
        .product_btns.active{
                color: #333;
                background-color: #c2eaff;
                border-color: #c2eaff;
                font-weight: 600;
        }
        
        .product_btns:hover{
                color: #333;
                background-color: #c2eaff;
                border-color: #c2eaff;
                font-weight: 600;
        }
        
        .product_btns.active:focus{
                box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 50%)
        }
/*home page css*/
/*footer page css */


.social{
            margin-right: 10px;
        }
/*footer page css */

/*guide to good sleep */
    
    /* *{
        font-family: 'Lato', sans-serif;
    } */
    
    .para-img{
        object-fit: contain;
    }
    
    @media screen and (min-width: 1400px) {
      .bottom_div{
            margin-top: -27px;
      }
    }
/*guide to good sleep */



.btns .button .btn{
   
    font-weight: 100;
     padding: 6px 12px; 
     border-radius: 0px; 
     border:0!important;
     color: black; 
     background: none; 
     border-color: blue!important; 

}


</style>

@section('content')
    <div class="main_card container">
        <div class="product-card " style="position:relative;">
            <div class="collection_main">
                <img src="{{ asset('storage/images/' . $home_mattress->img4) }}" class="collection_tag mt-2"  alt="collection" srcset="">
                <img src="layouts/img/guarantee.png" class="collection_tag_1 mt-2"  alt="collection" srcset="">
                <img src="layouts/img/free_shipping.png" class="collection_tag_2 mt-2"  alt="collection" srcset="">
            </div>
            <!--<img src="{{ asset('layouts/img/' . $home_mattress->img4) }}" class=""-->
            <!--    style="position: absolute;left: -58px;top:177px;transform:none;width:100px;z-index:999;" alt="collection"-->
            <!--    srcset="">-->



            <div id="carouselExampleRide" class="carousel slide _slider" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $home_mattress->image) }}" class="d-block w-100 car-img"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $home_mattress->image) }}" alt="Zoomed Image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item caro-img">
                        <div class="zoom-container">
                            <img src="{{ asset('storage/images/' . $home_mattress->img2) }}" class="d-block w-100 car-img simg"
                                alt="...">
                            <div class="zoomed-image">
                                <img src="{{ asset('storage/images/' . $home_mattress->img2) }}" alt="Zoomed Image simg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item caro-img">
                        <img src="{{ asset('storage/images/' . $home_mattress->img3) }}" class="d-block w-100 car-img simg"
                            alt="...">
                    </div>
                    <div class="carousel-item caro-img">
                        <img src="{{ asset('layouts/img/how_to_choose.jpg') }}" class="d-block w-100 car-img simg"
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
                    <img src="{{ asset('storage/images/' . $home_mattress->image) }}"
                        class="d-block target-img active block_img" alt="..." data-bs-target="#carouselExampleRide"
                        data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                    <img src="{{ asset('storage/images/' . $home_mattress->img2) }}" class="d-block target-img block_img"
                        alt="..." type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
                        aria-label="Slide 2">
                    <img src="{{ asset('storage/images/' . $home_mattress->img3) }}" class="d-block target-img block_img"
                        alt="..." data-bs-target="#carouselExampleRide" data-bs-slide-to="2" aria-label="Slide 3">
                    <img src="{{ asset('layouts/img/how_to_choose.jpg') }}" class="d-block target-img block_img"
                        alt="..." data-bs-target="#carouselExampleRide" data-bs-slide-to="3" aria-label="Slide 4">
                </div>

            </div>

            <div class="_content mt-5 mt-lg-0 mt-md-0 pt-5 pt-lg-0 pt-md-0">

                <form action="/cart_data" method="POST">
                    @csrf
                    @if (auth()->check())
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endif
                    <input type="hidden" name="image" value="{{ $home_mattress->image }}">
                    <input type="hidden" name="product" value="{{ $home_mattress->product }}">

                    <h2 class="product-title fw-bold">{{ $home_mattress->product }}</h2>
                    {{-- product price --}}
                    <h3 class="fw-bold fs-5 price" id="price"> </h3>
                    {{-- <div>
                            <span class="px-3 new-price" style="color:#0075bc;"><i
                                    class="fa-solid fa-indian-rupee-sign fs-5 pe-2"></i></span>
                            <span class="fs-6 text-success">15% off</span>
                        </div> --}}


                    {{-- about this item  --}}
                    <p>{{ $home_mattress->about }} </p>


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
                                id="exampleFormControlInput1" data-product-id="{{ $home_mattress->product }}" required>
                                <option value="" >Select Unit</option>
                            </select>
                        </div>

                        <div class="inpt">
                            <label for="product_size" class="form-label">Size</label>
                            <select class="form-select product_size" aria-label="Default select example"
                                id="product_size" name="Size_id" data-product-name="{{ $home_mattress->product }}" required>
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
            let mid;
            let thick_id;

            $('.master_size').click(function() {
                mid = $(this).val();
                // console.log(mid);
                if (mid == 6) {
                    window.open('https://wa.me/917755918227', '_blank');
                }

                $.ajax({
                    url: '/get_unit',
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
                    url: '/get_master_size',
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
                    url: '/get_size_id',
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

                // Get the #price element
                const priceElement = $('#price');

                // Check if the #price element exists
                if (priceElement.length) {
                    $.ajax({
                        url: '/get_price',
                        type: 'GET',
                        data: {
                            'size_id': size_id,
                            'p_name': p_name,
                            'thick_id': thick_id,
                        },
                        success: function(result) {
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
                                    // console.log(priceElement);

                                    let formattedDiscountedPrice = discountedPrice
                                        .toLocaleString('en-IN', {
                                            style: 'currency',
                                            currency: 'INR'
                                        });

                                    // console.log(formattedDiscountedPrice);

                                    let discountedPriceHTML = formattedDiscountedPrice;



                                    priceElement.empty();
                                    priceElement.append(
                                        '<input type="hidden" name="price" value="' +
                                        discountedPrice +
                                        '"><input type="hidden" name="home_id" value="' +
                                        firstObject
                                        .id +
                                        '"><i class="fa-solid fa-indian-rupee-sign fs-6 pe-1 text-danger"></i><span class=" text-decoration-line-through text-danger get_price">' +
                                        firstObject.price +
                                        '</span> <span class="px-3 new_price" style="color:#0075bc;">' +
                                        discountedPriceHTML +
                                        '</span><span class="fs-6 text-success">15% off</span>'

                                    );
                                } else {
                                    priceElement.empty();
                                    priceElement.append('');
                                    console.log(
                                        'Price is not valid or not present in the result object.'
                                    );
                                }
                            } else {
                                priceElement.empty();
                                priceElement.append('');
                                console.log('Result array is empty.');
                            }

                        },
                    });
                } else {
                    console.log('#price element not found in the DOM');
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

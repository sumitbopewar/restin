 @extends('layouts.app')




@section('content')
    <style>
        .container-fluid .card {
            width: 100%;
            border: 0px;
            border-radius: 0px white;
        }

        .card-title {
            font-weight: 700;
            color: black;
            display: inline-flex;

        }

        .card-text a {
            color: black;
            font-weight: 500;
        }



        .bg {
            background-color: #deeefa;
        }

        .icon-img1 {
            margin-top: 50px;
            width: 100px;

        }

        .card-img-overlay {
            position: absolute;
            top: 90px !important;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            border-radius: calc(.25rem - 1px);
        }

        .icon-text {
            margin-top: 10px;
        }
    </style>



    <div class="d-flex justify-content-center align-items-center"
        style="background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');height: 400px;
    background-size: cover;">
        <div class="">
            <h2 class="fw-bold text-white">Cart</h2>
            <p class="card-text text-white"><a href="" class="fw-bold text-white">Home > </a><a href=""
                    class="fw-bold text-white">Cart</a></p>

        </div>
    </div>
@if (count($cartItems) === 0)
    <div class="d-flex justify-content-center m-5">
        <img src="{{asset('layouts/img/cartEmpty.png')}}" alt="emptyCart">
    </div>
    
@else
  <div class="container">
        <form method="POST" id="order-form">
            @csrf
            <input type="hidden" name="" value="">

            <?php
            $totalQuantity = 0;
            $totalPrice = 0;
            $user = DB::table('users')
                ->select('pin', 'address')
                ->where('id', $userId)
                ->get();
            ?>

            <div class="row justify-content-evenly">

                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    @if (session('delete'))
                        <div class="alert alert-danger mt-3">
                            {{ session('delete') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('payment'))
                        <div class="alert alert-success mt-3">
                            {{ session('payment') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-warning mt-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="fs-2 my-4 pb-2" style="border-bottom: 2px solid;color:#0075bc;">Your Cart
                        <span id="total-quantity">( {{ count($cartItems) }} )</span>
                    </div>

                    @foreach ($cartItems as $item)
                        <?php
                        $totalQuantity += $item->quantity;
                        
                        $itemPrice = floatval(str_replace(',', '', $item->price));
                        
                        $itemTotalPrice = $item->quantity * $itemPrice;
                        $totalPrice += $itemTotalPrice;
                        ?>
                        <div class="d-flex justify-content-between my-4 item-row" data-item-id="{{ $item->id }}"
                            data-item-price="{{ $itemPrice }}">
                            <img src="{{ asset('storage/images/' . $item->image) }}" class="rounded" style="width: 100px;"
                                alt="photo">
                            <div>
                                <div class="fs-4 my-2" style="color:#0075bc;">{{ $item->product }}</div>
                                <input type="hidden" class="product_name" name="product_name[]"
                                    value="{{ $item->product }}">
                                <input type="hidden" class="image" name="image[]" value="{{ $item->image }}">
                                <?php
                                
                                $master_size = DB::table('master_sizes')
                                    ->select('size_name', 'id')
                                    ->where('id', $item->master_size_id)
                                    ->first();
                                
                                $size_mm = DB::table('size_m_m_s')
                                    ->select('mm_length', 'mm_breath')
                                    ->where('id', $item->Size_id)
                                    ->where('unit_id', $item->unit_id)
                                    ->first();
                               
                                
                                $size_inch = DB::table('size_inches')
                                    ->select('inch_length', 'inch_breath')
                                    ->where('id', $item->Size_id)
                                    ->where('unit_id', $item->unit_id)
                                    ->first();
                                
                                $thickness = DB::table('thicknesses')
                                    ->select('thickness', 'id')
                                    ->where('id', $item->thickness_id)
                                    ->first();
                                    
                                $pillow = DB::table('pillows')
                                    ->select('category', 'id')
                                    ->where('id', $item->pillow_id)
                                    ->first();
                                   
                                    
                                $pillow_inch = DB::table('size_pillows')
                                    ->select('size_length', 'size_breadth')
                                    ->where('id', $item->Size_id)
                                    ->where('unit', $item->unit_id)
                                    ->first();
                                    
                                $pillow_mm = DB::table('size__pillows__m_m_s')
                                    ->select('size_length_mm', 'size_breadth_mm')
                                    ->where('id', $item->Size_id)
                                    ->where('unit', $item->unit_id)
                                    ->first();
                                    
                                $protector = DB::table('protectors')
                                    ->select('category', 'id')
                                    ->where('id', $item->protector_id)
                                    ->where('category', $item->master_size_id)
                                    ->first();
                                    
                                $protector_size = DB::table('size_protectors')
                                    ->select('length', 'width')
                                    ->where('id', $item->Size_id)
                                    ->first();
                                    
                                $topper = DB::table('toppers')
                                    ->select('category', 'id')
                                    ->where('id', $item->topper_id)
                                    ->where('category', $item->master_size_id)
                                    ->first();    
                                    
                                ?>
                                @if ($master_size && $thickness)
                                    <div>
                                        <input type="hidden" class="master_size_id" name="master_size_id[]"
                                            value="{{ $master_size->id }}">
                                        {{ $master_size->size_name }} |
                                        @if (isset($size_mm->mm_length) && isset($size_mm->mm_breath))
                                            {{ $size_mm->mm_length }} x {{ $size_mm->mm_breath }} mm
                                        @endif
                                        @if (isset($size_inch->inch_length) && isset($size_inch->inch_breath))
                                             {{ $size_inch->inch_length }} x {{ $size_inch->inch_breath }} Inches
                                        @endif
                                        x {{ $thickness->thickness }}
                                        <input type="hidden" class="thickness_id" name="thickness_id[]"
                                            value="{{ $thickness->id }}">
                                    </div>
                                
                                @elseif($pillow)  
                                    <div>
                                        <input type="hidden" class="master_size_id" name="master_size_id[]"
                                            value="{{ $pillow->category }}">
                                        {{ $pillow->category }} |
                                        @if (isset($pillow_mm->size_length_mm) && isset($pillow_mm->size_breadth_mm))
                                            {{ $pillow_mm->size_length_mm }} x {{ $pillow_mm->size_breadth_mm }} mm
                                        @endif
                                        @if (isset($pillow_inch->size_length) && isset($pillow_inch->size_breadth))
                                           {{ $pillow_inch->size_length }} x {{ $pillow_inch->size_breadth }} Inches
                                        @endif
                                       <input type="hidden" class="thickness_id" name="thickness_id[]"
                                            value="Null">
                                    </div>
                                @elseif($protector)  
                                <div>
                                    <input type="hidden" class="master_size_id" name="master_size_id[]"
                                        value="{{ $protector->category }}">
                                    {{ $protector->category }} |
                                    @if (isset($protector_size->length) && isset($protector_size->width))
                                        {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                    @endif
                                   
                                   <input type="hidden" class="thickness_id" name="thickness_id[]"
                                        value="Null">
                                </div>
                                @elseif($topper)  
                                <div>
                                    <input type="hidden" class="master_size_id" name="master_size_id[]"
                                        value="{{ $topper->category }}">
                                    {{ $topper->category }} |
                                    @if (isset($protector_size->length) && isset($protector_size->width))
                                        {{ $protector_size->length }} x {{ $protector_size->width }} Inches
                                    @endif
                                   
                                   <input type="hidden" class="thickness_id" name="thickness_id[]"
                                        value="Null">
                                </div>
                                @endif
                            </div>
                            <div class="align-self-center"><a href="{{ url('cart_item/delete/' . $item->id) }}"
                                    class="" onclick="alert('Remove this cart item');"><i
                                        class="fa-regular fa-trash-can fs-5"></i></a></div>
                        </div>
                        <div class="d-flex justify-content-between my-2 border-bottom">
                            <div>
                                <div>Quantity</div>
                                <div class="quantity-section card-input inpt">
                                    <button type="button" class="decrement-btn btn btn-outline-secondary">-</button>
                                    <input type="text" name="quantity[]" class="quantity-input quantity"
                                        value="{{ $item->quantity }}" min="1" />
                                    <button type="button" class="increment-btn btn btn-outline-secondary">+</button>
                                </div>
                            </div>

                            <div class="align-self-center">
                                <input type="hidden" class="unit_id" name="unit_id[]" value="{{ $item->unit_id }}">
                                <input type="hidden" class="size_id" name="size_id[]" value="{{ $item->Size_id }}">
                                <input type="hidden" class="product_price" name="price[]" value="{{ $item->price }}">
                                <input type="hidden" class="home_id" name="home_id[]" value="{{ $item->home_id }}">
                                <input type="hidden" class="royal_id" name="royal_id[]" value="{{ $item->royal_id }}">
                                <input type="hidden" class="hospital_id" name="hospital_id[]"
                                    value="{{ $item->hospital_id }}">
                                <input type="hidden" class="hotel_id" name="hotel_id[]" value="{{ $item->hotel_id }}">
                                <input type="hidden" class="pillow_id" name="pillow_id[]"
                                    value="{{ $item->pillow_id }}">
                                <input type="hidden" class="protector_id" name="protector_id[]"
                                    value="{{ $item->protector_id }}">
                                <input type="hidden" class="topper_id" name="topper_id[]"
                                    value="{{ $item->topper_id }}">
                                <h4 class="fw-bold price" style="color:#0075bc;"><i
                                        class="fa-solid fa-indian-rupee-sign fs-5 pe-2"></i>{{ $item->price }} </h4>
                            </div>

                        </div>
                    @endforeach




                </div>


                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

                    <div class="fs-2 my-4 pb-2" style="border-bottom: 2px solid;color:#0075bc;">Order Summary </div>
                    <div class="d-flex justify-content-between my-2">

                        {{-- item value  --}}
                        <input type="hidden" name="items" class="items" value="{{ $totalQuantity }}">

                        <span class="fs-5">Price(<span id="total-quantitys">{{ $totalQuantity }}</span> Items)</span>
                        <span><span id="total-price">{{ number_format($totalPrice, 2) }}</span></span>

                    </div>
                    <div class="d-flex justify-content-between my-2 border-bottom pb-4">
                        <span class="fs-5">Shipping</span><span>Free</span>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <span class="fs-5">Total Amount</span><span class="fs-4 fw-bold" style="color:#0075bc;">
                            {{-- total price value  --}}
                            <input type="hidden" name="total_amount" id="total-inp-amount" class="total_amount" value="{{ $totalPrice }}">

                            <span id="total-amount">{{ number_format($totalPrice, 2) }}</span></span>
                    </div>

                    <div class="mt-3">
                        <span>Delivery Address:</span>
                        @foreach ($user as $userData)
                            <input type="number" name="pin_code" class="pin_code form-control rounded-0 my-2 border-1"
                                placeholder="Enter Pin Code" value="{{ $userData->pin }}">


                            <textarea type="text" name="delivery_address" class="delivery_address form-control rounded-0 border-1"
                                placeholder="Enter Address" cols="" rows="">{{ $userData->address }}</textarea>
                        @endforeach

                    </div>

                    <div class="d-flex mt-4">
                        <button type="button" name="payment_mode" value="COD"
                            class="btn-lg btn-danger rounded-0 w-50 my-3 me-4 btncod"> Cash On Delivery
                        </button>
                        <button type="button" name="payment_mode" value="ONLINE" data-totalValue="{{ $totalPrice }}"
                            class="btn-lg btn-danger rounded-0 w-50 my-3 ms-4 razorpay-payment-button btnpay"> Pay Online
                        </button>

                    </div>

                </div>

            </div>
        </form>
    </div>
@endif

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
   
    <script>
    $(document).on('click', '.btncod', function() {
            
             
              Swal.fire({
                title: 'Are you sure you want to go with cash on delivery!',
                icon: 'question',
                iconHtml: '?',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
              }).then((result) => {
                if (result.isConfirmed) {
                    
            
                        var ProPrice = $('#total-inp-amount').val();
                        var payment_mode = $(this).val();
                        var items = $('.items').val();
                        var total_amount = $('.total_amount').val();
                        var delivery_address = $('.delivery_address').val();
                        var pin_code = $('.pin_code').val();
            
                        var home_id = [];
                        $('.home_id').each(function() {
                            home_id.push($(this).val());
                        });
            
                        var royal_id = [];
                        $('.royal_id').each(function() {
                            royal_id.push($(this).val());
                        });
            
                        var hospital_id = [];
                        $('.hospital_id').each(function() {
                            hospital_id.push($(this).val());
                        });
            
                        var hotel_id = [];
                        $('.hotel_id').each(function() {
                            hotel_id.push($(this).val());
                        });
            
                        var pillow_id = [];
                        $('.pillow_id').each(function() {
                            pillow_id.push($(this).val());
                        });
            
                        var protector_id = [];
                        $('.protector_id').each(function() {
                            protector_id.push($(this).val());
                        });
            
                        var topper_id = [];
                        $('.topper_id').each(function() {
                            topper_id.push($(this).val());
                        });
            
                        var product_name = [];
                        $('.product_name').each(function() {
                            product_name.push($(this).val());
                        });
            
                        var master_size_id = [];
                        $('.master_size_id').each(function() {
                            master_size_id.push($(this).val());
                        });
            
                        var unit_id = [];
                        $('.unit_id').each(function() {
                            unit_id.push($(this).val());
                        });
            
                        var size_id = [];
                        $('.size_id').each(function() {
                            size_id.push($(this).val());
                        });
            
                        var thickness_id = [];
                        $('.thickness_id').each(function() {
                            thickness_id.push($(this).val());
                        });
            
                        var product_price = [];
                        $('.product_price').each(function() {
                            product_price.push($(this).val());
                        });
            
                        var quantity = [];
                        $('.quantity').each(function() {
                            quantity.push($(this).val());
                        });
            
                        var image = [];
                        $('.image').each(function() {
                            image.push($(this).val());
                        });
            
            
            
                        $.ajax({
                            type: "get",
                            url: "/order",
                            data: {
                                ProPrice: ProPrice,
                                payment_mode: payment_mode,
                                items: items,
                                total_amount: total_amount,
                                delivery_address: delivery_address,
                                pin_code: pin_code,
                                home_id: home_id,
                                royal_id: royal_id,
                                hospital_id: hospital_id,
                                hotel_id: hotel_id,
                                pillow_id: pillow_id,
                                protector_id: protector_id,
                                topper_id: topper_id,
                                product_name: product_name,
                                master_size_id: master_size_id,
                                unit_id: unit_id,
                                size_id: size_id,
                                thickness_id: thickness_id,
                                product_price: product_price,
                                quantity: quantity,
                                image: image
                            },
                            success: function(response) {
                                console.log(response);
                                var response = response['data']
                                    if(response == 1){
                                        Swal.fire({
                                                icon: 'success',
                                                title: 'Order Placed Successfully',
                                                text: 'Thank You For Your Order!'
                                        }).then(function(){  window.location.href ='/my_order'; });
            
                                    } else  {
                                            Swal.fire({
                                                    icon: 'info',
                                                    title: 'Order Canceled',
                                                    text: 'Your order has been canceled.'
                                                });
                                            console.log("Payment Failed");
                                    }
                            },
                            
                            
            
                        });

                   }
                  
              });
                   
    });
        
</script>
    
    <script>
        $(document).on('click', '.btnpay', function() {
            
             
              Swal.fire({
                title: 'Please Confirm Your Payment Details Before Completing the Transaction!',
                icon: 'question',
                iconHtml: '?',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
              }).then((result) => {
                if (result.isConfirmed) {
                    
            
            var ProPrice = $('#total-inp-amount').val();
            var payment_mode = $(this).val();
            // console.log(ProPrice);
            var items = $('.items').val();
            var total_amount = $('.total_amount').val();
            var delivery_address = $('.delivery_address').val();
            var pin_code = $('.pin_code').val();

            var home_id = [];
            $('.home_id').each(function() {
                home_id.push($(this).val());
            });

            var royal_id = [];
            $('.royal_id').each(function() {
                royal_id.push($(this).val());
            });

            var hospital_id = [];
            $('.hospital_id').each(function() {
                hospital_id.push($(this).val());
            });

            var hotel_id = [];
            $('.hotel_id').each(function() {
                hotel_id.push($(this).val());
            });

            var pillow_id = [];
            $('.pillow_id').each(function() {
                pillow_id.push($(this).val());
            });

            var protector_id = [];
            $('.protector_id').each(function() {
                protector_id.push($(this).val());
            });

            var topper_id = [];
            $('.topper_id').each(function() {
                topper_id.push($(this).val());
            });

            var product_name = [];
            $('.product_name').each(function() {
                product_name.push($(this).val());
            });

            var master_size_id = [];
            $('.master_size_id').each(function() {
                master_size_id.push($(this).val());
            });

            var unit_id = [];
            $('.unit_id').each(function() {
                unit_id.push($(this).val());
            });

            var size_id = [];
            $('.size_id').each(function() {
                size_id.push($(this).val());
            });

            var thickness_id = [];
            $('.thickness_id').each(function() {
                thickness_id.push($(this).val());
            });

            var product_price = [];
            $('.product_price').each(function() {
                product_price.push($(this).val());
            });

            var quantity = [];
            $('.quantity').each(function() {
                quantity.push($(this).val());
            });

            var image = [];
            $('.image').each(function() {
                image.push($(this).val());
            });



            $.ajax({
                type: "get",
                url: "/get_pro_price",
                data: {
                    ProPrice: ProPrice,
                    payment_mode: payment_mode,
                    items: items,
                    total_amount: total_amount,
                    delivery_address: delivery_address,
                    pin_code: pin_code,
                    home_id: home_id,
                    royal_id: royal_id,
                    hospital_id: hospital_id,
                    hotel_id: hotel_id,
                    pillow_id: pillow_id,
                    protector_id: protector_id,
                    topper_id: topper_id,
                    product_name: product_name,
                    master_size_id: master_size_id,
                    unit_id: unit_id,
                    size_id: size_id,
                    thickness_id: thickness_id,
                    product_price: product_price,
                    quantity: quantity,
                    image: image,
                },
                success: function(response) {
                    // console.log(response)
                    var orderID = response["order_id"];
                    var tbl_order_id = response["tbl_order_id"];
                    var total_price = parseInt(response["totalAmount"]);
                    var amountInPaisa = total_price * 100;
                    // console.log(orderID, amountInPaisa);

                    var options = {
                        "key": "rzp_test_bzpYc4IrjNNVG5",
                        "amount": amountInPaisa,
                        "currency": "INR",
                        "name": "Restin Mattress",
                        "description": "Test Transaction",
                        "image": "https://example.com/your_logo",
                        "handler": function(responseA) {

                            // alert(responseA.razorpay_payment_id);
                            $.ajax({
                                type: "get",
                                url: "/place_order",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'order_id': orderID,
                                    'tbl_order_id': tbl_order_id,
                                    'payment_mode': "paid by Razorpay",
                                    'payment_id': responseA
                                        .razorpay_payment_id
                                },

                                success: function(data) {
                                    // console.log(data);
                                    var res = data['response'];
                                    // console.log(res);
                                    if (res === 1) {
                                        Swal.fire({
                                                icon: 'success',
                                                title: 'Order Placed Successfully',
                                                text: 'Thank You For Your Order!'
                                            }).then(function(){
                                                window.location.href ='/my_order';
                                            });

                                    } else if (res === 0) {
                                         Swal.fire({
                                                icon: 'error',
                                                title: 'Order Placement Failed',
                                                text: 'Sorry, there was an error placing your order.'
                                            })
                                        console.log(
                                            "Payment Failed"
                                        );
                                    }
                                }

                            })


                        },
                        "prefill": {
                            // Pre-fill customer details if needed
                        },
                        "theme": {
                            // Customize the payment popup theme if needed
                        },
                        "external": {
                            wallets: ['paytm'] // Enable wallets if needed
                        },
                        "modal": {
                            ondismiss: function() {
                                console.log('payment cancel');

                              
                                    $.ajax({
                                        type: "GET",
                                        url: "/delete_order",
                                        data: {

                                            'tbl_order_id': tbl_order_id
                                        },
                                        success: function(responsec) {
                                            Swal.fire({
                                                icon: 'info',
                                                title: 'Order Canceled',
                                                text: 'Your order has been canceled.'
                                            });
                                        }
                                    });
                                

                            }
                        }

                    };

                    var rzp1 = new Razorpay(options)

                    rzp1.open();
                },
                error: function(res) {}
            });




          }
      });


});
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const quantityInputs = document.querySelectorAll(".quantity-input");
            const incrementBtns = document.querySelectorAll(".increment-btn");
            const decrementBtns = document.querySelectorAll(".decrement-btn");
            const priceElements = document.querySelectorAll(".price");
            const totalQuantityElement = document.getElementById("total-quantitys");
            const totalAmountElement = document.getElementById("total-price");
            const totalPriceInput = document.getElementById("total-amount");
            const totalInputAmount = document.getElementById("total-inp-amount");

            // Store the default prices for each product in an array
            const defaultPrices = Array.from(priceElements).map((element) => {
                const itemPriceStr = element.textContent;
                return parseFloat(itemPriceStr.replace(/[^0-9.]/g, '')); // Remove non-numeric characters
            });

            // Function to update the price and total amount
            function updatePriceAndAmount() {
                let totalQuantity = 0;
                let totalPrice = 0;

                quantityInputs.forEach((quantityInput, index) => {
                    const currentValue = parseInt(quantityInput.value);

                    // Check if currentValue is a valid number
                    if (!isNaN(currentValue)) {
                        // Calculate the individual item price based on the default price
                        const itemTotalPrice = defaultPrices[index] * currentValue;

                        // Update the individual item price
                        priceElements[index].textContent =
                            `₹ ${itemTotalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;

                        // Update the total quantity and total price
                        totalQuantity += currentValue;
                        totalPrice += itemTotalPrice;
                    }
                });

                // Format the total price with commas
                totalAmountElement.textContent = `₹ ${totalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
                totalPriceInput.textContent = totalAmountElement.textContent; // Update #total-amount
                totalInputAmount.value =  parseInt(totalPrice);
                // const numericTotalPrice = parseInt(totalPrice.replace(/[^0-9]/g, ''), 10);
                // totalInputAmount.value = numericTotalPrice.toString();

                totalQuantityElement.textContent = totalQuantity;
                
               
               
            }
            


            // Loop through all quantity inputs and add event listeners
            quantityInputs.forEach((quantityInput, index) => {
                const incrementBtn = incrementBtns[index];
                const decrementBtn = decrementBtns[index];

                incrementBtn.addEventListener("click", (event) => {
                    event.preventDefault(); // Prevent the button from submitting a form
                    let currentValue = parseInt(quantityInput.value);
                    quantityInput.value = currentValue + 1;
                     quantityInput.setAttribute('value', quantityInput.value);
                    updatePriceAndAmount();
                    
                    
                });

                decrementBtn.addEventListener("click", (event) => {
                    event.preventDefault(); // Prevent the button from submitting a form
                    let currentValue = parseInt(quantityInput.value);
                    if (currentValue >
                        1) { // Check that the value is greater than 1 before decrementing
                        quantityInput.value = currentValue - 1;
                         quantityInput.setAttribute('value', quantityInput.value);
                        updatePriceAndAmount();
                    }
                });

                // Add an event listener to quantity input to update the price when the input value changes
                quantityInput.addEventListener("input", () => {
                    updatePriceAndAmount();
                });
            });

            // Initial update of prices and total amount
            updatePriceAndAmount();
        });
    </script>
    
    <script>
        $(document).ready(function() {
            var flashMessage = $('.alert');

            if (flashMessage.length > 0) {
                setTimeout(function() {
                    flashMessage.fadeOut('slow');
                }, 5000);
            }
            
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

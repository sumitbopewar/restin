@extends('layouts.app')


@section('content')
    <div class="main_card container">
        <div class="product-card ">

            <div id="carouselExampleRide" class="carousel slide _slider" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active caro-img">
                        <img src="{{ asset('storage/images/' . $home_mattress->image) }}" class="d-block w-100 car-img"
                            alt="...">
                    </div>
                    <div class="carousel-item caro-img">
                        <img src="{{ asset('storage/images/' . $home_mattress->img2) }}" class="d-block w-100 car-img"
                            alt="...">
                    </div>
                    <div class="carousel-item caro-img">
                        <img src="{{ asset('storage/images/' . $home_mattress->img3) }}" class="d-block w-100 car-img"
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
                </div>

            </div>

            <div class="_content">
                <h2 class="product-title">{{ $home_mattress->product }}</h2>
                <h3 class="text-black-50 fw-bold"> Rs. {{ $home_mattress->price }}</h3>

                <h5 class="">About this item: </h5>
                <p>{{ $home_mattress->about }} </p>

                <form action="" method="">

                    <div class="card-input">

                        <div class="btns inpt ">
                            @foreach ($master_size as $size)
                                <div class="button">
                                    <input type="radio" id="a25" name="check-substitution-2" checked />
                                    <label class="btn btn-default" for="a25">{{ $size->size_name }}</label>
                                </div>
                            @endforeach


                        </div>
                        <br>

                        <div class="inpt dorpp">
                            <select class="form-select " aria-label="Default select example" id="exampleFormControlInput1">
                                @foreach ($unit as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="inpt">
                            <label for="exampleFormControlInput2" class="form-label">Size</label>
                            <select class="form-select" aria-label="Default select example" id="exampleFormControlInput2">
                                <!--<option selected>Size Inch</option>-->



                                {{-- @foreach ($size_in_mm as $sizemm) --}}

                                    <option value="{{ $size_in_mm['id'] }}" selected>{{ $size_in_mm['mm_length'] }} *
                                        {{ $size_in_mm['mm_breath'] }}</option>
                                {{-- @endforeach --}}

                            </select>
                        </div>

                        <div class="inpt">
                            <label for="exampleFormControlInput3" class="form-label">Thickness</label>
                            <select class="form-select " aria-label="Default select example" id="exampleFormControlInput3">
                                <!--<option selected>Thickness</option>-->
                                <option value="1" selected>4 in</option>
                                <option value="2">4.5 in</option>
                                <option value="3">5 in</option>
                                <option value="4">5.5 in</option>
                            </select>
                        </div>

                        <div class="quantity-section card-input inpt">
                            <button type="button" class="decrement-btn btn btn-outline-secondary">-</button>
                            <input type="text" class="quantity-input" value="0" min="0" />
                            <button type="button" class="increment-btn btn btn-outline-secondary">+</button>
                        </div>


                        <div class="purchase-info inpt">
                            <button type="button" class="btn btn-primary">
                                Add to Cart <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-success">Buy Now</button>
                        </div>
                    </div>

                </form>


            </div>


        </div>


    </div>


    <script>
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

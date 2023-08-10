@extends('layouts.app')


@section('content')

<style>
    .img-footer {
        width: 100px;
        aspect-ratio: 3/2;
        object-fit: contain;
    }

    .fw-light {
        color: white;
        font-size: 3rem;
        font-weight: 600 !important;
    }

    .details {
        display: flex;
    }

    .detail {
        padding-left: 10px;
        font-size: 1.2rem;
    }

    .detail-head {
        font-size: 1.2rem;
        font-weight: 500;
    }
</style>



<!-- Contact Image Section -->
<div class="d-flex justify-content-center align-items-center" style="background-image: url('/layouts/img/back-2.jpeg');height: 400px;
    background-size: cover; margin-top: 4rem;">
    <div class="">

        <h2 class="fw-light">Contacts</h2>
        <!--<p class="text-dark"><a class="text-dark" href=""><i class="fa-solid fa-house pe-3"></i>Home <i class="fa-solid fa-arrow-right-long px-3"></i> </a>Contacts</p>-->

    </div>
</div>

<div class="text-center py-3">
    <h4 class="fw-bold pt-3">Get In Touch With Us</h3>
        <p class="text-secondary text-justify px-2">For more Information About Our Product & Services. Please Feel Free
            To Drop Us
            An Email. Our Staff Always BE there To Help You Out. Do Not Hesitate!</p>
</div>
<div class="container pb-2">
    <div class="row d-flex justify-content-center align-items-center mb-4">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 shadow  p-0">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.2135110700037!2d78.98993407479814!3d21.10405228518917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd495370eab2b61%3A0xc3d02fda1e4fceb!2sRestin%20Industries!5e0!3m2!1sen!2sin!4v1691574861221!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
            <div class="" style="min-height:100%;">
                <form class="">
                    <div class="my-2">
                        <input type="text" placeholder="Enter Name" class="bg border-0 ps-3 py-2 rounded-0 w-100">
                    </div>
                    <div class="row">
                        <div class="col-6 my-2">
                            <input type="email" placeholder="Enter Email" class="bg border-0 ps-3 py-2 rounded-0 w-100">
                        </div>
                        <div class="col-6 my-2">
                            <input type="number" placeholder="Enter Mobile No." class="bg border-0 ps-3 py-2 rounded-0 w-100">
                        </div>
                    </div>
                    <div class="my-2">
                        <textarea class="bg border-0 ps-3 py-2 rounded-0 w-100 " placeholder="Comments" rows="5"></textarea>
                    </div>
                    <div class="my-2">
                        <input type="submit" value="Submit" class="btn btn-info w-100 rounded-0">
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<!--<div class="row bg mt-3 py-2 px-5 pb-2">-->
<!--    <div class="col-12 col-sm-12 col-md-3 d-flex px-2">-->
<!--        <div>-->
<!--                    <img class="img-footer" src="Mattresses Images/Trophy-icon.png" alt="">-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <h4 class="">High Quality</h4>-->
<!--                    <p class="text-secondary">crafted from top materials</p>-->
<!--                </div>-->
<!--    </div>-->
<!--    <div class="col-12 col-sm-12 col-md-3 d-flex px-2">-->
<!--        <div>-->
<!--                    <img class="img-footer" src="Mattresses Images/Warranty.png" alt="">-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <h4 class="">Warranty Protection</h4>-->
<!--                    <p class="text-secondary">over 2 years</p>-->
<!--                </div>-->
<!--    </div>-->
<!--    <div class="col-12 col-sm-12 col-md-3 d-flex px-2">-->
<!--        <div>-->
<!--                    <img class="img-footer" src="Mattresses Images/Free-Shipping.png" alt="">-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <h4 class="">Free Shipping</h4>-->
<!--                    <p class="text-secondary">Order over 150 $</p>-->
<!--                </div>-->
<!--    </div>-->
<!--    <div class="col-12 col-sm-12 col-md-3 d-flex px-2">-->
<!--        <div>-->
<!--                    <img class="img-footer" src="Mattresses Images/Customer-Support.png" alt="">-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <h4 class="">24 / 7 Support</h4>-->
<!--                    <p class="text-secondary">Dedicated support</p>-->
<!--                </div>-->
<!--    </div>-->
</div>



<!--footer-->


@endsection
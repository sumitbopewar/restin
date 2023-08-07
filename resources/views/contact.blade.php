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
<div class="d-flex justify-content-center align-items-center" style="background-image: url('img/background_mattress.jpg');height: 400px;
    background-size: cover;">
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
    <div class="row d-flex justify-content-center align-items-center">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6  my-4">
            <div class="shadow p-4" style="min-height:100%;">
                <h6 class="fw-bold text-center">Contact Info</h6>
                <!-- <div class="py-2"><i class="fa-solid fa-phone px-2"></i>Mobile No.:<span class="px-5">+91
                        7755918227</span></div>
                <div class="py-2"><i class="fa-solid fa-envelope px-2"></i>Email:<span
                        class="px-5">sales@restin.in</span></div>
                <div class="py-2"><i class="fa-solid fa-location-dot px-2"></i>Address:<span class="px-5">Restin
                        Industries N 101/7 MIDC Hingna Road Nagpur 440016 Maharashtra, India</span></div> -->

                   <style>
                        .address_head{
                            display: flex;
                            flex-direction: row;
                        }
                   </style>

                <div class=details>
                    <p class="detail-head address_head"><i class="fa-solid fa-location-dot px-2"></i><span>Address:</span></p>
                    <p class="detail">Restin Industries N 101/7 MIDC Hingna Road Nagpur 440016 Maharashtra, India</p>
                </div>

                <div class=details>
                    <p class="detail-head"><i class="fa-solid fa-phone px-2"></i>Mobile No.:</p>
                    <p class="detail">+91 7755918227</p>
                </div>

                <div class=details>
                    <p class="detail-head"><i class="fa-solid fa-envelope px-2"></i>Email:</p>
                    <p class="detail">sales@restin.in</p>
                </div>


            </div>
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
                            <input type="number" placeholder="Enter Mobile No."
                                class="bg border-0 ps-3 py-2 rounded-0 w-100">
                        </div>
                    </div>
                    <div class="my-2">
                        <textarea class="bg border-0 ps-3 py-2 rounded-0 w-100 " placeholder="Comments"
                            rows="5"></textarea>
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
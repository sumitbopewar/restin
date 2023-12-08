<style>
    /*@import url('https://fonts.gooleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');*/
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Roboto+Flex:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Arimo&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

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

    body {
        font-family: 'Fira Sans', sans-serif;
        font-family: 'Roboto Flex', sans-serif;
        font-family: 'Lato', sans-serif !important;
    }

    .active_page {
        border-bottom: 2px solid #1e0957;
        color: #1e0957 !important;
    }

    /*footer page css */


    .social {
        margin-right: 10px;
    }

    .information-block {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        z-index: 2;
    }

    footer {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        color: white;
    }

    .footer-links {
        margin: 2rem
    }

    .copywrite {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 2rem;
        text-align: left;
        z-index: 99999999999999;
    }

    .footer-links h4 {
        font-size: 1.7rem;
    }

    .footer_item {
        font-size: 0.8rem;
        list-style: none;
        /*font-family: 'Montserrat', sans-serif;*/
        /*font-family: 'Montserrat';*/
        font-family: 'Lato', sans-serif;
    }

    a {
        text-decoration: none;
        color: white;
        cursor: pointer;
    }

    a:hover {
        color: white;
    }

    .area {
        background: rgb(11, 63, 152);
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
        width: 100%;
        height: auto;
        position: absolute;
        padding-right: 5rem !important;
        padding-left: 4rem !important;
        z-index: -0;
    }

    .circles {
        position: absolute;
        left: 0;
        width: 100%;
        height: 90%;
        overflow: hidden;
        margin: 0px;
    }

    .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;

    }

    .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }


    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }



    @keyframes animate {

        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }

    .footer_icons {
        width: 25px;
        height: 30px;
        /*margin: 5px;*/
        object-fit: scale-down;
    }

    .new_footer_icons {
        width: 16px;
        height: 21px;
        margin-bottom: 10px;
        object-fit: scale-down;
        margin-right: 5px;
    }

    @media screen and (max-width: 600px) {
        .area {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }
    }

    .non-icon li {
        margin-bottom: 0.8rem;
    }

    .bottom_copywrite {
        text-align: center;
        margin: auto;
        color: white;
    }

    .social_icon {
        font-size: 1.5rem;
        margin: 4px;
    }

    .fixed-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: green;
        padding: 7px 14px;
        border-radius: 50px;
        z-index: 999999 !important;
    }

    .fixed-icon a {
        text-decoration: none;
        color: #fff;
    }

    @media screen (min-width:549px) and (max-width:770px) {
        .footer .information-block h6 {
            text-align: left !important;
        }
    }

    /*footer page css */

    /*guide to good sleep */

    /* *{
    font-family: 'Lato', sans-serif;
    } */

    .para-img {
        object-fit: contain;
    }

    @media screen and (min-width: 1400px) {
        .bottom_div {
            margin-top: -27px;
        }
    }

    /*guide to good sleep */
</style>
<div class="area">
    <footer>
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <!-- Start Footer Section -->
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="container my-5">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-between p-4" style="background-color: rgba(0, 0, 0, 0.099)">
                    <!-- Left -->
                    <div class="me-5">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="https://restin.in/" target="_blank" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://restin.in/" target="_blank" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->

                <style>
                    .footer-links {
                        margin: 0px !important;
                    }
                </style>
                <section class="information-block">
                    <div class="container text-center text-md-start mt-5 information footer-links">
                        <!-- Grid row -->
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 mt-3 d-flex">
                            <!-- Grid column -->
                            <div class="col mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold text-white">Payment Methods</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <div
                                    class="row rows-cols-md-2 payment_methods_img d-flex justify-content-center align-items-center">
                                    <style>
                                        .payment_methods_img img {
                                            width: 90px;
                                            height: 100%;
                                            object-fit: scale-down;
                                        }
                                    </style>
                                    <img src="{{ asset('layouts/img/visa.png') }}" alt="">
                                    <img class="footer_icons" src="{{ asset('layouts/img/money.png') }}" alt="">

                                    <img class="footer_icons" src="{{ asset('layouts/img/atm-card.png') }}"
                                        alt="">
                                    <img class="footer_icons" src="{{ asset('layouts/img/credit-card (1).png') }}"
                                        alt="">

                                    <img class="footer_icons" src="{{ asset('layouts/img/provider.png') }}"
                                        alt="">
                                    <img class="footer_icons" src="{{ asset('layouts/img/cashless-payment.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col mx-auto mb-4 ps-lg-5">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold text-white">Products</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="{{ Route('homesmattress') }}"
                                        class="text-white fs-6 fw-normal">Mattress</a>
                                </p>
                                <p>
                                    <a href="{{ Route('royal') }}" class="text-white fs-6 fw-normal">Royal
                                        Mattress</a>
                                </p>
                                <p>
                                    <a href="{{ Route('pillows') }}" class="text-white fs-6 fw-normal">Pillows</a>
                                </p>
                                <p>
                                    <a href="{{ Route('protector') }}"
                                        class="text-white fs-6 fw-normal">Protector</a>
                                </p>
                                <p>
                                    <a href="{{ Route('topper') }}" class="text-white fs-6 fw-normal">Topper</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold text-white">Supports</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="{{ Route('policy') }}" class="text-white fs-6 fw-normal">Privacy &
                                        policy</a></ </p>
                                <p>
                                    <a href="{{ Route('conditions') }}" class="text-white fs-6 fw-normal">Terms &
                                        conditions</a>
                                </p>
                                <p>
                                    <a href="{{ route('warranty') }}" class="text-white fs-6 fw-normal">Warranty</a>
                                </p>
                                <p>
                                    <a href="{{ route('how_to_choose') }}" class="text-white fs-6 fw-normal">How to
                                        choose
                                        Right mattress?</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="cold mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold text-white">Restin Industries</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fas fa-home mr-3 text-white"></i>
                                    <a href="https://www.google.com/maps?q=N+101/7, MIDC, Hingna Road, Nagpur-440016, Maharashtra, India"
                                        target="_blank" class="ms-1 text-white fs-6 fw-normal">
                                        N 101/7, MIDC, Hingna Road, <br /> Nagpur-440016 Maharashtra, India
                                    </a>
                                </p>
                                <p><i class="fas fa-envelope mr-3 text-white"></i><a href="mailto:customer@restin.in"
                                        class="ms-1 text-white fs-6 fw-normal">
                                        customer@restin.in</a></p>
                                <p><i class="fas fa-phone mr-3 text-white"></i><a href="tel:+917755918227"
                                        class="ms-1 text-white fs-6 fw-normal"> +91 77559 18227</a></p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    Copyright © <a href="https://iceico.in/" target="_blank" class="text-white">restin.in</a> 2023
                    Design by <a href="https://iceico.in/" target="_blank" class="text-white"> ICEICO Technology</a>
                    <i class="mdi mdi-heart text-danger"></i>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->

        </div>
        <!-- End of .container -->

</div>


<!-- End Footer Section -->
</div>
</div>

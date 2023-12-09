<div class="row d-none d-lg-flex bg-light">
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa-solid fa-envelope px-1"></i> customer@restin.in</li>
                        <li> <i class="fa fa-phone px-1"></i> +91 77559 18227</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 d-none-sm">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media screen and (max-width: 600px) {
        .carousel {
            margin-top: -3.5rem;
        }

    }
</style>

<nav class="navbar navbar-expand-lg navbar-light p-0 " style="border-bottom:1px solid lightgray; background: #c2eaff;">
    <div class="container-fluid px-5 mx-5 header_nav py-2">
        <div class="toggle_brand wow bounceInLeft">
            <a class="navbar-brand" href="{{ Route('/') }}"><img src="{{ asset('/layouts/img/logo copy.png') }}"
                    width="110px" alt="logo" style="width:100px !important"></a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapses navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ul_nav">

                <li class="nav-item align-self-center wow bounceInUp" data-wow-delay="0.1s">
                    <a class="nav-link fw-bold  {{ request()->is('/') ? 'active_page' : '' }}" aria-current="page"
                        href="{{ route('/') }}">Home</a>
                </li>

                <li class="nav-item align-self-center  wow bounceInUp" data-wow-delay="0.3s">
                    <a class="nav-link fw-bold {{ request()->is('guide_to_good_sleep') ? 'active_page' : '' }}"
                        href="{{ route('guide_to_good_sleep') }}">Guide To Good Sleep</a>
                </li>

                <li class="nav-item dropdown align-self-center  wow bounceInUp" data-wow-delay="0.4s">
                    <a class="nav-link fw-bold dropdown-toggle {{ request()->is('homemattress') || request()->is('hospital') || request()->is('hotel') ? 'active_page' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mattress
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('homemattress') }}">Home Mattress</a></li>

                        <li><a class="dropdown-item" href="{{ route('hospital') }}">Hospital Mattress</a></li>

                        <li><a class="dropdown-item" href="{{ route('hotel') }}">Hotel Mattress</a></li>
                    </ul>
                </li>

                <li class="nav-item align-self-center  wow bounceInUp" data-wow-delay="0.5s">
                    <a class="nav-link fw-bold {{ request()->is('royal') ? 'active_page' : '' }}"
                        href="{{ route('royal') }}">Royale Mattress</a>
                </li>

                <li class="nav-item dropdown align-self-center  wow bounceInUp" data-wow-delay="0.6s">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sleep Essentials
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('pillows') }}">Pillows</a></li>

                        <li><a class="dropdown-item" href="{{ route('protector') }}">Protector</a></li>

                        <li><a class="dropdown-item" href="{{ route('topper') }}">Topper</a></li>
                    </ul>
                </li>

                <li class="nav-item align-self-center  wow bounceInUp" data-wow-delay="0.7s">
                    <a class="nav-link fw-bold {{ request()->is('contact') ? 'active_page' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>

                <?php
                $user_id = Auth::id();
                $cartItems = DB::table('carts')
                    ->where('user_id', $user_id)
                    ->get();
                ?>

                <li class="align-self-center  wow bounceInUp" data-wow-delay="0.8s">
                    <a href = "{{ route('cart') }}" id="cart-link">
                        <i class="bi bi-cart3 text-dark">
                            <sup class="badge bg-danger {{ request()->is('cart') ? 'active_page' : '' }}">
                                {{ count($cartItems) }}
                            </sup>
                        </i>
                    </a>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item wow bounceInUp" data-wow-delay="0.9s">
                            <a class="nav-link fw-bold  px-2" href="{{ route('login') }}" style="color: #0e14a7;">
                                <button type="button" class="btn btn-primary rounded-0">
                                    {{ __('Login') }}
                                </button> </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown text-center wow bounceInUp" data-wow-delay="1.0s">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item border-bottom" href="{{ route('profile') }}">
                                Profile
                            </a>
                            <a class="dropdown-item border-bottom" href="{{ route('my_order') }}">
                                My Order
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest


            </ul>

        </div>
    </div>
</nav>



<style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    div pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    font,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    figure,
    header,
    nav,
    section,
    article,
    aside,
    footer,
    figcaption {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
    }

    @media screen and (max-width:774px) {
        .sub-header .social-links {
            display: none;
        }
    }

    /* @media screen and (min-width:300px) and (max-width:750px){
  .nav{
    display: block;
  }
} */

    /* @media screen and (min-width:765px){
  .nav{
    display: none;
  }
} */

    .clearfix:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0;
    }

    .clearfix {
        display: inline-block;
    }

    html[xmlns] .clearfix {
        display: block;
    }

    * html .clearfix {
        height: 1%;
    }

    ul,
    li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    header,
    nav,
    section,
    article,
    aside,
    footer,
    hgroup {
        display: block;
    }

    * {
        box-sizing: border-box;
    }

    html,
    body {
        font-family: 'Poppins', sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    a {
        text-decoration: none !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #1e1e1e;
        margin-top: 0px;
        margin-bottom: 0px;
        font-weight: 700;
    }

    ul {
        margin-bottom: 0px;
    }

    p {
        font-size: 14px;
        line-height: 28px;
        color: #4a4a4a;
    }

    img {
        width: 100%;
        overflow: hidden;
    }

    /*
---------------------------------------------
Global Styles
---------------------------------------------
*/
    html,
    body {
        font-family: 'Poppins', sans-serif;
    }

    ::selection {
        background: #0071f8;
        color: #fff;
    }

    ::-moz-selection {
        background: #0071f8;
        color: #fff;
    }

    .section {
        margin-top: 120px;
    }

    .section-heading {
        margin-bottom: 70px;
    }

    .section-heading h2 {
        font-size: 40px;
        font-weight: 700;
        text-transform: capitalize;
        margin-top: 20px;
        line-height: 56px;
    }

    .section-heading h2 em {
        font-style: normal;
        color: #0071f8;
    }

    .section-heading h6 {
        color: #ee626b;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .icon-button a {
        display: inline-block;
        background-color: #1e1e1e;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        height: 50px;
        line-height: 50px;
        padding: 0px 30px 0px 0px;
        border-radius: 25px;
        transition: all .3s;
    }

    .icon-button a i {
        background-color: #f35525;
        height: 50px;
        width: 50px;
        text-align: center;
        border-radius: 50%;
        line-height: 50px;
        display: inline-block;
        margin-right: 15px;
        margin-left: -1px;
    }

    .icon-button a:hover {
        color: #f35525;
    }

    .icon-button a:hover i {
        color: #fff;
    }

    .main-button a {
        display: inline-block;
        background-color: #1e1e1e;
        color: #fff;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 40px;
        padding: 0px 30px;
        border-radius: 25px;
        transition: all .3s;
    }

    .main-button a:hover {
        background-color: #f35525;
        color: #fff;
    }

    /*
---------------------------------------------
Pre-loader Style
---------------------------------------------
*/

    .js-preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.99);
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        opacity: 1;
        visibility: visible;
        z-index: 9999;
        -webkit-transition: opacity 0.25s ease;
        transition: opacity 0.25s ease;
    }

    .js-preloader.loaded {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    @-webkit-keyframes dot {
        50% {
            -webkit-transform: translateX(96px);
            transform: translateX(96px);
        }
    }

    @keyframes dot {
        50% {
            -webkit-transform: translateX(96px);
            transform: translateX(96px);
        }
    }

    @-webkit-keyframes dots {
        50% {
            -webkit-transform: translateX(-31px);
            transform: translateX(-31px);
        }
    }

    @keyframes dots {
        50% {
            -webkit-transform: translateX(-31px);
            transform: translateX(-31px);
        }
    }

    .preloader-inner {
        position: relative;
        width: 142px;
        height: 40px;
        background: transparent;
    }

    .preloader-inner .dot {
        position: absolute;
        width: 16px;
        height: 16px;
        top: 12px;
        left: 15px;
        background: #f35525;
        border-radius: 50%;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        -webkit-animation: dot 2.8s infinite;
        animation: dot 2.8s infinite;
    }

    .preloader-inner .dots {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        margin-top: 12px;
        margin-left: 31px;
        -webkit-animation: dots 2.8s infinite;
        animation: dots 2.8s infinite;
    }

    .preloader-inner .dots span {
        display: block;
        float: left;
        width: 16px;
        height: 16px;
        margin-left: 16px;
        background: #f35525;
        border-radius: 50%;
    }



    /*
---------------------------------------------
Header Style
---------------------------------------------
*/

    .sub-header {
        background-color: #fff;
        padding: 10px 0px;
        border-bottom: 1px solid #eee;
    }

    .sub-header ul li {
        display: inline-block;
    }

    .sub-header ul.social-links {
        text-align: right;
    }

    .sub-header ul.social-links li {
        margin-left: 8px;
    }

    .sub-header ul.social-links li a {
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: #cdcdcd;
        border-radius: 50%;
        text-align: center;
        line-height: 30px;
        color: #fff;
        font-size: 14px;
        transition: all .3s;
    }

    .sub-header ul.social-links li a:hover {
        background-color: #0d6efd;
    }

    .sub-header ul.info li {
        font-size: 14px;
        color: #7a7a7a;
        border-right: 1px solid #eee;
        margin-right: 25px;
        padding-right: 25px;
    }

    .sub-header ul.info li:last-child {
        margin-right: 0px;
        padding-right: 0px;
        border-right: none;
    }

    .sub-header ul.info li i {
        font-size: 20px;
        color: #0d6efd;
        margin-right: 8px;
    }

    .background-header {
        background-color: #fff;
        height: 80px !important;
        position: fixed !important;
        top: 0 !important;
        left: 0;
        right: 0;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15) !important;
        -webkit-transition: all .5s ease 0s;
        -moz-transition: all .5s ease 0s;
        -o-transition: all .5s ease 0s;
        transition: all .5s ease 0s;
    }

    .header-area {
        position: relative;
        background-color: #fff;
        height: 100px;
        z-index: 100;
        -webkit-transition: all .5s ease 0s;
        -moz-transition: all .5s ease 0s;
        -o-transition: all .5s ease 0s;
        transition: all .5s ease 0s;
    }

    .header-area .main-nav {
        background: transparent;
        display: flex;
    }

    .header-area .main-nav .logo {
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        display: inline-block;
    }

    .header-area .main-nav .logo h1 {
        line-height: 100px;
        font-size: 28px;
        text-transform: uppercase;
        color: #1e1e1e;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .background-header .main-nav .logo h1 {
        line-height: 80px;
    }

    .header-area .main-nav ul.nav {
        flex-basis: 100%;
        margin-top: 30px;
        justify-content: right;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        position: relative;
        z-index: 999;
    }

    .header-area .main-nav .nav li:last-child {
        padding-right: 0px;
    }

    .header-area .main-nav .nav li {
        padding-left: 10px;
        padding-right: 10px;
        height: 100px;
        line-height: 100px;
    }

    .header-area .main-nav .nav li a {
        display: block;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: 500;
        font-size: 15px;
        height: 40px;
        line-height: 40px;
        text-transform: capitalize;
        color: #1e1e1e;
        -webkit-transition: all 0.4s ease 0s;
        -moz-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
        border: transparent;
        letter-spacing: .25px;
    }

    .header-area .main-nav .nav li:last-child a {
        background-color: #1e1e1e;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        text-transform: none;
        border-radius: 20px;
        padding-left: 0px;
    }

    .header-area .main-nav .nav li:last-child a i {
        background-color: #f35525;
        display: inline-block;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        border-radius: 50%;
        margin-left: -1px;
    }

    .header-area .main-nav .nav li:last-child:hover a {
        background-color: #1e1e1e;
    }

    .header-area .main-nav .nav li:last-child:hover a i {
        color: #fff;
    }

    .header-area .main-nav .nav li:hover a {
        color: #f35525;
    }

    .header-area .main-nav .nav li a.active {
        color: #f35525;
    }


    .background-header .main-nav .nav li a.active {
        color: #f35525;
    }

    .header-area .main-nav .menu-trigger {
        cursor: pointer;
        position: absolute;
        top: 23px;
        width: 32px;
        height: 40px;
        text-indent: -9999em;
        z-index: 99;
        right: 20px;
        display: none;
    }

    .background-header .main-nav .menu-trigger {
        top: 22px;
    }

    .background-header .main-nav ul.nav {
        margin-top: 20px;
    }

    .header-area .main-nav .menu-trigger span,
    .header-area .main-nav .menu-trigger span:before,
    .header-area .main-nav .menu-trigger span:after {
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        -webkit-transition: all 0.4s;
        transition: all 0.4s;
        background-color: #1e1e1e;
        display: block;
        position: absolute;
        width: 30px;
        height: 2px;
        left: 0;
    }

    .header-area .main-nav .menu-trigger span:before,
    .header-area .main-nav .menu-trigger span:after {
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        -webkit-transition: all 0.4s;
        transition: all 0.4s;
        background-color: #1e1e1e;
        display: block;
        position: absolute;
        width: 30px;
        height: 2px;
        left: 0;
        width: 75%;
    }

    .header-area .main-nav .menu-trigger span:before,
    .header-area .main-nav .menu-trigger span:after {
        content: "";
    }

    .header-area .main-nav .menu-trigger span {
        top: 16px;
    }

    .header-area .main-nav .menu-trigger span:before {
        -moz-transform-origin: 33% 100%;
        -ms-transform-origin: 33% 100%;
        -webkit-transform-origin: 33% 100%;
        transform-origin: 33% 100%;
        top: -10px;
        z-index: 10;
    }

    .header-area .main-nav .menu-trigger span:after {
        -moz-transform-origin: 33% 0;
        -ms-transform-origin: 33% 0;
        -webkit-transform-origin: 33% 0;
        transform-origin: 33% 0;
        top: 10px;
    }

    .header-area .main-nav .menu-trigger.active span,
    .header-area .main-nav .menu-trigger.active span:before,
    .header-area .main-nav .menu-trigger.active span:after {
        background-color: transparent;
        width: 100%;
    }

    .header-area .main-nav .menu-trigger.active span:before {
        -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
        -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
        -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
        transform: translateY(6px) translateX(1px) rotate(45deg);
        background-color: #1e1e1e;
    }

    .background-header .main-nav .menu-trigger.active span:before {
        background-color: #1e1e1e;
    }

    .header-area .main-nav .menu-trigger.active span:after {
        -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
        -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
        -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
        transform: translateY(-6px) translateX(1px) rotate(-45deg);
        background-color: #1e1e1e;
    }

    .background-header .main-nav .menu-trigger.active span:after {
        background-color: #1e1e1e;
    }

    .visible {
        display: inline !important;
    }

    @media (max-width: 1200px) {
        .header-area .main-nav .nav li {
            padding-left: 5px;
            padding-right: 5px;
        }

    }

    @media (max-width: 767px) {
        .background-header .main-nav {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
            border-radius: 0px 0px 25px 25px;
            width: 100%;
        }

        .background-header .main-nav .nav,
        .header-area .main-nav .nav {
            background-color: #fff;
        }

        .background-header .main-nav .nav li a,
        .header-area .main-nav .nav li a {
            line-height: 50px;
            height: 50px;
            font-weight: 400;
            color: #1e1e1e;
            background-color: #fff;
            border-radius: 0px 0px 25px 25px;
        }

        .background-header .main-nav .nav li,
        .header-area .main-nav .nav li {
            border-top: 1px solid #ddd;
            background-color: #f1f0fe;
            height: 50px;
            border-radius: 0px 0px 25px 25px;
        }

        .header-area .main-nav .nav {
            height: auto;
            flex-basis: 100%;
        }

        .header-area .main-nav .logo {
            position: absolute;
            left: 30px;
            top: 0px;
        }

        .background-header .main-nav .logo {
            top: 0px;
        }

        .background-header .main-nav .border-button {
            top: 0px !important;
        }

        .header-area .main-nav .border-button {
            position: absolute;
            top: 15px;
            right: 70px;
        }

        .header-area.header-sticky .nav li a:hover,
        .header-area.header-sticky .nav li a.active {
            color: #ee626b !important;
            opacity: 1;
        }

        .header-area.header-sticky .nav li.search-icon a {
            width: 100%;
        }

        .header-area .nav li:last-child a {
            background-color: transparent !important;
            font-weight: 300 !important;
            text-transform: capitalize !important;
        }

        .header-area {
            padding: 0px 15px;
            height: 80px;
            box-shadow: none;
            text-align: center;
        }

        .header-area .container {
            padding: 0px;
        }

        .header-area .logo {
            margin-left: 0px;
        }

        .header-area .menu-trigger {
            display: block !important;
        }

        .header-area .main-nav {
            overflow: hidden;
        }

        .header-area .main-nav .nav {
            float: none;
            width: 100%;
            display: none;
            -webkit-transition: all 0s ease 0s;
            -moz-transition: all 0s ease 0s;
            -o-transition: all 0s ease 0s;
            transition: all 0s ease 0s;
            margin-left: 0px;
        }

        .header-area .main-nav .nav li:first-child {
            border-top: 1px solid #eee;
        }

        .header-area.header-sticky .nav {
            margin-top: 80px !important;
        }

        .background-header.header-sticky .nav {
            margin-top: 80px !important;
        }

        .header-area .main-nav .nav li {
            width: 100%;
            background: #fff;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

    }
</style>

<script>
    // Initialization for ES Users
    import {
        Navbar,
        Collapse,
        Ripple,
        initMDB
    } from "mdb-ui-kit";

    initMDB({
        Navbar,
        Collapse,
        Ripple
    });
</script>

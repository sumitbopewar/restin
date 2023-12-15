<style>
    .custom-navbar {
        position: sticky;
        top: 0;
    }

    .custom-navbar .custom-navbar-nav li a {
        font-weight: 500;
        /* color: #ffffff !important; */
        opacity: 0.5;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        position: relative;
    }

    @media (min-width: 992px) and (max-width:1199px) {
        .navbar-expand-lg .navbar-nav {
            font-size: 10px;
        }
    }
</style>
<div class="container-fluid p-0 m-0">
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-lg navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ Route('/') }}"><img src="{{ asset('/layouts/img/logo copy.png') }}"
                    alt="" width="110px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <style>
                .dropdown-menu {
                    border-radius: none;
                    background: #eeeee4 important;
                }
            </style>
            <div class="container-fluid" style="
                             width: 100%;">
                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item  {{ request()->is('/') ? 'active' : '' }} wow bounceInUp" data-wow-delay="0.1s">
                            <a class="nav-link fw-bold "
                                aria-current="page" href="{{ route('/') }}">Home</a>
                        </li>

                        <li class="wow bounceInUp {{ request()->is('guide_to_good_sleep') ? 'active' : '' }}" data-wow-delay="0.3s"><a
                                class="nav-link"
                                href="{{ route('guide_to_good_sleep') }}">Guide To Good Sleep</a></li>

                        <li class="dropdown wow bounceInUp {{ request()->is('homemattress') || request()->is('hospital') || request()->is('hotel') ? 'active' : '' }}" data-wow-delay="0.4s"><a
                                class="nav-link fw-bold dropdown-toggle"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mattress
                            </a>
                            <ul class="dropdown-menu" id="d12" style="background: #eeeee4; border-radius:0;">
                                <li><a class="dropdown-item text-dark fw-bold" href="{{ route('homemattress') }}"
                                        style="color:black !important;">Home Mattress</a></li>

                                <li><a class="dropdown-item text-dark fw-bold" href="{{ route('hospital') }}"
                                        style="color:black !important;">Hospital Mattress</a></li>

                                <li><a class="dropdown-item text-dark fw-bold" href="{{ route('hotel') }}"
                                        style="color:black !important;">Hotel Mattress</a></li>
                            </ul>
                        </li>

                        <li class="nav-item wow bounceInUp {{ request()->is('royal') ? 'active' : '' }}" data-wow-delay="0.5s">
                            <a class="nav-link fw-bold"
                                href="{{ route('royal') }}">Royale Mattress</a>
                        </li>

                        <li class="nav-item dropdown wow bounceInUp {{ request()->is('pillows') || request()->is('protector') || request()->is('topper') ? 'active' : '' }}" data-wow-delay="0.6s" id="d13">
                            <a class="nav-link fw-bold dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sleep Essentials
                            </a>
                            <ul class="dropdown-menu" id="d14" style="background: #eeeee4; border-radius: 0;">
                                <li><a class="dropdown-item" href="{{ route('pillows') }}"
                                        style="color:black !important;">Pillows</a></li>

                                <li><a class="dropdown-item" href="{{ route('protector') }}"
                                        style="color:black !important;">Protector</a></li>

                                <li><a class="dropdown-item" href="{{ route('topper') }}"
                                        style="color:black !important;">Topper</a></li>
                            </ul>
                        </li>

                        <li class="nav-item wow bounceInUp {{ request()->is('contact') ? 'active' : '' }}" data-wow-delay="0.7s">
                            <a class="nav-link fw-bold"
                                href="{{ route('contact') }}">Contact</a>
                        </li>

                        <?php
                        $user_id = Auth::id();
                        $cartItems = DB::table('carts')
                            ->where('user_id', $user_id)
                            ->get();
                        ?>

                        <li class="align-self-center wow bounceInUp {{ request()->is('cart') ? 'active' : '' }}" data-wow-delay="0.8s">
                            <a class="nav-link" href="{{ route('cart') }}"><img
                                    src="{{ asset('assets_new/images/cart.svg') }}">
                                <sup class="badge bg-danger {{ request()->is('cart') ? 'active_page' : '' }}">
                                    {{ count($cartItems) }}
                                </sup>
                            </a>
                        </li>

                        <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item wow bounceInUp" data-wow-delay="0.9s">
                                    {{-- <a class="nav-link fw-bold  px-2" href="{{ route('login') }}" style="color: #0e14a7;">
                                        <button type="button" class="btn btn-primary rounded-0">
                                            {{ __('Login') }}
                                        </button> </a> --}}
                                    <a class="nav-link" href="{{ route('login') }}"><img
                                            src="{{ asset('assets_new/images/user.svg') }}"></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown text-center wow bounceInUp {{ request()->is('profile') || request()->is('my_order') ? 'active' : '' }}" data-wow-delay="1.0s">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img
                                            src="{{ asset('assets_new/images/user.svg') }}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item border-bottom fw-bold" href="{{ route('profile') }}"
                                        style="color:black !important;">
                                        Profile
                                    </a>
                                    <a class="dropdown-item border-bottom fw-bold" href="{{ route('my_order') }}"
                                        style="color:black !important;">
                                        My Order
                                    </a>
                                    <a class="dropdown-item fw-bold" href="{{ route('logout') }}"
                                        style="color:black !important;"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                </div>
            </div>

    </nav>

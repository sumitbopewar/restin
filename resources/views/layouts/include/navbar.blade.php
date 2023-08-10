<style>
@media screen and (min-width: 1600px) {
    .header_nav {
        padding-right: 5rem !important;
        padding-left: 5rem !important;
    }
}

@media screen and (min-width: 2500px) {
    .header_nav {
        padding-right: 6rem !important;
        padding-left: 9rem !important;
    }
}

@media screen and (max-width: 600px) {
    .header_nav {
        padding-right: 0rem !important;
        padding-left: 0rem !important;
        margin-right: 2rem !important;
        margin-left: 1rem !important;
    }
}

.badge {
    padding: 0.1rem 0.3rem;
    font-size: .60em !important;
}
</style>


<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow p-0" style="background-color:#a5cbe7">
    <div class="container-fluid px-5 mx-5 header_nav">
        <a class="navbar-brand" href="#"><img src="{{ asset('/layouts/img/logo.png') }}" width="100px" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-4">

                <li class="nav-item">
                    <a class="nav-link fw-bold  {{ request()->is('/') ? 'active_page' : ''}}" aria-current="page"
                        href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->is('guide_to_good_sleep') ? 'active_page' : ''}}"
                        href="{{route('guide_to_good_sleep')}}">Guide To Good Sleep</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle {{ request()->is('homemattress') || request()->is('hospital') || request()->is('hotel') ? 'active_page' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mattress
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('homemattress')}}">Home Mattress</a></li>

                        <li><a class="dropdown-item" href="{{route('hospital')}}">Hospital Mattress</a></li>

                        <li><a class="dropdown-item" href="{{route('hotel')}}">Hotel Mattress</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->is('royal') ? 'active_page' : ''}}"
                        href="{{route('royal')}}">Royal Mattress</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sleep Essentials
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('pillows')}}">Pillows</a></li>

                        <li><a class="dropdown-item" href="{{route('protector')}}">Protector</a></li>

                        <li><a class="dropdown-item" href="{{route('topper')}}">Topper</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->is('contact') ? 'active_page' : ''}}"
                        href="{{route('contact')}}">Contact</a>
                </li>

                <li class="align-self-center">
                    <a href="{{route('cart')}}"><i class="bi bi-cart3 text-dark"><sup
                                class="badge bg-danger">1</sup></i>

                    </a>
                </li>

                <li class="">
                    <a class="nav-link fw-bold  px-2" href="#" style="color: #0e14a7;">
                        <button type="button" class="btn btn-light rounded-0" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Login
                        </button> </a>

                </li>

            </ul>

        </div>
    </div>
</nav>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog modal-dialog-centered" style="max-width:980px;">
        <div class="modal-content">

            <div class="row" style="height:500px;">
                <div class="col-6"
                    style="background-image: url('{{ asset('layouts/img/c2.png') }}');;background-size:cover;">

                </div>
                <div class="col-6">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> --}}
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Create new account') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
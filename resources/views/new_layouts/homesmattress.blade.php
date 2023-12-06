@extends('new_layouts.include.app')

	@section('content')
		<style>
			.page-header {
    			background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url('../../layouts/img/back-2.jpeg') center center no-repeat;
    			background-size: cover;
			}
			.page-header .breadcrumb-item a,
			.page-header .breadcrumb-item+.breadcrumb-item::before {
    			color: #F6F7F8;
			}
			.page-header .breadcrumb-item a:hover,
			.page-header .breadcrumb-item.active {
    			color: #fff;
			}
			.display-4{
				font-weight: 700;
			}
			.breadcrumb li{
				font-weight: 700;
				font-size: 15px;
			}
 		</style>
 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Home Mattress</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home Mattress</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

	<!-- Start Product Section -->
	<div class="product-section">
		<div class="container">
			<div class="row">
				
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('homemattress')}}">
				<img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Mattress</h3>
				<!-- <strong class="product-price">Elite</strong> -->

				<span class="icon-cross">
					<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 1 -->

		<!-- Start Column 2 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('homemattress')}}">
				<img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Mattress</h3>
				<!-- <strong class="product-price">Elite</strong> -->

				<span class="icon-cross">
					<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 2 -->

		<!-- Start Column 3 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('royal')}}">
				<img src="{{ asset('layouts/img/home_royale.png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Royale Series</h3>
				<!-- <strong class="product-price">Royale Rest</strong> -->

				<span class="icon-cross">
				  <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 3 -->

		<!-- Start Column 4 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('royal')}}">
				<img src="{{ asset('layouts/img/home_royale.png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Royale Series</h3>
				<!-- <strong class="product-price">Royale Rest</strong> -->

				<span class="icon-cross">
				  <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 4 -->

	</div>
	<div class="row mt-4">

		<!-- Start Column 1 -->
		<!-- <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
			<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
			<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
				vulputate velit imperdiet dolor tempor tristique. </p>
			<p><a href="" class="btn">Explore</a></p>
		</div> -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('homemattress')}}">
				<img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Mattress</h3>
				<!-- <strong class="product-price">Elite</strong> -->

				<span class="icon-cross">
					<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 1 -->

		<!-- Start Column 2 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('homemattress')}}">
				<img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Mattress</h3>
				<!-- <strong class="product-price">Elite</strong> -->

				<span class="icon-cross">
					<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 2 -->

		<!-- Start Column 3 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="{{route('royal')}}">
				<img src="{{ asset('layouts/img/home_royale.png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Royale Series</h3>
				<!-- <strong class="product-price">Royale Rest</strong> -->

				<span class="icon-cross">
				  <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				</span>
			</a>
		</div>
		<!-- End Column 3 -->
	</div>
</div>
</div>
<!-- End Product Section -->

@endsection
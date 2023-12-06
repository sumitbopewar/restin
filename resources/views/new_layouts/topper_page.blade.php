@extends('new_layouts.include.app')

@section('content')
<!-- Start Hero Section -->

<style>
			.page-header {
    			background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url('../../layouts/img/Topper Header(1).png') center center no-repeat;
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
			.we-help-section{
				padding: 0px;
			}
 		</style>
 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Topper</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Topper</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

       <!-- <style>
			.hero{
				background:url('../../layouts/img/Topper Header(1).png');
				background-size: cover;
				background-repeat: cover;
			}
		</style> -->
			<!-- <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt fw-bold">
								<h1>Topper</h1>
								<p class="mb-4 text-white">Mattress Toppers are the best way to enhance the Comfort of your Used Mattress without spending too much. Available in 2 models :Premium & Memory.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p> 
							</div>
						</div>
					</div>
				</div>
			</div> -->
       <!-- End Hero Section -->

<div class="we-help-section">
    <div class="container">
		<div class="row justify-content-around">
				<p class="mb-4">Mattress Toppers are the best way to enhance the Comfort of your Used Mattress without spending too much. Available in 2 models :Premium & Memory.</p>
		    <div class="col-lg-5 mb-5 mb-lg-0">
			    <h2 class="section-title mb-4">Premium</h2>
			    <hr>
				<p>
					This High density Pu foam mattress topper provides FIRM support to give you a good night sleep. It replaces the discomfort of your sagged mattress as the Topper helps in providing all body support while sleeping. It adds to your sleeping experience and is comfortable for all kinds of sleepers.
           		</p>
				<h6>Firmness: Medium</h6>
				<ul class="list-unstyled custom-list my-4">
					<li>The mattress topper is made of High density Pu Foam.</li>
					<li>Fabric quality is Premium Damask Jaquard.</li>
					<li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
					<li>This mattress topper comes with 3 years of warranty.</li>
			    </ul>
			</div>
		    <div class="col-lg-7 ps-lg-5">
				<h2 class="section-title mb-4">Memory</h2>
				<hr>
				<p>
					This Memory foam mattress topper lets you tune the firmness and support of your mattress to give you the sleeping experience you have dreamed of. The topper is a good choice for sleepers with back, neck, and shoulder pain as well. No more tossing and turning all night long as RESTIN memory foam mattress topper is designed with a universal adaptive feel to provide the cooling, contouring and comfort so that you will wake up refreshed and rejuvenated regardless of your sleeping style
           		</p>
				<h6>Firmness: Medium Soft</h6>
				<ul class="list-unstyled custom-list my-4">
					<li>The mattress topper is made of memory foam.</li>
					<li>It comes with a detacable top cover.</li>
					<li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
					<li>This mattress topper comes with 3 years of warranty.</li>
					<li>It contours the body and distributes body weight evenly.</li>
			    </ul>
			</div>
		</div>

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
			  <div class="row">
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="{{route('homemattress')}}">
							<img src="{{ asset('storage/images/8caef5714c5daf26113c964b31472ce2.jpg') }}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Mattress</h3>
							<span class="icon-cross">
								<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
							</span>
						</a>
					</div>
				<!-- End Column 1 -->
			</div>
		</div>
		<!-- End Product Section -->

	</div>
</div>

 <style>
	.product-section{
		/* padding:0px; */
		padding-top:0px; padding-bottom:2rem;
	}
 </style>
@endsection
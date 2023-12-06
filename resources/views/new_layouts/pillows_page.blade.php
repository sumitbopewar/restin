@extends('new_layouts.include.app')

@section('content')
		<style>
			.page-header {
    			background: linear-gradient(rgb(1 10 53 / 37%), rgb(1 10 53 / 36%)), url('../../layouts/img/Pillow Header.png') center center no-repeat;
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
			.product-section{
				/* padding:0px; */
				padding-top:3rem;
				padding-bottom: 2rem;
			}
 		</style>
 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Pillows</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pillows</li>
                </ol>
            </nav>
        </div>
    </div>
 <!-- Page Header End -->

 <!-- We Help Section Start -->
<div class="we-help-section">
<div class="container">
	<div class="row justify-content-between">
		<div class="col-lg-7 mb-5 mb-lg-0">
          <img class="para-img img-fluid" src="{{asset('layouts/img/piilowB.png')}}" alt="" style="padding: 0px; height:auto; width:100%">
		</div>
		<div class="col-lg-5 ps-lg-5">
		    <p class="mb-4">The perfect mattress should always have the perfect pillows to accompany it !
             Your investment in your sleep has only been met halfway if you don’t have great pillows, too.</p>
			<h2 class="section-title mb-4">Fiber Pillows</h2>
			<p>
			Pillows are filled with hypoallergenic polyester fibers-Polyester is a synthetic fabric engineered to mimic the softness, coolness, and breathability of natural cotton. They come in a wide range of sizes, as well as loft and firmness settings.
            It provides good support, is light weight, and spot washable.
           </p>
           <img src="{{asset('layouts/img/Fiber Pillow Image.png')}}" class="product_img p-0 img-fluid" alt="Pillow img">
		</div>
	</div>

    <div class="row justify-content-between my-5">
        <div class="col-lg-5">
			<h2 class="section-title mb-4">Memory Foam Pillows</h2>
			<p>
                <strong>Prevents cricks in your neck –</strong> The dense material of a memory foam pillow prevents your neck from bending in awkward directions. This is why they are great to use when traveling.
            </p>
            <p>
                <strong>Keeps your spine aligned –</strong> As the memory foam pillow prevents your neck from bending, it allows your spine to remain aligned.
            </p>
            <p>
                <strong>Molds to the shape of your head –</strong> Memory foam pillows contour to the shape of your head, just as a memory foam mattress contours itself to your body.
            </p>
            <p>
                <strong>Memory foam pillows –</strong> Available in a variety of shapes, which is convenient because the type of pillow needed will vary based upon your sleeping position.
            </p>
		</div>
        <div class="col-lg-7 ps-lg-5">
        <img src="{{asset('layouts/img/Memory Foam Pillows (1).png')}}" class="img-fluid" alt="Pillow img" style="width:100%;">
           <div class="div mt-lg-4">
           <p>
                <strong>No adjusting –</strong> Memory foam does not require flipping, fluffing, or any of the adjustments of a regular pillow, as it will retain its shape and size.
            </p>
            <p>
                <strong>Reduces snoring –</strong> Regular pillows tilt your head upwards, causing air passages to close, However, memory foam pillows contour to your neck, allowing your air passages to remain open.
            </p>
           </div>
        </div>
	</div>
    <div class="row justify-content-between align-items-center">
		<div class="col-lg-7 mb-5 mb-lg-0">
         <img class="para-img img-fluid" src="{{asset('layouts/img/latex_pill .png')}}" alt="" style="padding: 0px; width:100%">
		</div>
		<div class="col-lg-5 ps-lg-5">
			<h2 class="section-title mb-4">Restin Latex Pillows</h2>
			<p>
			Pillows are made of natural rubber latex and are soft and comfortable to use. The structure is designed to ensure to maintain the unform shape of the pillow and provide ergonomic and comfortable support for the head, neck and shoulders.

            This Ergonomic pillow can be adjusted according to your shape, allowing your shoulders, neck and head to rest in a natural position. When you wake up, the pillow will return to its original shape without any deformation. It has no no peculiar smell. The Outer fabric is made of removable bamboo fibre and polyester and can be machine washed.
           </p>
           <!-- <img src="{{asset('layouts/img/Fiber Pillow Image.png')}}" class="product_img p-0 img-fluid" alt="Pillow img" style="height: 300px; width: 560px;"> -->
		</div>
	</div>
	
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
   </div>
</div>
</div>
<!-- End We Help Section -->
@endsection
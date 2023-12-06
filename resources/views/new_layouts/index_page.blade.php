@extends('new_layouts.include.app')

@section('content')
<!-- Start Hero Section -->
<div class="hero heroImage">
<div class="container" id="hero">
	<div class="row justify-content-between">
		<div class="col-lg-5">
			<div class="intro-excerpt">
				<h1>The Mattress <span clsas="d-block">that Refreshes you</span></h1>
				<!-- <h2 class="text-white">The Sleep Is the Best Meditation</h2> -->
				<!-- <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
					vulputate velit imperdiet dolor tempor tristique.</p> -->
				<!-- <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
						class="btn btn-white-outline">Explore</a></p> -->
			</div>
		</div>
		<!-- public/assets_new/images/ -->
		<!-- <div class="col-lg-7">
			<div class="hero-img-wrap">
				<img src="{{ asset('assets_new/images/couch.png') }}" class="img-fluid">
			</div>
		</div> -->
	</div>
</div>
</div>
<!-- End Hero Section -->

<style>
	
	.hero.heroImage{
	  width: 100%; height: 100%;
      background: url('../../assets_new/images/A.png');
	  background-size: cover;
      background-repeat: no-repeat;
      background-position: 100%;
    }

	@media screen and (max-width: 660px) {
		.hero.heroImage{
			height: 40vh;
		}
		.hero h1 {
        padding-top: 48px;
        font-size: 38px;
        }
	}
	@media screen and (min-width: 661px) and (max-width: 1000px){
		.hero.heroImage{
			height: 52vh;
		}
		.hero h1 {
        font-size: 61px;
        padding-top: 109px;
		}
	}

	@media screen and (min-width: 1001px){
		.hero.heroImage{
			height: 52vh;
			padding: 20px 50px;
			background-position: 42% 31%;
		}
		.intro-excerpt{
			margin-top: 118px;
			text-shadow: 1px 1px 2px black;
	    }
	}

	@media screen and (min-width: 1301px){
		.hero.heroImage{
			height: 70vh;
			padding: 20px 50px;
			background-position: 42% 31%;
		}
	}

	.why-choose-section{
		padding-bottom: 0px !important;
	}
	@media screen and (max-width: 550px) {
		.why-choose-section .feature .icon img{
			width: 50px; height: 50px;
		}
	}
</style>
<!-- Start Why Choose Us Section -->
<!-- <div class="why-choose-section p-1 m-0" style="background-color: lightgray;">
     <div class="container" style="overflow:hidden">
	       <div class="row justify-content-between">
				<div class="col-3">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-4.png') }}" alt="Image" class="img-fluid">
						</div>
						<h3>Comfort</h3>
					</div>
				</div>

				<div class="col-3">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-1.png') }}" alt="Image" class="img-fluid">
						</div>
						<h3>Ergonomic</h3>
					</div>
				</div>
				<div class="col-3">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-2.png') }}" class="img-fluid">
						</div>
						<h3>Durable</h3>
					</div>
				</div>
				<div class="col-3">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-3.png') }}" alt="Image" class="imf-fluid">
						</div>
						<h3>Hygenic</h3>
					</div>
				</div>
		  </div>
	 </div>
</div> -->
<!-- End Why Choose Us Section -->

<!-- Start Product Section -->
<div class="product-section">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
					<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
						vulputate velit imperdiet dolor tempor tristique. </p>
					<!-- <p><a href="shop.html" class="btn">Explore</a></p> -->
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				   <a class="product-item" href="{{route('homemattress')}}">
					  <img src="{{ asset('layouts/img/home_elite .png') }}" class="img-fluid product-thumbnail">
				      <h3 class="product-title">Mattress</h3>

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
				      <span class="icon-cross">
				        <img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
				      </span>
			        </a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="{{route('pillows')}}">
						<img src="{{ asset('layouts/img/pillowss.png') }}" class="img-fluid product-thumbnail">
						<h3 class="product-title">Sleep Essentials</h3>
						<span class="icon-cross">
				  			<img src="{{ asset('layouts/img/icons8-plus.svg') }}" class="img-fluid">
						</span>
			    	</a>
				</div>
				<!-- End Column 4 -->
			</div>
		</div>
	</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6 mb-4">
					<!-- <h2 class="section-title">Why Choose Us</h2>
					<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit
						imperdiet dolor tempor tristique.</p> -->

					<div class="row my-5">
						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{ asset('layouts/img/icon-4.png') }}" alt="Image" class="img-fluid">
								</div>
								<h3>Comfort</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{ asset('layouts/img/icon-1.png') }}" alt="Image" class="img-fluid">	
								</div>
								<h3>Ergonomic</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{ asset('layouts/img/icon-2.png') }}" class="img-fluid">
								</div>
								<h3>Durable</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{ asset('layouts/img/icon-3.png') }}" alt="Image" class="imf-fluid">
								</div>
								<h3>Hygenic</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
					  <img src="{{ asset('layouts/img/p1.jpg') }}" alt="Image" class="imf-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>
<!-- End Why Choose Us Section -->

<style>
	.icon img{
		/* mix-blend-mode: ; */
		width: 70px; height: 70px;
	}
</style>

<!-- Start We Help Section -->
<div class="we-help-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="{{ asset('layouts/img/folding_bed.jpg') }}" alt="Untree.co"></div>
					<div class="grid grid-2"><img src="{{ asset('layouts/img/c-3.jpg') }}" alt="Untree.co"></div>
					<div class="grid grid-3"><img src="{{ asset('layouts/img/royal-img2.jpg') }}" alt="Untree.co"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">Are you planning to buy a new mattress?</h2>
				<p>
				Choosing the right mattress can be confusing as there are plenty of brands available in the market. Many people may not even be aware of the types, and qualities required for the right mattress. A mattress can impact a person’s sleep, and provide proper support to the body, in turn, ensuring healthy sleep posture.
				</p>
				<p>
				When you visit your local mattress store, you have hundreds of options for mattress designs and materials. You can choose between mattresses of various firmness levels, and have the choice of a memory foam mattress, spring mattress, latex mattress, or an organic, all-natural mattress. You can also find mattresses with advanced features that allow you to adjust the position of the bed to improve your posture and sleep.</p>
				
				<!-- <ul class="list-unstyled custom-list my-4">
					<li>Donec vitae odio quis nisl dapibus malesuada</li>
					<li>Donec vitae odio quis nisl dapibus malesuada</li>
					<li>Donec vitae odio quis nisl dapibus malesuada</li>
					<li>Donec vitae odio quis nisl dapibus malesuada</li>
				</ul> -->
				<!-- <p><a herf="#" class="btn">Explore</a></p> -->
			</div>
		</div>
	</div>
</div>
<!-- End We Help Section -->

<!-- Start Testimonial Slider -->
	<div class="testimonial-section">
		<div class="container-fluid">
			<div class="row">
				<video class="img-fluid" autoplay loop muted>
				<source src="{{ asset('assets_new/videos/Sequence 04.mp4') }}" type="video/mp4" />
				</video>
			</div>
		</div>
	</div>
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
<style>
	@media screen and (max-width: 500px) {
		.product-section {
          	padding: 0.5rem 0;
        }
		.why-choose-section {
    		padding: 1.2rem 0;
		}
	}
	.more{
		color: #0000ffb5;
	}
	.more:hover{
		color: white;
	}
</style>
<div class="blog-section">
<div class="container">
	<div class="row mb-5">
		<div class="col-md-6">
			<h2 class="section-title">Recent Blog</h2>
		</div>
		<div class="col-md-6 text-start text-md-end">
			<a href="#" class="more">View All Posts</a>
		</div>
	</div>

	<div class="row">

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="{{ asset('layouts/img/Onyx.png') }}" alt="Image"
						class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#" class="text-dark">Onyx</a></h3>
					<!-- <div class="meta">
						<span>by <a href="#" class="text-dark">Kristin Watson</a></span> <span>on <a href="#" class="text-dark">Dec 19,
								2021</a></span>
					</div> -->
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="{{ asset('layouts/img/Royal Memory (A).png') }}" alt="Image"
						class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#" class="text-dark">Royale Memory</a></h3>
					<!-- <div class="meta">
						<span>by <a href="#" class="text-dark">Robert Fox</a></span> <span>on <a href="#" class="text-dark">Dec 15, 2021</a></span>
					</div> -->
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="{{ asset('layouts/img/Pearl.png') }}" alt="Image"
						class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#" class="text-dark">Pearl</a></h3>
					<!-- <div class="meta">
						<span>by <a href="#" class="text-dark">Kristin Watson</a></span> <span>on <a href="#" class="text-dark">Dec 12,
								2021</a></span>
					</div> -->
				</div>
			</div>
		</div>

	</div>
</div>
</div>
<!-- End Blog Section -->

@endsection
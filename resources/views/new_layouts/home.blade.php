<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="{{ asset('assets_new/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_new/css/tiny-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_new/css/style.css') }}" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>
	

<!-- Start Hero Section -->
<div class="hero">
<div class="container" id="hero">
	<div class="row justify-content-between">
		<div class="col-lg-5">
			<div class="intro-excerpt">
				<h1><h1>The Mattress <span clsas="d-block">that Refreshes you</span></h1>
				<!-- <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
					vulputate velit imperdiet dolor tempor tristique.</p> -->
				<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
						class="btn btn-white-outline">Explore</a></p>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="hero-img-wrap">
				<img src="{{ asset('assets_new/images/couch.png') }}" class="img-fluid">
			</div>
		</div>
	</div>
</div>
</div>
<!-- End Hero Section -->
<!-- Start Product Section -->
<div class="product-section">
<div class="container">
	<div class="row">

		<!-- Start Column 1 -->
		<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
			<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
			<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
				vulputate velit imperdiet dolor tempor tristique. </p>
			<p><a href="" class="btn">Explore</a></p>
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
			<a class="product-item" href="{{route('pillows')}}">
				<img src="{{ asset('layouts/img/pillowss.png') }}" class="img-fluid product-thumbnail">
				<h3 class="product-title">Sleep Essentials</h3>
				<!-- <strong class="product-price">pillow</strong> -->

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

<style>
.feature .icon img{
	width: 100px;
	height: 100px;
	object-fit:cover;
}
.why-choose-section{
	width: 100%;
	height: 100%;
	
	/* background-size: cover; */
}
</style>
<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
<div class="container">
	<div class="row justify-content-between">
		<div class="col-lg-6">
			<h2 class="section-title">Why Choose Us</h2>
			<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit
				imperdiet dolor tempor tristique.</p>

			<div class="row my-5">
				<div class="col-6 col-md-6">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-4.png') }}" alt="Image" class="img-fluid">
						</div>
						<h3>Comfort</h3>
						<!-- <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
							vulputate.</p> -->
					</div>
				</div>

				<div class="col-6 col-md-6">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-1.png') }}" alt="Image" class="img-fluid">
						</div>
						<h3>Ergonomic</h3>
						<!-- <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
							vulputate.</p> -->
					</div>
				</div>

				<div class="col-6 col-md-6">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-2.png') }}" class="img-fluid">
						</div>
						<h3>Durable</h3>
						<!-- <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
							vulputate.</p> -->
					</div>
				</div>

				<div class="col-6 col-md-6">
					<div class="feature">
						<div class="icon">
							<img src="{{ asset('layouts/img/icon-3.png') }}" alt="Image" class="imf-fluid">
						</div>
						<h3>Hygenic</h3>
						<!-- <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
							vulputate.</p> -->
					</div>
				</div>

			</div>
		</div>

		<div class="col-lg-5">
			<div class="img-wrap">
				<img src="{{ asset('layouts/img/p1.jpg') }}" alt="Image" class="img-fluid">
			</div>
		</div>

	</div>
</div>
</div>
<!-- End Why Choose Us Section -->

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
			<p><a herf="#" class="btn">Explore</a></p>
		</div>
	</div>
</div>
</div>
<!-- End We Help Section -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
<div class="container">
	<div class="row">
		<div class="col-lg-7 mx-auto text-center">
			<h2 class="section-title">Testimonials</h2>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="testimonial-slider-wrap text-center">

				<div id="testimonial-nav">
					<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
					<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
				</div>

				<div class="testimonial-slider">

					<div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
											odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
											vulputate velit imperdiet dolor tempor tristique. Pellentesque
											habitant morbi tristique senectus et netus et malesuada fames ac
											turpis egestas. Integer convallis volutpat dui quis
											scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- END item -->

					<div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
											odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
											vulputate velit imperdiet dolor tempor tristique. Pellentesque
											habitant morbi tristique senectus et netus et malesuada fames ac
											turpis egestas. Integer convallis volutpat dui quis
											scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- END item -->

					<div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
											odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
											vulputate velit imperdiet dolor tempor tristique. Pellentesque
											habitant morbi tristique senectus et netus et malesuada fames ac
											turpis egestas. Integer convallis volutpat dui quis
											scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- END item -->

				</div>

			</div>
		</div>
	</div>
</div>
</div>
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
<style>
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
	background: #264394;
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
			<section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
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
				.footer-links{
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

								<img class="footer_icons" src="{{ asset('layouts/img/atm-card.png') }}" alt="">
								<img class="footer_icons" src="{{ asset('layouts/img/credit-card (1).png') }}"
									alt="">

								<img class="footer_icons" src="{{ asset('layouts/img/provider.png') }}" alt="">
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
							<a href="{{Route('homemattress')}}" class="text-white fs-6 fw-normal">Mattress</a>
							</p>
							<p>
								<a href="{{Route('royal')}}" class="text-white fs-6 fw-normal">Royal
									Mattress</a>
							</p>
							<p>
								<a href="{{Route('pillows')}}" class="text-white fs-6 fw-normal">Pillows</a>
							</p>
							<p>
								<a href="{{Route('protector')}}" class="text-white fs-6 fw-normal">Protector</a>
							</p>
							<p>
								<a href="{{Route('topper')}}" class="text-white fs-6 fw-normal">Topper</a>
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
								<a href="{{Route('conditions')}}" class="text-white fs-6 fw-normal">Terms &
									conditions</a>
							</p>
							<p>
								<a href="{{route('warranty')}}" class="text-white fs-6 fw-normal">Warranty</a>
							</p>
							<p>
								<a href="{{route('how_to_choose')}}" class="text-white fs-6 fw-normal">How to
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
							<p><i class="fas fa-envelope mr-3 text-white"></i><a
									href="mailto:customer@restin.in" class="ms-1 text-white fs-6 fw-normal">
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

	<!-- <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets_new/js/tiny-slider.js') }}"></script>
	<script src="{{ asset('assets_new/js/custom.js') }}"></script> -->
</body>

</html>
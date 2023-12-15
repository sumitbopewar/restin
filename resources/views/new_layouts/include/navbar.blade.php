
	<style>
		.custom-navbar {
    		position: sticky;
    		top: 0;
    		z-index: 999 !important;
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
		@media (min-width: 992px) and (max-width:1199px){
				.navbar-expand-lg .navbar-nav {
				font-size: 10px;
			}
		}	
	</style>
    <!-- <div class="container-fluid p-0 m-0"> -->
		<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-lg navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
	<a class="navbar-brand" href="index.html"><img src="{{ asset('/layouts/img/logo copy.png') }}" alt="" width="110px"></a>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
		aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<style>
		.dropdown-menu{
			border-radius: none;
			background: #eeeee4 important;
		}
	</style>
	<!-- <div class="container-fluid" style="
                                 width: 100%;"> -->
	<div class="collapse navbar-collapse" id="navbarsFurni" data-bs-toggle="#navbarsFurni">
		<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
			<li class="nav-item active">
			<a class="nav-link fw-bold  {{ request()->is('index_page') ? 'active_page' : '' }}" aria-current="page"
				href="{{ route('index_page') }}">Home</a>
			</li>
			<li><a class="nav-link {{ request()->is('good_sleep') ? 'active_page' : '' }}"
				href="{{ route('good_sleep') }}">Guide To Good Sleep</a></li>
			<li class="dropdown"><a class="nav-link fw-bold dropdown-toggle {{ request()->is('homesmattress') || request()->is('hospital') 
			|| request()->is('hotel') ? 'active_page' : '' }}"
				href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Mattress
			</a>
			<ul class="dropdown-menu" style="background: #eeeee4; border-radius:0;">
				<li><a class="dropdown-item text-dark fw-bold" href="{{ route('homesmattress') }}" style="color:black !important;">Home Mattress</a></li>

				<li><a class="dropdown-item text-dark fw-bold" href="{{ route('hospitalmattress') }}" style="color:black !important;">Hospital Mattress</a></li>

				<li><a class="dropdown-item text-dark fw-bold" href="{{ route('hotelsmattress') }}" style="color:black !important;">Hotel Mattress</a></li>
		   </ul>
		</li>
		<li class="nav-item">
			<a class="nav-link fw-bold {{ request()->is('royal') ? 'active_page' : '' }}"
			   href="{{ route('royalemattress') }}">Royale Mattress</a>
		</li>
		<li class="nav-item dropdown">
		   <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
				aria-expanded="false">
				Sleep Essentials
			</a>
			<ul class="dropdown-menu" style="background: #eeeee4; border-radius: 0;">
				<li><a class="dropdown-item" href="{{ route('pillows_page') }}" style="color:black !important;">Pillows</a></li>

				<li><a class="dropdown-item" href="{{ route('protector_page') }}" style="color:black !important;">Protector</a></li>

				<li><a class="dropdown-item" href="{{ route('topper_page') }}" style="color:black !important;">Topper</a></li>
			</ul>
		</li>
		<li class="nav-item">
		<a class="nav-link fw-bold {{ request()->is('contact_page') ? 'active_page' : '' }}"
			    href="{{ route('contact_page') }}" >Contact</a>
		</li>
			
		<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
			<li><a class="nav-link" href="{{ route('cart') }}"><img src="{{ asset('assets_new/images/cart.svg') }}"></a></li>
			<li><a class="nav-link" href="{{ route('login') }}"><img src="{{ asset('assets_new/images/user.svg') }}"></a></li>
		</ul>
	</div>
</div>
</nav>
<script>
  $(document).ready(function() {
    $('.navbar-toggler').on('click', function() {
      $('#navbarsFurni').toggleClass('show');
    });
  });
</script>

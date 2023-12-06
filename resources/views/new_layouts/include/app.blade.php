<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="{{ asset('assets_new/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_new/css/tiny-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_new/css/style.css') }}" rel="stylesheet">
   
    <title>Restin Mattress</title>
    @yield('style')
</head>

<body>
<div class="container-fluid p-0 m-0" style="overflow:hidden;">
    @include('new_layouts.include.navbar')

    <div class="container-fluid p-0 m-0" style="overflow:hidden">
        @yield('content')
    </div>

    @include('new_layouts.include.footer')
</div>
    @stack('plugin-scripts')
    <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets_new/js/tiny-slider.js') }}"></script>
	<script src="{{ asset('assets_new/js/custom.js') }}"></script>
    @stack('custom-scripts')

    @yield('script')
    
<script src="https://unpkg.com/wow.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
        $('.dropdown').hover(
                function() {
                    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
                },
                function() {
                    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
                }
          );
    </script>
    

</body>

</html>


  

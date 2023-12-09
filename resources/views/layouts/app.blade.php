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
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
    <title>Restin Mattress</title>
    @yield('style')
</head>

<body>
    <div class="container-fluid p-0 m-0" style="overflow:hidden;">
        @include('layouts.include.navbar')

        <div class="container-fluid p-0 m-0" style="overflow:hidden">
            @yield('content')
        </div>

        @include('layouts.include.footer')
    </div>
    @stack('plugin-scripts')
    <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets_new/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

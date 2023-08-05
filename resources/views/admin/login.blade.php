<!DOCTYPE html>
<html>

<head>
    <title> Admin Login </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}">
    <!-- end common css -->

    @stack('style')
</head>

<body>

    <div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one"
     style="background-image: url({{ url(asset('admin_assets/assets/images/auth/login_1.jpg')) }});
            background-size: cover;">

        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    @if($errors->has('email'))
                        <div class="alert alert-danger" id="error-message">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="label">Username</label>
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Username" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="*********" autocomplete="current-password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Keep me
                                    signed in </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- base js -->
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('admin_assets/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/todolist.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')



    @push('plugin-scripts')
        <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    @endpush

    @push('custom-scripts')
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    @endpush
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
          setTimeout(function() {
              $('#error-message').fadeOut('slow');
          }, 5000);
      });
    </script>
</body>

</html>

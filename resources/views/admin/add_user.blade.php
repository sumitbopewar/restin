@extends('admin.admin_main')

@push('plugin-styles')
  <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/plugin.css') }}">
   
@endpush

@section('content')


<div class="container-fluid py-4">

    <!-- add product dection -->

    <div class="row my-4">
        <div class="col-12">
            <div class="card mb-4">
                @if (session('success'))
                <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="card-header pb-0">
                    <h6>Add User</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form class="px-5" action="{{ route('admin_register') }}" method="POST">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3 mx-3 w-50">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 mx-3 w-50">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="mb-3 mx-3 w-50">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 mx-3 w-50">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="role_access">Access Role</label><br>
                                        @if ($errors->has('role_access'))
                                            <div>
                                                <span class="text-danger"
                                                    role="alert"><strong>{{ $errors->first('role_access') }}</strong></span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            @foreach ($permissions as $permission)
                                                <div class="col-md-4">
                                                    <div class="form-check-inline form-check">
                                                        <label class="">
                                                            @if (!empty($user))
                                                                <input type="checkbox" name="role_access[]"
                                                                    class="form-check-input"
                                                                    value="
                                                                    {{ $permission->name }}
                                                                    "
                                                                    @if ($user->hasPermissionTo($permission->name)) checked @endif
                                                                    >
                                                            @else
                                                                <input type="checkbox" name="role_access[]"
                                                                    class="form-check-input"
                                                                    value="
                                                                    {{ $permission->name }}
                                                                    "
                                                                    @if (is_array(old('role_access')) && in_array($permission->name, old('role_access'))) checked @endif
                                                                    >
                                                            @endif
                                                            {{ $permission->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add product section  -->





</div>


@endsection

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
                $('#success-message').fadeOut('slow');
            }, 5000);
        });
    </script>
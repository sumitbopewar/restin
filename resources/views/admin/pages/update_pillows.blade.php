@extends('admin.admin_main')

@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/plugin.css') }}">
@endpush

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />

@section('content')
    <div class="container-fluid py-4">
        <!-- add size -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row my-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Update Pillows</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="{{ url('pillows/update/' . $pillow->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="product" class="form-label"> Product Name</label>
                                    <input type="text" class="form-control" name="product" id="product" value="{{$pillow->product}}" required>

                                </div>
                                <div class="mb-3 mx-3 w-50">
                                    <label for="category" class="form-label">Category </label>

                                    <select class="form-select" id="category" name="category" aria-label="Default select example" required>
                                        <option value="JOY" {{$pillow->category == 'JOY' ? 'selected' : '' }}>JOY</option>
                                        <option value="PRIME" {{$pillow->category == 'PRIME' ? 'selected' : '' }}>PRIME</option>
                                        <option value="REGULAR/CONTOUR" {{$pillow->category == 'REGULAR/CONTOUR' ? 'selected' : '' }}>REGULAR / CONTOUR</option>
                                        <option value="ROYAL" {{$pillow->category == 'ROYAL' ? 'selected' : '' }}>ROYAL</option>
                                    </select>


                                </div>

                            </div>
                            <div class="d-flex">
                            
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_mm" class="form-label">Size In MM</label>
                                     <select class="form-select" id="size_mm" name="size_mm"
                                        aria-label="Default select example" required>
                                        <option value="">Select Size </option>
                                        @foreach ($size_mm as $item)
                                            <option value="{{ $item['id'] }}"{{ $pillow['size_mm'] == $item['id'] ? 'selected' : '' }}
                                            >{{ $item['size_length_mm'] }} x {{ $item['size_breadth_mm'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_inch" class="form-label">Size in INCH</label> 
                                    <select class="form-select" id="size_inch" name="size_inch"
                                        aria-label="Default select example" required>
                                        <option value="">Select Size </option>
                                        @foreach ($size_inch as $item)
                                            <option value="{{ $item['id'] }}"{{ $pillow['size_inch'] == $item['id'] ? 'selected' : '' }}
                                            >{{ $item['size_length'] }} x {{ $item['size_breadth'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                
                                 <div class="mb-3 mx-3 w-50">
                                    <label for="price" class="form-label"> Product Price</label>
                                    <input type="text" class="form-control" name="price" id="price" value="{{$pillow->price}}" required>

                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="image" class="form-label"  value="{{$pillow->image}}"> Product Image</label>
                                    <input type="file" class="form-control" name="image" id="image" >
                                    <img src="{{ asset('storage/images/' . $pillow->image) }}" alt="product not found"
                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                           

                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="image2" class="form-label"  value="{{$pillow->image2}}"> Product Image 2</label>
                                    <input type="file" class="form-control" name="image2" id="image2" >
                                  <img src="{{ asset('storage/images/' . $pillow->image2) }}" alt="product not found"
                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                      
                                </div>
                                
                                
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('adm_pillows')}}"><button type="button" class="btn btn-dark">Back</button></a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- add size   -->

    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var duration = 5000;
            $('.alert').delay(duration).fadeOut();

            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush

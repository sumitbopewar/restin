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
                        <h6>Add Hotel Mattress</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="{{ url('hotel_mattress/update/' . $hotel_mat->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="collection" class="form-label">Collection</label>
                                    <select class="form-select" id="collection" name="collection"
                                        aria-label="Default select example">
                                        <option value="Activa"{{ $hotel_mat->collection == 'Activa' ? 'selected' : '' }}>
                                            Activa</option>
                                        <option value="Comfort"{{ $hotel_mat->collection == 'Comfort' ? 'selected' : '' }}>
                                            Comfort</option>
                                        <option
                                            value="OrthoSpine"{{ $hotel_mat->collection == 'OrthoSpine' ? 'selected' : '' }}>
                                            OrthoSpine</option>
                                        <option value="Hybrid"{{ $hotel_mat->collection == 'Hybrid' ? 'selected' : '' }}>
                                            Hybrid</option>
                                        <option value="Wellness"{{ $hotel_mat->collection == 'Wellness' ? 'selected' : '' }}>
                                            Wellness</option>
                                        <option
                                            value="Visco Memory"{{ $hotel_mat->collection == 'Visco Memory' ? 'selected' : '' }}>
                                            Visco Memory</option>
                                        <option value="Spring"{{ $hotel_mat->collection == 'Spring' ? 'selected' : '' }}>
                                            Spring</option>
                                    </select>

                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="master_size_id" class="form-label">Master Size</label>

                                    <select class="form-select" id="master_size_id" name="master_size_id"
                                        aria-label="Default select example" required>
                                        @foreach ($msize as $item)
                                            <option value="{{ $item['id'] }}"
                                                {{ $hotel_mat['master_size_id'] == $item['id'] ? 'selected' : '' }}>
                                                {{ $item['size_name'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_mm" class="form-label">Size In MM</label>

                                    <select class="form-select" id="size_mm" name="size_mm"
                                        aria-label="Default select example" required>
                                        @foreach ($sizemm as $item)
                                            <option value="{{ $item['id'] }}"
                                                {{ $hotel_mat['size_mm'] == $item['id'] ? 'selected' : '' }}>
                                                {{ $item['mm_length'] }} * {{ $item['mm_breath'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_inch" class="form-label">Size In Inches</label>

                                    <select class="form-select" id="size_inch" name="size_inch"
                                        aria-label="Default select example" required>
                                        @foreach ($sizeinch as $item)
                                        <option value="{{ $item['id'] }}"
                                            {{ $hotel_mat['size_inch'] == $item['id'] ? 'selected' : '' }}>
                                            {{ $item['inch_length'] }} * {{ $item['inch_breath'] }}
                                        </option>
                                    @endforeach
                                    </select>

                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="thickness_id" class="form-label">Thickness</label>
                                    <select class="form-select" id="thickness_id" name="thickness_id"
                                        aria-label="Default select example" required>
                                        
                                        @foreach ($thickness as $item)
                                        <option value="{{ $item['id'] }}"
                                            {{ $hotel_mat['thickness_id'] == $item['id'] ? 'selected' : '' }}>
                                            {{ $item['thickness'] }} 
                                        </option>
                                    @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="d-flex">

                                <div class="mb-3 mx-3 w-50">
                                    <label for="product" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" value="{{$hotel_mat->product}}" name="product" id="product" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="price" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" value="{{$hotel_mat->price}}" name="price" id="price" required>
                                </div>

                            </div>

                            <div class="d-flex">

                                <div class="mb-3 mx-3 w-50">
                                    <label for="image" class="form-label">Product image</label>
                                    <input type="file" class="form-control py-2" value="{{$hotel_mat->image}}" name="image" id="image" >
                                    <img src="{{ asset('storage/images/' . $hotel_mat->image) }}" alt="product not found" style="width:50px!important;height:50px!important;" class="rounded-0">
                                           
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status"
                                        aria-label="Default select example">
                                        <option value="Active"{{ $hotel_mat->status == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Deactive"{{ $hotel_mat->status == 'Deactive' ? 'selected' : '' }}>Deactive</option>
                                    </select>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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

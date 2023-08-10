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
                        <form class="px-5" action="insertHotelMattress" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="collection" class="form-label">Collection</label>
                                    <select class="form-select" id="collection" name="collection"
                                        aria-label="Default select example">
                                        <option value="">Select Collection</option>
                                        <option value="Activa">Activa</option>
                                        <option value="Comfort">Comfort</option>
                                        <option value="OrthoSpine">OrthoSpine</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="Wellness">Wellness</option>
                                        <option value="Visco Memory">Visco Memory</option>
                                        <option value="Spring">Spring</option>
                                    </select>

                                </div>
                                <div class="mb-3 mx-3 w-50">
                                    <label for="collection_img" class="form-label">Collection image</label>
                                    <input type="file" class="form-control py-2" name="collection_img"
                                        id="collection_img" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="master_size_id" class="form-label">Master Size</label>

                                    <select class="form-select" id="master_size_id" name="master_size_id"
                                        aria-label="Default select example" required>
                                        <option value="">Select Master Size</option>
                                        @foreach ($msize as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['size_name'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_mm" class="form-label">Size In MM</label>

                                    <select class="form-select" id="size_mm" name="size_mm"
                                        aria-label="Default select example" required>
                                        <option value="">Select Size </option>
                                        @foreach ($sizemm as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['mm_length'] }} *
                                                {{ $item['mm_breath'] }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_inch" class="form-label">Size In Inches</label>

                                    <select class="form-select" id="size_inch" name="size_inch"
                                        aria-label="Default select example" required>
                                        <option value="">Select Size </option>
                                        @foreach ($sizeinch as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['inch_length'] }} *
                                                {{ $item['inch_breath'] }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="thickness_id" class="form-label">Thickness</label>
                                    <select class="form-select" id="thickness_id" name="thickness_id"
                                        aria-label="Default select example" required>
                                        <option value="">Select Thickness </option>
                                        @foreach ($thickness as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['thickness'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="d-flex">

                                <div class="mb-3 mx-3 w-50">
                                    <label for="product" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product" id="product" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="price" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" name="price" id="price" required>
                                </div>

                            </div>

                            <div class="d-flex">

                                <div class="mb-3 mx-3 w-50">
                                    <label for="image" class="form-label">Product image</label>
                                    <input type="file" class="form-control py-2" name="image" id="image" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="img2" class="form-label">Product image 2</label>
                                    <input type="file" class="form-control py-2" name="img2" id="img2"
                                        required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="img3" class="form-label">Product image 3</label>
                                    <input type="file" class="form-control py-2" name="img3" id="img3"
                                        required>
                                </div>

                            </div>
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="img4" class="form-label">Product image 4</label>
                                    <input type="file" class="form-control py-2" name="img4" id="img4">
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status"
                                        aria-label="Default select example">
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select>

                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-100">
                                    <label for="about" class="form-label">About Product </label>
                                    <textarea class="form-control " name="about" id="about" rows="4" cols="50" style="resize: auto"
                                        required></textarea>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add size   -->

        <!-- table -->
        <div class="row my-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div id="success-message">
                            @if (session('delete'))
                                <div class="alert alert-danger">
                                    {{ session('delete') }}
                                </div>
                            @endif
                        </div>
                        <h6>Hotel Mattress List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 px-4">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase">S.No.</th>
                                        <th class="text-uppercase">Product Name</th>
                                        <th class="text-uppercase">Collection </th>
                                        <th class="text-uppercase">Collection Image</th>
                                        <th class="text-uppercase">Master Size</th>
                                        <th class="text-uppercase">Size MM</th>
                                        <th class="text-uppercase">Size Inch</th>
                                        <th class="text-uppercase">Thickness</th>
                                        <th class="text-uppercase"> Price</th>
                                        <th class="text-uppercase">Image</th>
                                        <th class="text-uppercase">Image 2</th>
                                        <th class="text-uppercase">Image 3</th>
                                        <th class="text-uppercase">Image 4</th>
                                        <th class="text-uppercase">About</th>
                                        <th class="text-uppercase">Status</th>
                                        <th class="opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; ?>
                                    @foreach ($hotelmat as $item)
                                        <?php
                                        
                                        $master_size = Illuminate\Support\Facades\DB::table('master_sizes')
                                            ->where('id', $item->master_size_id)
                                            ->first();
                                        $sizemm = Illuminate\Support\Facades\DB::table('size_m_m_s')
                                            ->where('id', $item->size_mm)
                                            ->first();
                                        $sizeinch = Illuminate\Support\Facades\DB::table('size_inches')
                                            ->where('id', $item->size_inch)
                                            ->first();
                                        $thickness = Illuminate\Support\Facades\DB::table('thicknesses')
                                            ->where('id', $item->thickness_id)
                                            ->first();
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <?php echo $a++; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->product }}</td>
                                            <td>{{ $item->collection }}</td>
                                            <td><img src="{{ asset('storage/images/' . $item->collection_img) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>
                                            <td>{{ $master_size->size_name }}</td>
                                            <td>{{ $sizemm->mm_length }} * {{ $sizemm->mm_breath }}</td>
                                            <td>{{ $sizeinch->inch_length }} * {{ $sizeinch->inch_breath }}</td>
                                            <td>{{ $thickness->thickness }}</td>
                                            <td>{{ $item['price'] }}</td>
                                            <td><img src="{{ asset('storage/images/' . $item->image) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>
                                            <td><img src="{{ asset('storage/images/' . $item->img2) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>

                                            <td><img src="{{ asset('storage/images/' . $item->img3) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>

                                            <td><img src="{{ asset('storage/images/' . $item->img4) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>
                                            <td style="overflow-x: scroll; max-width: 205px;">{{ $item['about'] }}</td>
                                            <td>{{ $item['status'] }}</td>
                                            <td class="align-middle">
                                                <a href="{{ url('hotel_mattress/edit/' . $item->id) }}"
                                                    class="badge btn btn-success">Edit</a>
                                                <a href="{{ url('hotel_mattress/delete/' . $item->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this Mattress?')">

                                                    <span class="badge btn btn-danger">Delete</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->

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

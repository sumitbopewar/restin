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
                        <h6>Pillows</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="/insert_pillows" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="product" class="form-label"> Product Name</label>
                                    <input type="text" class="form-control" name="product" id="product" required>

                                </div>
                                <div class="mb-3 mx-3 w-50">
                                    <label for="category" class="form-label">Category </label>

                                    <select class="form-select" id="category" name="category"
                                        aria-label="Default select example" required>
                                        <option value="">Select Category </option>
                                         <option value="JOY">JOY</option>
                                         <option value="PRIME">PRIME</option>
                                         <option value="REGULAR/CONTOUR">REGULAR / CONTOUR</option>
                                         <option value="ROYAL">ROYAL</option>
                                        
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
                                            <option value="{{ $item['id'] }}">{{ $item['size_length_mm'] }} x {{ $item['size_breadth_mm'] }}</option>
                                        @endforeach
                                    </select>_mm
                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_inch" class="form-label">Size in INCH</label> 
                                    <select class="form-select" id="size_inch" name="size_inch"
                                        aria-label="Default select example" required>
                                        <option value="">Select Size </option>
                                        @foreach ($size_inch as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['size_length'] }} x {{ $item['size_breadth'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                
                                 <div class="mb-3 mx-3 w-50">
                                    <label for="price" class="form-label"> Product Price</label>
                                    <input type="text" class="form-control" name="price" id="price" required>

                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="image" class="form-label"> Product Image</label>
                                    <input type="file" class="form-control" name="image" id="image" >

                                </div>
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="image2" class="form-label"> Product Image 2</label>
                                    <input type="file" class="form-control" name="image2" id="image2" >

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
                        <h6>Pillows List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 px-4">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase">S.No.</th>
                                        <th class="text-uppercase">Product Name</th>
                                        <th class="text-uppercase">Category</th>
                                        <th class="text-uppercase">Size Inch</th>
                                        <th class="text-uppercase">Size MM</th>
                                        <th class="text-uppercase">Price</th>
                                        <th class="text-uppercase">Image</th>
                                        <th class="text-uppercase">Image 2</th>
                                        <th class="opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; ?>
                                    @foreach($pillow as $item)
                                        <?php
                                        $size_inch = Illuminate\Support\Facades\DB::table('size_pillows')
                                            ->where('id', $item->size_inch)
                                            ->first();
                                        $size_mm = Illuminate\Support\Facades\DB::table('size__pillows__m_m_s')
                                            ->where('id', $item->size_mm)
                                            ->first();
                                        $u_inch = Illuminate\Support\Facades\DB::table('units')
                                            ->where('id',$size_inch->unit)
                                            ->first();
                                        $u_mm = Illuminate\Support\Facades\DB::table('units')
                                            ->where('id', $size_mm->unit)
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
                                           <td>{{$item->product}}</td>
                                           <td>{{$item->category}}</td>
                                           <td>{{ $size_inch->size_length }} x {{ $size_inch->size_breadth }} {{ $u_inch->unit }}</td>
                                           <td>{{ $size_mm->size_length_mm }} x {{ $size_mm->size_breadth_mm }} {{ $u_mm->unit }}</td>
                                           <td>{{$item->price}}</td>
                                           <td><img src="{{ asset('storage/images/' . $item->image) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>
                                           <td><img src="{{ asset('storage/images/' . $item->image2) }}"
                                                    alt="product not found"
                                                    style="width:50px!important;height:50px!important;" class="rounded-0">
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ url('pillows/edit/' . $item->id) }}"
                                                    class="badge btn btn-success">Edit</a>
                                                <a href="{{ url('pillows/delete/' . $item->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this pillow?')">
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

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
                        <h6>Add Size For Protector</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="insert_protector_size" method="POST">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="length" class="form-label">Length</label>
                                    <input type="text" class="form-control" name="length" id="length" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="width" class="form-label">Width</label>
                                    <input type="text" class="form-control" name="width" id="width" required>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="unit" class="form-label">Unit</label>
                                    <select class="form-select" id="unit" name="unit"
                                        aria-label="Default select example" required>
                                        <option value="">Select Unit </option>
                                        @foreach ($unit as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['unit'] }}</option>
                                        @endforeach
                                    </select>
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
                        <h6>Pillows Size List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 px-4">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase">S.No.</th>
                                        <th class="text-uppercase">Length</th>
                                        <th class="text-uppercase">Breath</th>
                                        <th class="text-uppercase">Unit</th>
                                        <th class="opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;  ?>
                                    @foreach($size_protector as $item)
                                       <?php  
                                        
                                        $unit = Illuminate\Support\Facades\DB::table('units')
                                            ->where('id', $item->unit)
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
                                            <td>{{$item->length}}</td>
                                            <td>{{$item->width}}</td>
                                            
                                            <td>{{ $unit->unit }}</td>
                                            
                                            <td class="align-middle">
                                                <a href="{{ url('size_protector/edit/' . $item->id) }}"
                                                    class="badge btn btn-success">Edit</a>
                                                <a href="{{ url('size_protector/delete/' . $item->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this Size?')">
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

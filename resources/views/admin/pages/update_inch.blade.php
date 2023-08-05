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
                        <h6>Add Inch Size</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="{{ url('inch/update/' . $sizeinch->id) }}" method="POST">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="master_size_id" class="form-label">Master Size</label>

                                    <select class="form-select" id="master_size_id" name="master_size_id"
                                        aria-label="Default select example" required>
                                        @foreach ($msize as $item)
                                            <option value="{{ $item['id'] }}"
                                                {{ $sizeinch['master_size_id'] == $item['id'] ? 'selected' : '' }}>
                                                {{ $item['size_name'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="mb-3 mx-3 w-50">
                                    <label for="unit_id" class="form-label">Unit </label>

                                    <select class="form-select" id="unit_id" name="unit_id"
                                        aria-label="Default select example" required>
                                        @foreach ($unit as $item)
                                            <option value="{{ $item['id'] }}"
                                                {{ $sizeinch['unit_id'] == $item['id'] ? 'selected' : '' }}>
                                                {{ $item['unit'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="inch_length" class="form-label">Length In Inch</label>
                                    <input type="text" class="form-control" name="inch_length" id="inch_length" value="{{$sizeinch->inch_length}}" required>
                                </div>
                                <div class="mb-3 mx-3 w-50">
                                    <label for="inch_breath" class="form-label">Breath in Inch</label>
                                    <input type="text" class="form-control" name="inch_breath" id="inch_breath" value="{{$sizeinch->inch_breath}}" required>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status"
                                        aria-label="Default select example">
                                        <option value="Active" {{ $sizeinch->status == 'Active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="Deactive"
                                            {{ $sizeinch->status == 'Deactive' ? 'selected' : '' }}>
                                            Deactive</option>
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

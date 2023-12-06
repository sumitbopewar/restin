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
                        <h6>Add Size For Pillows</h6>
                    </div>
                    <div class="card-body px-0 pt-0 py-2">
                        <form class="px-5" action="{{ url('size_pillows/update/' . $size_pil->id) }}" method="POST">
                            @csrf
                           
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_length" class="form-label">Length </label>
                                    <input type="text" class="form-control" name="size_length" id="size_length" value="{{$size_pil->size_length}}" required>
                                </div>

                                <div class="mb-3 mx-3 w-50">
                                    <label for="size_breadth" class="form-label">Breath </label>
                                    <input type="text" class="form-control" name="size_breadth" id="size_breadth" value="{{$size_pil->size_breadth}}" required>
                                </div>
                            </div>

                            <div class="d-flex">
                                
                                <div class="mb-3 mx-3 w-50">
                                    <label for="unit" class="form-label">Unit</label>

                                    <select class="form-select" id="unit" name="unit"
                                        aria-label="Default select example" required>
                                        <option value="">Select Unit </option>
                                        @foreach ($unit as $item)
                                            <option value="{{ $item['id'] }}"
                                                {{ $size_pil['unit'] == $item['id'] ? 'selected' : '' }}>
                                                {{ $item['unit'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button> 
                            <a href="{{route('size_pillows')}}" class=""><button type="button" class="btn btn-dark text-white mx-3">Back</button> </a>
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

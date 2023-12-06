@extends('admin.admin_main')

@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/plugin.css') }}">
@endpush

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />

@section('content')
    <div class="container-fluid py-4">
       
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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <h6>Orders  List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 px-4">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase">S.No.</th>
                                        <th class="text-uppercase">Order.No.</th>
                                        <th class="text-uppercase">Name</th>
                                        <th class="text-uppercase">Items</th>
                                        <th class="text-uppercase">Total Amount</th>
                                        <th class="text-uppercase">Payment Mode</th>
                                        <th class="text-uppercase">Payment Status</th>
                                        <th class="text-uppercase">Delivery Status</th>
                                        <th class="text-uppercase">Mobile</th>
                                        <th class="text-uppercase">Delivery Address</th>
                                        <th class="text-uppercase">Pin Code</th>
                                        <th class="text-uppercase text-center">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php $a = 1; ?>
                                       @foreach ($orders as $index => $ord)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <?php echo $a++; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $ord->order_no }}</td>
                                            <td>{{ $user[$index]->first()->name }}</td>
                                            <td>{{ $ord->items }}</td>
                                            <td>{{ $ord->total_amount }}</td>
                                            <td>{{ $ord->payment_mode }}</td>
                                            <td>{{ $ord->payment_status }}</td>
                                            <td class="{{$ord->delivery_status =='cancelled' ? 'text-danger':''}}
                                            {{$ord->delivery_status =='delivered' ? 'text-success':''}}">
                                                @if ($ord->delivery_status == 'proccessing') 
                                                    proccessing
                                                @elseif($ord->delivery_status == 'proccessing,shipped')
                                                    shipped
                                                @elseif($ord->delivery_status == 'proccessing,shipped,arriving')
                                                    arriving
                                                @elseif($ord->delivery_status == 'proccessing,shipped,arriving,delivered')
                                                    delivered
                                                @elseif($ord->delivery_status == 'cancelled') 
                                                     cancelled
                                                @endif
                                            </td>
                                           <td>{{ $user[$index]->first()->mobile }}</td>
                                            <td>{{ $ord->delivery_address }}</td>
                                            <td>{{ $ord->pin_code }}</td>
                                             <td class="text-center">
                                                @if($ord->delivery_status == 'cancelled')
                                                   <button type="button" class="btn btn-primary badge" >
                                                       <a href="{{ url('order_item/detail/' . $ord->id) }}" class="text-decoration-none text-white">View</a>
                                                    </button>
                                                @else
                                                    <div>
                                                        <button type="button" class="btn btn-primary badge" >
                                                           <a href="{{ url('order_item/detail/' . $ord->id) }}" class="text-decoration-none text-white">View</a>
                                                        </button>
                                                    @if($ord->delivery_status == 'proccessing')
                                                        <button type="button" class="btn btn-info badge" >
                                                           <a href="{{ url('order_item/shipped/' . $ord->id) }}" onclick="return confirm('Are you sure you want to shipped this Order?')"
                                                           class="text-decoration-none text-white">Shipped</a>
                                                        </button>
                                                     @endif
                                                     @if($ord->delivery_status == 'proccessing,shipped')
                                                        <button type="button" class="btn btn-dark badge" >
                                                           <a href="{{ url('order_item/arriving/' . $ord->id) }}" onclick="return confirm('Are you sure you want to shipped this Today?')" 
                                                           class="text-decoration-none text-white">Arriving</a>
                                                        </button>
                                                    @endif 
                                                    @if($ord->delivery_status == 'proccessing,shipped,arriving')
                                                        <button type="button" class="btn btn-success badge" >
                                                           <a href="{{ url('order_item/delivered/' . $ord->id) }}" onclick="return confirm('Are you sure this Order is Delivered?')" 
                                                           class="text-decoration-none text-white">Delivered</a>
                                                        </button>
                                                    @endif
                                                    @if($ord->delivery_status != 'proccessing,shipped,arriving,delivered')
                                                        <button type="button" class="btn btn-danger badge" >
                                                           <a href="{{ url('order_item/reject/' . $ord->id) }}" onclick="return confirm('Are you sure you want to Cancel this Order?')" 
                                                           class="text-decoration-none text-white">Reject</a>
                                                        </button>
                                                    @endif
                                                </div>
                                                    
                                                @endif
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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



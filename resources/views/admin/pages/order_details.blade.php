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
                        </div>
                        <h6>Orders  List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row">
                            <?php
                                $user_details = Illuminate\Support\Facades\DB::table('users')->where('id', $orders->user_id)->first();
                                $pay_details = Illuminate\Support\Facades\DB::table('payments')->where('tbl_order_id', $orders->id)->first();
                                // dd($pay_details);
                                // die();
                            ?>
                            <div class="col-md-6 col-sm-12 col-lg-6 p-5">
                                <div class="d-flex mb-2">
                                    <b>Total Items:</b>
                                    <em class="ps-2">{{ $orders->items }}</em>
                                </div>
                                <div class="d-flex mb-2">
                                    <b>Order Number:</b>
                                    <em class="ps-2">{{ $orders->order_no }}</em>
                                </div>
                                <div class="d-flex mb-2">
                                    <b>Order Date:</b>
                                    <em class="ps-2">{{ $orders->created_at->format('d / m / Y H:i:s') }}</em>
                                </div>
                                <div class="d-flex mb-2">
                                    <b>Payment Mode:</b>
                                    <em class="ps-2">{{ $orders->payment_mode }}</em>
                                </div>
                                <div class="d-flex mb-2">
                                    @if(isset($pay_details->payment_id))
                                    <b>Payment Id:</b>
                                    <em class="ps-2">{{ $pay_details->payment_id}}</em>
                                    @else
                                    <!--Else condition for cod-->
                                    @endif
                                </div>
                                <div class="d-flex mb-2">
                                    <b>Payment Status:</b>
                                    <em class="ps-2">{{ $orders->payment_status }}</em>
                                </div>
                                <div class="d-flex mb-2">
                                    <b>Delivery Status:</b>
                                    <em class="ps-2">{{ $orders->delivery_status }}</em>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 p-5">
                                <div class="d-flex mb-2  justify-content-end">
                                    <b>Customer Name:</b>
                                    <em class="ps-2">{{ $user_details->name }}</em>
                                </div>
                                <div class="d-flex justify-content-end mb-2">
                                    <b style="text-wrap: nowrap;">Delivery Address:</b>
                                    <em class="ps-2">{{ $orders->delivery_address }}</em>
                                </div>
                                <div class="d-flex justify-content-end mb-2">
                                    <b>Pin Code:</b>
                                    <em class="ps-2">{{ $orders->pin_code }}</em>
                                </div>
                                <div class="d-flex justify-content-end mb-2">
                                    <b>Mobile Number:</b>
                                    <em class="ps-2">{{ $user_details->mobile }}</em>
                                </div>
                                <div class="d-flex justify-content-end mb-2">
                                    <b>Email ID:</b>
                                    <em class="ps-2">{{ $user_details->email }}</em>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">Sr.No</th>
                                      <th scope="col">Product Name</th>
                                      <th scope="col">Size</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Total Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php $a = 1; ?>
                                      @foreach ($orderItem as $index => $ordItem)
                                      <?php
                                
                                $master_size = DB::table('master_sizes')
                                    ->select('size_name', 'id')
                                    ->where('id', $ordItem->master_size_id)
                                    ->first();
                                
                                $size_mm = DB::table('size_m_m_s')
                                    ->select('mm_length', 'mm_breath')
                                    ->where('id', $ordItem->size_id)
                                    ->where('unit_id', $ordItem->unit_id)
                                    ->first();
                                
                                $size_inch = DB::table('size_inches')
                                    ->select('inch_length', 'inch_breath')
                                    ->where('id', $ordItem->size_id)
                                    ->where('unit_id', $ordItem->unit_id)
                                    ->first();
                                
                                $thickness = DB::table('thicknesses')
                                    ->select('thickness', 'id')
                                    ->where('id', $ordItem->thickness_id)
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
                                      <td>{{ $ordItem->product_name }}</td>
                                      <td>{{ $master_size->size_name }} |
                                        @if (isset($size_mm->mm_length) && isset($size_mm->mm_breath))
                                            {{ $size_mm->mm_length }} x {{ $size_mm->mm_breath }} mm
                                        @endif
                                        @if (isset($size_inch->inch_length) && isset($size_inch->inch_breath))
                                            | {{ $size_inch->inch_length }} x {{ $size_inch->inch_breath }} inches
                                        @endif
                                        x {{ $thickness->thickness }}</td>
                                      <td>{{ '₹ ' . number_format($ordItem->price, 2, '.', ',') }}</td>
                                      <td>{{ $ordItem->quantity }}</td>
                                      <td><img src="{{ asset('storage/images/' . $ordItem->image) }}" alt="product not found" style="width:100px!important;height:100px!important;border-radius: unset;"></td>
                                     <?php
                                        $proprice = $ordItem->price;
                                        $quantity = $ordItem->quantity;
                                        
                                        $total = $proprice*$quantity;
                                        
                                     ?>
                                     
                                      <td>{{ '₹ ' . number_format($total, 2, '.', ',') }}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 text-end mt-2 pe-3">
                                <b>Grand Total : </b><span>{{ '₹ ' . number_format($orders->total_amount, 2, '.', ',') }}</span>
                            </div>
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



@extends('admin.admin_main')

@push('plugin-styles')
  <link rel="stylesheet" href="{{ asset('admin_assets/assets/plugins/plugin.css') }}">
@endpush

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"/>

@section('content')
    <!-- main content -->
    <div class="container-fluid py-4">
        <!-- table -->
        <div class="row my-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                       @if (session('success'))
                            <div id="success-message" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                       @if (session('error'))
                            <div id="success-message" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h6>Contact List</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 px-4">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase">S.No.</th>
                                        <th class="text-uppercase">Name</th>
                                        <th class="text-center text-uppercase">Email</th>
                                        <th class="text-center text-uppercase">Mobile No.</th>
                                        <th class="text-center text-uppercase">Message</th>
                                        <th class="opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; ?>
                                    @foreach ($contact as $item)
                                        
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <?php echo $a++; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td class="align-middle text-center text-sm">{{ $item->email }}</td>
                                            <td style="white-space: normal">{{ $item->mobile }}</td>
                                            <td style="white-space: normal">{{ $item->message }}</td>
                                            <td class="align-middle">
                                                 <a href="{{ url('adm_contact/delete/' . $item->id) }}" onclick="return confirm('Are you sure you want to delete this Contact?')">
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
          $('#success-message').delay(duration).fadeOut();

          $('#myTable').DataTable({
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          });
      });
  </script>
   <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
        });
    </script>
@endpush

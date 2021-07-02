@extends('layouts.app')
@section('body')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mobility Tracking</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/user">Home</a></li>
                            <li class="breadcrumb-item active">Mobility Tracking</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Transaction Mobility Tracking Table
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="table_transaction_tracking" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nik Emp</th>
                              <th>Nik Teamleader</th>
                              <th>Cost Center</th>
                              <th>Flag Check In</th>
                              <th>Date Time Check In</th>
                              <th>Flag Check Out</th>
                              <th>Date Time Check Out</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
    <script type="text/javascript">
        $( function () {
          var table_transaction_tracking = $('#table_transaction_tracking').DataTable({
            "scrollY": 200,
            "scrollX": true,
            paging: true,
            processing: true,
            serverSide: true,
            ajax: '{{ route('json_transaction_tracking') }}',
            columns: [
              {"data": "id",
              render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }},
              { data: 'nik_emp', name: 'nik_emp' },
              { data: 'nik_teamleader', name: 'nik_teamleader' },
              {data:'cost_center', name:'cost_center'},
              { data: 'flag_checkin', name: 'flag_checkin' },
              { data: 'datetime_checkin', name: 'datetime_checkin' },
              {data:'flag_checkout', name:'flag_checkout'},
              { data: 'datetime_checkout', name: 'datetime_checkout' }
            ]
          });
      } );
    </script>
    @endpush
@endsection
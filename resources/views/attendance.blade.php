@extends('layouts.app')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/user">Home</a></li>
              <li class="breadcrumb-item active">Attendance Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      {{-- Employees Table --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Attendance Table</h3>

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
          <table id="table_attendance" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nik Emp</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Cost Center</th>
                    <th>Pos Name</th>
                    <th>Jobtitle Code</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

    </section>
    <!-- /.content -->
  </div>

  @push('scripts')

<script type="text/javascript">
  $( function () {
    var table_employee= $('#table_attendance').DataTable({
      "scrollY": 200,
      "scrollX": true,
      paging: true,
      processing: true,
      serverSide: true,
      ajax: '{{route('#')}}',
      columns: [
        {"data": "id",
          render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
          }},
          { data: 'emp_no', name: 'emp_no' },
          { data: 'full_name', name: 'full_name' },
          { data: 'gender', name: 'gender' },
          { data: 'cost_code', name: 'cost_code' },
          { data: 'pos_name_en', name: 'pos_name_en' },
          { data: 'jobtitle_code', name: 'jobtitle_code' },
          { data: 'company_id', name: 'company_id' },
      ]
    });
} );
</script>
  @endpush
@endsection
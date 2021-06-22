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
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      {{-- master supervisor box --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Master Supervisor Table</h3>

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
          <table id="table_supervisor" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Nik Spv</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Cost Center</th>
                  <th>Post Name</th>
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

      {{-- Employees Table --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Master Employee Table</h3>

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
          <table id="table_employee" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nik</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Cost Center</th>
                    <th>Post Name</th>
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
    var table_supervisor = $('#table_supervisor').DataTable({
      "scrollY": 200,
      "scrollX": true,
      paging: true,
      processing: true,
      serverSide: true,
      ajax: '{{route('json_master_spv')}}',
      columns: [
        {"data": "id",
          render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
          }},
          { data: 'nik_spv', name: 'nik_spv' },
          { data: 'fullname_spv', name: 'fullname_spv' },
          { data: 'gender', name: 'gender' },
          { data: 'cost_center', name: 'cost_center' },
          { data: 'post_name', name: 'post_name' },
          { data: 'jobtitle_code', name: 'jobtitle_code' },
          { data: 'company', name: 'company' },
      ]
    });
} );
</script>

<script type="text/javascript">
  $( function () {
    var table_employee= $('#table_employee').DataTable({
      "scrollY": 200,
      "scrollX": true,
      paging: true,
      processing: true,
      serverSide: true,
      ajax: '{{route('json_master_emp')}}',
      columns: [
        {"data": "id",
          render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
          }},
          { data: 'nik', name: 'nik' },
          { data: 'fullname_emp', name: 'fullname_emp' },
          { data: 'gender', name: 'gender' },
          { data: 'cost_center', name: 'cost_center' },
          { data: 'post_name', name: 'post_name' },
          { data: 'jobtitle_code', name: 'jobtitle_code' },
          { data: 'company', name: 'company' },
      ]
    });
} );
</script>
  @endpush
@endsection
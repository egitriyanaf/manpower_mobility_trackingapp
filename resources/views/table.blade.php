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

      <!-- User table box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Master User Table</h3>

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
          <table id="table_user" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
                    <th>Serial Number</th>
                    <th>NIK</th>
                    <th>Fullname</th>
                    <th>Cost Center</th>
                    <th>Location</th>
                    <th>Level User</th>
                    <th>Created Date</th>
                    <th>Created By</th>
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
                    <th>Serial Number</th>
                    <th>NIK</th>
                    <th>Fullname</th>
                    <th>Cost Center</th>
                    <th>Location</th>
                    <th>Created Date</th>
                    <th>Created By</th>
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
      var table_user = $('#table_user').DataTable({
        "scrollY": 200,
        "scrollX": true,
        paging: true,
		    processing: true,
		    serverSide: true,
        ajax: '{{ route('json_master_user') }}',
        columns: [
          {"data": "id",
          render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
          }},
          { data: 'name', name: 'name' },
          { data: 'email', name: 'email' }
        ]
      });
  } );
</script>

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
        {data:'serialnumber_spv',name:'serialnumber_spv'},
        {data:'nik_spv',name:'nik'},
        { data: 'fullname_spv', name: 'name' },
        { data: 'cost_center', name: 'cost_center' },
        { data: 'location', name: 'location' },
        { data: 'level', name: 'level' },
        { data: 'created_at', name: 'created_at' },
        { data: 'created_by', name: 'created_by' },
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
        {data:'serialnumber_emp',name:'serialnumber_emp'},
        {data:'nik_emp',name:'nik'},
        { data: 'fullname_emp', name: 'name' },
        { data: 'cost_center', name: 'cost_center' },
        { data: 'location', name: 'location' },
        { data: 'created_at', name: 'created_at' },
        { data: 'created_by', name: 'created_by' },
        { data: 'company', name: 'company' },
      ]
    });
} );
</script>
  @endpush
@endsection
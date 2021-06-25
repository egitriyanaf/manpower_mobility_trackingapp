@extends('layouts.app')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Management User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/user">Home</a></li>
              <li class="breadcrumb-item active">Management User</li>
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
          
          <button style="margin-left: 30px" type="button" class="btn btn-primary" title="Add Data" data-toggle="modal" data-target="#addUserForm"> Add New User
            <i class="fas fa-plus"></i>
          </button>

          {{-- modal add user --}}
          <div class="modal fade" id="addUserForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{route('create_user')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="modal-footer border-top-0 d-flex justify-content-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <h3 class="card-title">User Table</h3>

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
        ajax: '{{ route('json_user') }}',
        columns: [
          {"data": "id",
          render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
          }},
          { data: 'name', name: 'name' },
          { data: 'email', name: 'email' },
          // {
          //       "mData": null,
          //       "bSortable": false,
          //      "mRender": function (o) { return '<a class="btn btn-primary btn-sm" href="{{ url('/user/edit_user/id') }}"><i class="fas fa-pen"></i></a>'; }
          //   },
          // {
          //       "mData": null,
          //       "bSortable": false,
          //      "mRender": function (o) { return '<a class="btn btn-danger btn-sm" href="{{ url('/user/delete_user/id') }}"><i class="fas fa-trash"></i></a>'; }
          //   }
        ]
      });
  } );
</script>
  @endpush
@endsection
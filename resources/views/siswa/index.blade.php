
@extends('layouts/master')

@section('content')

<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
											<tr>
                                                <th width="100px" style="text-align: center">Name</th>
                                                <th width="200px" style="text-align: center">Role</th>
                                                <th width="250px" style="text-align: center">Address</th>
                                                <th width="125px" style="text-align: center">Action</th>
											</tr>
										</thead>
										<tbody>

                                        @foreach($data_siswa as $siswa)
                                            <tr>
                                                <td width="100px">{{$siswa->nama}}</td>
                                                <td width="200px">{{$siswa->role}}</td>
                                                <td width="250px">{{$siswa->alamat}}</td>
                                                <td width="125px" style="text-align: center">
                                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a> /
                                                    <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
										</tbody>
									</table>
                                    </div>
                </div>
            </div>
        </div>
                                    

@stop
@section('content1')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3>Data Employee</h3>
                                </div>
                                
								<div class="panel-body">
                                @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    </div>
                                @endif
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
                                                <th width="100px" style="text-align: center">Name</th>
                                                <th width="200px" style="text-align: center">Role</th>
                                                <th width="250px" style="text-align: center">Address</th>
                                                <th width="125px" style="text-align: center">Action</th>
											</tr>
										</thead>
										<tbody>

                                        @foreach($data_siswa as $siswa)
                                            <tr>
                                                <td width="100px">{{$siswa->nama}}</td>
                                                <td width="200px">{{$siswa->role}}</td>
                                                <td width="250px">{{$siswa->alamat}}</td>
                                                <td width="125px" style="text-align: center">
                                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a> /
                                                    <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
										</tbody>
									</table>
                                    <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#ModalAdd">
                                    Add Employee
                                </button>
								</div>
                                
							</div>
							<!-- END BORDERED TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAddLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card text-white bg-dark mb-0">
                        <h5 class="modal-title" id="ModalAddLabel">Add Employee</h5>
                    </div>
                <div class="modal-body">
                <form class="form-horizontal" action="/siswa/create" method="POST">
                    {{ csrf_field() }}
                    <div class="card text-white bg-dark mb-0">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="Employee name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <input name="role" type="text" class="form-control" id="role" placeholder="Employee role">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="alamat" class="form-control" id="alamat" placeholder="Employee address"></textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
@endsection

@extends('layouts/master')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Data Employee</h1>
                            <p class="mb-4">Here Is Data Table Of TKJ-B@11 SMKN 1 Cimahi Employee List.</p>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <!-- <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                </div> -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    </div>
                                    @endif
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($data_siswa as $siswa)
                                            <tr>
                                                <td>{{$siswa->nama}}</td>
                                                <td>{{$siswa->role}}</td>
                                                <td>{{$siswa->alamat}}</td>
                                                <td>
                                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a> /
                                                    <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                    <br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#ModalAdd">
                                        Add Employee
                                    </button>
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
@endsection
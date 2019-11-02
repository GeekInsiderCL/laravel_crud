
@extends('layouts/master')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Employee</h1>
            <p class="mb-4">Here Is Data Table Of TKJ-B@11 SMKN 1 Cimahi Employee List.</p>

            <!-- DataTables  -->
            <div class="card shadow mb-4">
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
                                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Update</a>
                                        <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                                            
                            </tbody>
                        </table>
                        <br>

                        <!-- Button trigger modal -->
                        <a href="/siswa/add" class="btn btn-primary btn-sm float-left">
                            Add Employee
                        </a>
                    </div>
                </div>
            </div>
    </div>
@endsection
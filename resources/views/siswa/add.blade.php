
@extends('layouts/master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
							<div class="panel-heading">
								<h2>Add Data Employee</h2>
                            </div>
                        <form role="form" class="form-horizontal"  action="/siswa/create" method="POST">
                        {{ csrf_field() }}
                            <div class="card text-white bg-dark mb-0">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Employee name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-9">
                                            <input name="role" type="text" class="form-control" id="role" placeholder="Employee role">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" class="form-control" id="alamat" placeholder="Employee address"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/siswa" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>    
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
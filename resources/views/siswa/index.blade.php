<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <title>
        CRUD Data Employee - Admin
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </head>
    <body>
    <br>
    <div class="main-container container-fluid">
            <!-- heading -->
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1 class="text-primary mr-auto">Data Employee</h1>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#ModalAdd">
                        Add Employee
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="TableEmployee" >
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                        
                @foreach($data_siswa as $siswa)
                        
                    <tr>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->role}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- Modal Add-->
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
    </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <title>
        CRUD Data Employee - Edit
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
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-8">
                    <h1 class="text-primary mr-auto">Edit Data Employee</h1>
                <form role="form" class="form-horizontal"  action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{ csrf_field() }}
                        <div class="card text-white bg-dark mb-0">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Employee name" value="{{$siswa->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <input name="role" type="text" class="form-control" id="role" placeholder="Employee role" value="{{$siswa->role}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Employee address">{{$siswa->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="/siswa" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>    
                </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
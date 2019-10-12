<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <title>
        CRUD Data Siswa - Admin
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <div class="container">
            @if(session('added'))
                <div class="alert alert-success" role="alert">
                   {{ session('added') }}
                </div>
            @endif
            <div class="row">
                <div class="col-6">
                <h1> Data Siswa </h1>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Siswa
                    </button>
                </div>
                <div class="table-responsive-sm">
                <table class="table table-bordered table-hover table-dark">
                    <tr class="">
                    <td>Nama</td>
                    <td>Role</td>
                    <td>Alamat</td>
                    </tr>
                    @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->role}}</td>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    </div>
                <div class="modal-body">
                <form action="/siswa/create" method="POST">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Siswa</label>
                        <div class="col-sm-9">
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama siswa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Role Siswa</label>
                        <div class="col-sm-9">
                            <input name="role" type="text" class="form-control" id="role" placeholder="Role siswa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Siswa</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat siswa"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
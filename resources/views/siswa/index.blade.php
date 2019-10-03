<html>
<head>

</head>
<body>
<h1> Data Employee </h1>
<table>
    <tr>
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
</body>
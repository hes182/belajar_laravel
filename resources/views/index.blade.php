<!DOCTYPE html>
<html>
    <head>
        <title>Membuat CRUD Pada Laravel</title>

        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    </head>
    <body>
        <h3>Data Pegawai</h3>
        <br/>
        <br/>
        
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{$p->pegawai_nama}}</td>
                <td>{{$p->pegawai_jabatan}}</td>
                <td>{{$p->pegawai_umur}}</td>
                <td>{{$p->pegawai_alamat}}</td>
                <td>
                    <a href="/pegawai/edit/{{$p->pegawai_id}}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{$p->pegawai_id}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
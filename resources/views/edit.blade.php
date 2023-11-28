<!DOCTYPE html>
<html>
    <head>Belajar CRUD Laravel</head>
    <body>
        <h3>Data Pegawai</h3>

        <a href="/pegawai">Kembali</a>
        <br/>
        <br/>

        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$p->pegawai_id}}"> <br/><br/>
            Nama <input type="text" name="nama" required style="text-transform: uppercase;" value="{{$p->pegawai_nama}}"> <br/><br/>
            Jabatan <input type="text" name="jabatan" required style="text-transform: uppercase;" value="{{$p->pegawai_jabatan}}"> <br/><br/>
            Umur <input type="number" name="umur" required maxlength="4" value="{{$p->pegawai_umur}}"> <br/><br/>
            Alamat <textarea name="alamat" required style="text-transform: uppercase;" rows="5" cols="30">{{$p->pegawai_alamat}}</textarea> <br/><br/>
            <input type="submit" value="Simpan Data">
        </form>
        @endforeach
    </body>
</html>
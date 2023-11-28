<!DOCTYPE html>
<html>

<head>Belajar CRUD Laravel

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Add/Remove Multiple Input Fields Example</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h3>Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>
    <br />
    <br />

    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br />

    <form action="/pegawai/store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" value="{{ old('nama') }}" style="text-transform: uppercase;"> <br /><br />
        Jabatan <input type="file" name="image" accept="image/*" style="text-transform: uppercase;"> <br /><br />
        Umur <input type="number" name="umur" maxlength="4"> <br /><br />
        Alamat
        <textarea name="alamat" style="text-transform: uppercase;" rows="5" cols="30"></textarea> <br /><br />
        <table class="table" id="dynamicAddRemove">
            <tr>
                <td><select name="addMoreInputFields[0][subject]" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </td>
                <td><input type="text" name="addMoreInputFields[0][value]" placeholder="Enter subject" class="form-control" />
                </td>
                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
            </tr>
        </table> <br /><br />
        <input type="submit" value="Simpan Data">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove")
        .append('<tr><td><select name="addMoreInputFields[' + i +'][subject]" id="cars"><option value="volvo">Volvo</option><option value="saab">Saab</option><option value="mercedes">Mercedes</option><option value="audi">Audi</option></td></td><td><input type="text" name="addMoreInputFields[' + i +'][value]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
</html>

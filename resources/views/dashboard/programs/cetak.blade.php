<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cetak Data Program Kerja</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Daftar Program Kerja</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Program Kerja</th>
                <th>Nama PJ</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
            </tr>
            @foreach ($programs as $program)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $program->proker }}</td>
                <td>{{ $program->nama}}</td>
                <td>{{ $program->category->name }}</td>
                <td>{{ $program->tanggal}}</td>
                <td>{{ $program->deskripsi }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>

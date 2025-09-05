<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Prodi</th>
            <th>Fakultas</th>
            <th>Semester</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->npm }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>{{ $mhs->fakultas }}</td>
            <td>{{ $mhs->semester }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

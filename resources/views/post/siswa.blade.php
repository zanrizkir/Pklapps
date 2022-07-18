<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        table {
            box-shadow: 6px 5px 5px;
            background: transparent;
            margin: 0px auto 30px auto;
        }

        body {
            font-family: 'Noto Sans Arabic', sans-serif;
        }

        fieldset {
            background: lightblue;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>
            <h1>Table Latihan</h1>
        </legend>

        <table border="1" cellpadding='10' cellspacing='0'>
            <tr>
                <th>No Peserta</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Jurusan</th>
            </tr>
            @foreach ($siswa as $data)
            <tr>
                <td>{{ $data['no'] }}</td>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['jk'] }}</td>
                <td>{{ $data['jurusan'] }}</td>
            </tr>
            @endforeach
        </table>
        <table border="1" cellpadding='10' cellspacing='0'>
            <tr>
                <th>No</th>
                <th>No Siswa</th>
                <th>Kode MP</th>
            </tr>
            <?php $no = 1; ?>
            @foreach ($peserta as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['no_peserta'] }}</td>
                <td>{{ $data['kode_mp'] }}</td>
            </tr>
            @endforeach
        </table>
        <table border="1" cellpadding='10' cellspacing='0'>
            <tr>
                <th>Kode Mp</th>
                <th>Nama Mp</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
            <?php $no = 1; ?>
            @foreach ($pelajaran as $data)
            <tr>
                <td>{{ $data['kode'] }}</td>
                <td>{{ $data['nama_mp'] }}</td>
                <td>{{ $data['sks'] }}</td>
                <td>{{ $data['semester'] }}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>

</html>
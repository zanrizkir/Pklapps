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
            margin: 0px auto 30px auto;
        }

        body {
            font-family: 'Noto Sans Arabic', sans-serif;
        }
    </style>
</head>

<body>
    <center>
        <h1>Daftar Jam Tayang Televisi</h1>
    </center>
    @foreach ($tv as $key => $televisi)
        <table border="1" cellpadding='10' cellspacing='0'>
            <tr>
                <th colspan="3">{{ $televisi['siaran'] }}</th>
            </tr>
            <tr>
                <th>Nama Program</th>
                <th>Nama Program</th>
                <th>Nama Program</th>
            </tr>
            @foreach ($televisi['jadwal_tayang'] as $jadwal)
                <tr>
                    <td> {{ $jadwal['nama_program'] }} </td>
                    <td> {{ $jadwal['jam_tayang'] }} </td>
                    <td> {{ $jadwal['tanggal_tayang'] }} </td>
                </tr>
            @endforeach
        </table>
    @endforeach
</body>

</html>

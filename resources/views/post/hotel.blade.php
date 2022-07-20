<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            box-shadow: 5px 3px 5px;
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
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No Kamar</th>
            <th>Jenis Kamar</th>
            <th>Harga</th>
        </tr>
        @foreach ($kamar as $data)
            <tr>
                <td>{{ $data['no_kamar'] }}</td>
                <td>{{ $data['jenis_kamar'] }}</td>
                <td>{{ $data['harga'] }}</td>
            </tr>
        @endforeach
    </table>

    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>Id Karyawan</th>
            <th>Nama Karyawan</th>
            <th>JK</th>
        </tr>
        @foreach ($karyawan as $data)
            <tr>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['nm_karyawan'] }}</td>
                <td>{{ $data['jk'] }}</td>
            </tr>
        @endforeach
    </table>


    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>Id Detail Transaksi</th>
            <th>No Transaksi</th>
            <th>No Kamar</th>
        </tr>
        @foreach ($datail_transaksi as $data)
            <tr>
                <td>{{ $data['id_dtl_transaksi'] }}</td>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['no_kamar'] }}</td>
            </tr>
        @endforeach
    </table>
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>Id Pengunjung</th>
            <th>Nama Pengunjung</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>No Ktp</th>
        </tr>
        @foreach ($pengunjung as $data)
            <tr>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['nm_pengunjung'] }}</td>
                <td>{{ $data['alamat'] }}</td>
                <td>{{ $data['jk'] }}</td>
                <td>{{ $data['no_tlp'] }}</td>
                <td>{{ $data['no_ktp'] }}</td>
            </tr>
        @endforeach
    </table>


    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No Transaksi</th>
            <th>Id Pengunjung</th>
            <th>Id karyawan</th>
            <th>Jumlah Kamar</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th>Lama Nginap </th>
            <th>Total Harga</th>
        </tr>
        @foreach ($transaksi as $data)
            <tr>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['jmlh_kamar'] }}</td>
                <td>{{ $data['tgl_masuk'] }}</td>
                <td>{{ $data['tgl_keluar'] }}</td>
                <td>{{ $data['lama_nginap'] }}</td>
                <td>{{ $data['total_harga'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Warung Makan Laravel</h2>
    <h3>Menu :</h3>
    <ol>
        <li>Ayam Goreng</li>
        <li>Lobster</li>
        <li>Pizza</li>
        <li>Tiramisu</li>
        <li>Pasta</li>
    </ol>

    @if ($a == 'ayam goreng')
        Menu Yang Anda Pesan : <b>{{ $a }}</b>
        <br> Harga {{ $a }} Rp.15000
    @elseif($a == 'Lobster')
        Menu Yang Anda Pesan : <b>{{ $a }}</b>
        <br> Harga {{ $a }} Rp.20000
    @elseif($a == 'pizza')
        Menu Yang Anda Pesan : <b>{{ $a }}</b>
        <br> Harga {{ $a }} Rp.50000
    @elseif($a == 'tiramisu')
        Menu Yang Anda Pesan : <b>{{ $a }}</b>
        <br> Harga {{ $a }} Rp.30000
    @elseif($a == 'pasta')
        Menu Yang Anda Pesan : <b>{{ $a }}</b>
        <br> Harga {{ $a }} Rp.25000
    @else
        <br> Menu Tidak Ada
    @endif

    <hr>

    @if ($b == 'ayam goreng')
        Menu Yang Anda Pesan : <b>{{ $b }}</b>
        <br> Harga {{ $b }} Rp.15000
    @elseif($b == 'Lobster')
        Menu Yang Anda Pesan : <b>{{ $b }}</b>
        <br> Harga {{ $b }} Rp.20000
    @elseif($b == 'pizza')
        Menu Yang Anda Pesan : <b>{{ $b }}</b>
        <br> Harga {{ $b }} Rp.50000
    @elseif($b == 'tiramisu')
        Menu Yang Anda Pesan : <b>{{ $b }}</b>
        <br> Harga {{ $b }} Rp.30000
    @elseif($b == 'pasta')
        Menu Yang Anda Pesan : <b>{{ $b }}</b>
        <br> Harga {{ $b }} Rp.25000
    @else
        <br> Menu Tidak Ada
    @endif
</body>

</html>

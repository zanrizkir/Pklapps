<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($a == 'ayam goreng')
    <h1>{{$a}}</h1>
    Hallo Pesanan Anda : <b>{{$a}}</b>
    <br> harga {{$a}} Rp.15000
    @elseif($a == 'Lobster')
    <h1>{{$a}}</h1>
        Hallo Pesanan Anda : <b>{{$a}}</b>
    <br> harga {{$a}} Rp.20000
    @elseif($a == 'pizza')
    <h1>{{$a}}</h1>
        Hallo Pesanan Anda : <b>{{$a}}</b>
    <br> harga {{$a}} Rp.50000
    @elseif($a == 'tiramisu')
    <h1>{{$a}}</h1>
        Hallo Pesanan Anda : <b>{{$a}}</b>
    <br> harga {{$a}} Rp.30000
    @elseif($a == 'pasta')
    <h1>{{$a}}</h1>
        Hallo Pesanan Anda : <b>{{$a}}</b>
        <br> harga {{$a}} Rp.25000
    @else
        <br> Menu Tidak Ada
    @endif
</body>
</html>
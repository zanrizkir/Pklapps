<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>
            Data Siswa
        </legend>
        @foreach ($siswa as $murid)
            <table>
                <tr>
                    <td> <b> Id </td>
                    <td> : </b></td>
                    <td> {{ $murid['id'] }} </td>
                </tr>
                <tr>
                    <td><b>Nama </td>
                    <td> : </b></td>
                    <td> {{ $murid['name '] }} </td>
                </tr>
                <tr>
                    <td><b>Umur </td>
                    <td> : </b></td>
                    <td> {{ $murid['age'] }} </td>
                </tr>
                <tr>
                    <td><b>Status </td>
                    <td> : </b></td>
                    <td> 
                        @if ($murid['age'] >= 17)
                            Anda Berhak Mendapatkan KTP
                        @else
                            Anda Tidak Berhak Mendapatkan KTP
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><b>Mata Pelajaran </td>
                    <td> : </b></td>
                    <td> <br>
                        @foreach ($murid['mapel'] as $mapel)
                            <li type='1'>{{ $mapel }}</li>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td><b>Hobi </td>
                    <td> : </b></td>
                    <td> <br>
                        @foreach ($murid['hobi'] as $hobi)
                            <li type='1'>{{ $hobi }}</li>
                        @endforeach
                    </td>
                </tr>
            </table>
            <hr>
        @endforeach
    </fieldset>
</body>

</html>

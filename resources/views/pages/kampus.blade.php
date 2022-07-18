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
        body {
            font-family: 'Noto Sans Arabic', sans-serif;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Data Dosen</legend>
        @foreach ($dosen as $kuliah)
            <br>
            <table>
                <tr>
                    <td>Nama Dosen </td>
                    <td> : </td>
                    <td>{{ $kuliah['nama'] }}</td>
                </tr>
                <tr>
                    <td> Mata Kuliah </td>
                    <td>:</td>
                    <td>{{ $kuliah['matkul'] }} </td>
                </tr>
            </table>
            <table border="1" cellpadding='10' cellspacing='0'>
                <thead bo>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai Mahasiswa</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nilai = 0;
                    @endphp
                    @foreach ($kuliah['mahasiswa'] as $mahasiswa)
                        <tr>
                            <td>{{ $mahasiswa['no'] }}</td>
                            <td>{{ $mahasiswa['nama'] }}</td>
                            <td>{{ $mahasiswa['nilai'] }}</td>
                            <td>
                                {{-- Grade Mahasiswa --}}
                                @if ($mahasiswa['nilai'] >= 90)
                                    <b> A </b>
                                @elseif($mahasiswa['nilai'] >= 80 && $mahasiswa['nilai'] <= 89)
                                    <b> B </b>
                                @elseif($mahasiswa['nilai'] >= 70 && $mahasiswa['nilai'] <= 79)
                                    <b> C </b>
                                @elseif($mahasiswa['nilai'] >= 50 && $mahasiswa['nilai'] <= 69)
                                    <b> D </b>
                                @else
                                    <b> E </b>
                                @endif
                            </td>
                        </tr>
                        @php
                            $total = $nilai += $mahasiswa['nilai'];
                            $rata = $total / count($kuliah['mahasiswa']);
                            
                            // Grade Dosen
                            if ($rata >= 90) {
                                $grade = 'A';
                            } elseif ($rata >= 80 && $rata <= 89) {
                                $grade = 'B';
                            } elseif ($rata >= 70 && $rata <= 79) {
                                $grade = 'C';
                            } elseif ($rata >= 50 && $rata <= 69) {
                                $grade = 'D';
                            } else {
                                $grade = 'E';
                            }
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <b>Total Nilai Mahasiswa {{ $kuliah['nama'] }}
                    </td>
                    <td>:</td>
                    <td>
                        <b>{{ $total }}</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Nilai Rata-rata {{ $kuliah['matkul'] }}
                    </td>
                    <td>:</td>
                    <td>
                        <b>{{ $rata }} </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Grade Dosen {{ $kuliah['nama'] }}
                    </td>
                    <td>:</td>
                    <td>
                        <b>{{ $grade }} </b>
                    </td>
                </tr>
            </table>
            <br>
        @endforeach
    </fieldset>
</body>

</html>

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
    ['id_pengunjung' => '1234', 'nm_pengunjung' => 'Ujang', 'alamat' => 'jln.sadang', 'jk' => 'Pria', 'no_tlp' => '087746535774', 'no_ktp' => '2134'],
    ['id_pengunjung' => '1235', 'nm_pengunjung' => 'Wisnu', 'alamat' => 'jln.sadang', 'jk' => 'Pria', 'no_tlp' => '087746535775', 'no_ktp' => '2135'],
    ['id_pengunjung' => '1236', 'nm_pengunjung' => 'Nizar', 'alamat' => 'jln.sadang', 'jk' => 'Pria', 'no_tlp' => '087746535777', 'no_ktp' => '2136'],
    ['id_pengunjung' => '1237', 'nm_pengunjung' => 'RezaM', 'alamat' => 'jln.sadang', 'jk' => 'Pria', 'no_tlp' => '087746535779', 'no_ktp' => '2137'],
    ['id_pengunjung' => '1238', 'nm_pengunjung' => 'Deden', 'alamat' => 'jln.sadang', 'jk' => 'Pria', 'no_tlp' => '087746535770', 'no_ktp' => '2138'],
];
DB::table('pengunjungs')->insert($pengunjung);

    }
}

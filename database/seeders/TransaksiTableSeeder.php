<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
    ['no_transaksi' => '04321', 'id_pengunjung' => '015432','id_karyawan' => '0987', 'jmlh_kamar' => '6', 'tgl_masuk' => '2022-07-01', 'tgl_keluar' => '2022-07-01', 'lama_nginap' => '1', 'total_harga' => '10000' ],
    ['no_transaksi' => '05321', 'id_pengunjung' => '025432','id_karyawan' => '0986', 'jmlh_kamar' => '7', 'tgl_masuk' => '2022-07-02', 'tgl_keluar' => '2022-07-01', 'lama_nginap' => '1', 'total_harga' => '10000' ],
    ['no_transaksi' => '06321', 'id_pengunjung' => '035432','id_karyawan' => '0985', 'jmlh_kamar' => '5', 'tgl_masuk' => '2022-07-03', 'tgl_keluar' => '2022-07-01', 'lama_nginap' => '1', 'total_harga' => '10000' ],
    ['no_transaksi' => '07321', 'id_pengunjung' => '045432','id_karyawan' => '0984', 'jmlh_kamar' => '3', 'tgl_masuk' => '2022-07-04', 'tgl_keluar' => '2022-07-01', 'lama_nginap' => '1', 'total_harga' => '10000' ],
    ['no_transaksi' => '08321', 'id_pengunjung' => '055432','id_karyawan' => '0983', 'jmlh_kamar' => '4', 'tgl_masuk' => '2022-07-05', 'tgl_keluar' => '2022-07-01', 'lama_nginap' => '1', 'total_harga' => '10000' ],
];
DB::table('transaksis')->insert($transaksi);

    }
}

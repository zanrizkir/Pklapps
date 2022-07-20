<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Datail_transaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datail_transaksi = [
    ['id_dtl_transaksi' => '01123A', 'no_transaksi' => '4321', 'no_kamar' => '1'],
    ['id_dtl_transaksi' => '02123A', 'no_transaksi' => '5321', 'no_kamar' => '2'],
    ['id_dtl_transaksi' => '03123A', 'no_transaksi' => '6321', 'no_kamar' => '3'],
    ['id_dtl_transaksi' => '04123A', 'no_transaksi' => '7321', 'no_kamar' => '4'],
    ['id_dtl_transaksi' => '05123A', 'no_transaksi' => '8321', 'no_kamar' => '5'],
];
DB::table('datail_transaksis')->insert($datail_transaksi);

    }
}

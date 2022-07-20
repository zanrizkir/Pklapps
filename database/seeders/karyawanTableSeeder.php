<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class karyawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [['id_karyawan' => '1', 'nm_karyawan' => 'Sauzan', 'jk' => 'Pria'], ['id_karyawan' => '2', 'nm_karyawan' => 'Farel', 'jk' => 'Pria'], ['id_karyawan' => '3', 'nm_karyawan' => 'Aziz', 'jk' => 'Pria'], ['id_karyawan' => '4', 'nm_karyawan' => 'Sofyan', 'jk' => 'Pria'], ['id_karyawan' => '5', 'nm_karyawan' => 'Siti', 'jk' => 'Wanita']];
        DB::table('karyawans')->insert($karyawan);
    }
}

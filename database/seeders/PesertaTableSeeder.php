<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta = [
            ['no_peserta' => '2001', 'kode_mp' => 'MP01'],
            ['no_peserta' => '2002', 'kode_mp' => 'MP02'],
            ['no_peserta' => '2003', 'kode_mp' => 'MP01'],
            ['no_peserta' => '2003', 'kode_mp' => 'MP02'],
            ['no_peserta' => '2002', 'kode_mp' => 'MP01'],
            ['no_peserta' => '2001', 'kode_mp' => 'MP02'],
        ];
        DB::table('pesertas')->insert($peserta);

    }
}

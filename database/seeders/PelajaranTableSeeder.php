<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelajaran = [
            ['kode'=>'MP01','nama_mp'=>'ALGORITIMA','sks'=>'2','semester'=>'1'],
            ['kode'=>'MP02','nama_mp'=>'BASISDATA','sks'=>'3','semester'=>'1'],
            ['kode'=>'MP03','nama_mp'=>'ASSEMBLY','sks'=>'2','semester'=>'2'],
        ];
        DB::table('pelajarans')->insert($pelajaran);

    }
}

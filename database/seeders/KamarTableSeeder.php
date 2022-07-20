<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $kamar = [
            ['no_kamar' => '01', 'jenis_kamar' => 'Delux', 'harga' => '10000'],
            ['no_kamar' => '02', 'jenis_kamar' => 'Delux', 'harga' => '10000'],
            ['no_kamar' => '03', 'jenis_kamar' => 'Delux', 'harga' => '10000'],
            ['no_kamar' => '04', 'jenis_kamar' => 'Delux', 'harga' => '10000'],
            ['no_kamar' => '05', 'jenis_kamar' => 'Delux', 'harga' => '10000'],
        ];
        DB::table('kamars')->insert($kamar);
    }
}

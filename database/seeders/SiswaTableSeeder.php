<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['no' => '2001', 'nama' => 'Badu', 'jk' => 'L', 'jurusan' => 'TK'],
            ['no' => '2002', 'nama' => 'Muliati', 'jk' => 'P', 'jurusan' => 'TE'],
            ['no' => '2003', 'nama' => 'Rahmiadi', 'jk' => 'L', 'jurusan' => 'TK'],
            ['no' => '2004', 'nama' => 'Nasrol', 'jk' => 'L', 'jurusan' => 'TK'],
        ];
        DB::table('siswas')->insert($siswa);
    }
}

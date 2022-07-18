<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            [
                'title' => 'Tips capat nikah',
                'content' => 'Assalaam Studio',
            ],
            [
                'title' => 'Haruskah Menunda nikah',
                'content' => 'Assalaam Studio',
            ],
            [
                'title' => 'Membangun Visi Misi Keluarga',
                'content' => 'Assalaam Studio',
            ],
        ];

        // Masukan Data Kedatabase
        DB::table('posts')->insert($sampel);
    }
}

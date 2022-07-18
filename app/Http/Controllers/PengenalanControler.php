<?php

namespace App\Http\Controllers;

class PengenalanControler extends Controller
{
    public function pengenalan()
    {
        $nama = 'Muhamad Sauzan Rizki Asakir';
        $umur = 17;
        return view('pages.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages.intro', compact('nama', 'alamat', 'umur'));
    }
    public function siswa(){
        $a=[
           array ("id" => 1, "name "=> "Sauzan", "age" => 17, "mapel" => ["Matematika","Fisika"],'hobi' => ['Main Game','Tidur']), 
           array ("id" => 2, "name "=> "Momoy", "age" => 16, "mapel" => ['B.Indonesia','B.Inggris'],'hobi' => ['Nonton Drakor','NgeRp']), 
           array ("id" => 3, "name "=> "Mutia", "age" => 16, "mapel" => ['Seni Budaya','Pjok'],'hobi' => ['Belajar','Memasak']), 
        ];
        // dd($a);

        return view('pages.siswa', ['siswa' => $a]);
    }
}

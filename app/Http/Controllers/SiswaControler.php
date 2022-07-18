<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\Peserta;
use App\Models\Pelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaControler extends Controller
{
     public function siswa(){

        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $pelajaran = Pelajaran::all();
        
        return view('post.siswa', compact('siswa' , 'peserta', 'pelajaran'));
    }
    
}

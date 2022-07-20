<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\siswa;
use App\Models\Peserta;
use App\Models\Karyawan;
use App\Models\Pelajaran;
use App\Models\Transaksi;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Models\Datail_transaksi;
use App\Http\Controllers\Controller;

class SiswaControler extends Controller
{
    public function siswa()
    {
        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $pelajaran = Pelajaran::all();
        $datail_transaksi = Datail_transaksi::all();
        $kamar = Kamar::all();
        $karyawan = Karyawan::all();
        $pengunjung = Pengunjung::all();
        $transaksi = Transaksi::all();

        return view('post.siswa', compact('siswa', 'peserta', 'pelajaran', 'datail_transaksi', 'kamar', 'karyawan', 'pengunjung', 'transaksi'));
    }
}

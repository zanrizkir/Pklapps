<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Karyawan;
use App\Models\Transaksi;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Models\Datail_transaksi;
use Illuminate\Routing\Controller;

class HotelController extends Controller
{
    public function hotel(){

        $datail_transaksi = Datail_transaksi::all();
        $kamar = Kamar::all();
        $karyawan = Karyawan::all();
        $pengunjung = Pengunjung::all();
        $transaksi = Transaksi::all();
        
        return view('post.hotel', compact('datail_transaksi' , 'kamar', 'karyawan', 'pengunjung', 'transaksi'));
    }
}

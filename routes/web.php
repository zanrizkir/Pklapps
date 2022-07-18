<?php
//Controler
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaControler;
use App\Http\Controllers\LatihanControler;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PelajaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// ROUTE BASIC
route::get('/hello', function () {
    echo "<center>
    <title>Heloo</title>
    <h1 class='hallo'><u>HALLO SEMUANYA </h1>
    <br>
    <h2>Kami Sedang Belajar Laravel Dasar </u></h2>
    ";
});

//Route Basic Lanjut Ke View
route::get('/home', function () {
    return view('home');
});
route::get('/index', function () {
    return view('pages.index');
});
route::get('/index1', function () {
    return view('pages.watashi');
});
route::get('/index2', function () {
    return view('pages.sauzan');
});

//Route Parameter
route::get('/biodata/{nama}', function ($a) {
    return view('pages.biodata', compact('a'));
});

route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{kelas}/{hobi}', function ($a, $b, $c, $d, $e, $f) {
    return view('pages.biodata', compact('a', 'b', 'c', 'd', 'e', 'f'));
});

//Route Optional Parameter
route::get('/pesanan/{makanan?}', function ($a = 'Makanan Habis') {
    return view('pages.makanan', compact('a'));
});

//latihan
route::get('/menu/{menu?}/{menu1?}', function ($a = 'Silahkan Pesan ', $b = 'Silahkan Pesan') {
    return view('pages.makanan', compact('a', 'b'));
});

use App\Http\Controllers\PengenalanControler;

//passing data dari controller ke view
route::get('/pengenalan', [App\Http\Controllers\PengenalanControler::class, 'pengenalan']);

//Passing data dari dinamis(route parameter) dari controller ke view
route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\PengenalanControler::class, 'intro']);

//Route Looping dinamis
route::get('/siswa', [App\Http\Controllers\PengenalanControler::class, 'siswa']);

// Route Latihan ke 1
route::get('/latihan1', [App\Http\Controllers\LatihanControler::class, 'latihan1']);

//Route Latihan Dosen
route::get('/kampus', [App\Http\Controllers\LatihanControler::class, 'kampus']);

//Route latihan Ke 3
route::get('/latihan3', [App\Http\Controllers\LatihanControler::class, 'latihan3']);

// Route::get('/post', [PostController::class, 'index']);

//Route Siswa db
Route::get('/siswadb', [SiswaControler::class, 'siswa']);

// Route Peserta db
Route::get('/peserta', [PesertaController::class, 'index']);

Route::get('/pelajaran', [PelajaranController::class,'index']);

<?php

use Illuminate\Support\Facades\Route;

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
route::get('/home', function(){
    return view('home');
});
route::get('/index', function (){
    return view('pages.index');
});
route::get('/index1', function (){
    return view('pages.watashi');
});
route::get('/index2', function (){
    return view('pages.sauzan');
});

//Route Parameter

route::get('/biodata/{nama}', function ($a){
    return view("pages.biodata", compact('a'));

});

route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{kelas}/{hobi}', function ($a,$b,$c,$d,$e,$f){
    return view("pages.biodata", compact('a','b','c','d','e','f'));

});

//Route Optional Parameter
route::get('/pesanan/{makanan?}', function ($a="Makanan Habis") {
    return view ('pages.makanan', compact('a'));
});



//latihan
route::get('/menu/{menu?}', function ($a="Silahkan Pesan ") {
    // if($a == "ayam goreng"){
        return view ('pages.makanan', compact('a'));
    // }else if ($a == 'pizza'){
    //     return view ('pages.makanan', compact('a'));
    // }else if ($a == 'lobster'){
    //     return view ('pages.makanan', compact('a'));
    // }else if ($a == 'tiramisu'){
    //     return view ('pages.makanan', compact('a'));
    // }else if ($a == 'pasta'){
    //     return view ('pages.makanan', compact('a'));
    // }else{
    //     // echo "Silahkan Pesan";
    // }
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
    //return view('welcome');
    //    $nama = 'bejok';
    //     return 'hello '. $nama;
    // menghitung aritmatika
    // $r = 15;
    // $phi = 3.14;
    // $luas_lingkaran = ($r * $r)*$phi;
    // return 'luas lingkaran dengan jumlah jari jari ' . $r . ' adalah '. $luas_lingkaran;

    // //perbandingan
    // $nama = ' Bejok ';
    // $kelas = ' A1 ';
    // $prodi = 'Teknik Informasi';
    // return ' Nama Saya adalah : <b> '. $nama . '</b><br>Saya Kelas : <b>'. $kelas . '</b> <br> Saya Prodi : <b>'. $prodi;
    
    
    Route::get('/', function () {
        return view('index');     
});
    Route::get('mahasiswa', function () {
        return view('mahasiswa');     
});
    Route::get('profile', function () {
        return view('profile');     
});
    Route::get('about', function () {
        return view('about');     
});
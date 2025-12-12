<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\resmhsController;
use App\Http\Controllers\resprodiController;


Route::get('/resmhs', [resmhsController::class, 'index']);
Route::get('/resmhs/create',[resmhsController::class,'create']);
Route::get('/resmhs/update',[resmhsController::class,'updateManual']);
Route::get('/resmhs/destroy',[resmhsController::class,'destroyManual']);


Route::get('/resprodi', [resprodiController::class, 'index']);
Route::get('/resprodi/create', [resprodiController::class, 'create']);
Route::get('/resprodi/update', [resprodiController::class, 'updateManual']);
Route::get('/resprodi/destroy', [resprodiController::class, 'destroyManual']);

Route::get('/prodi', [prodiController::class, 'index']);
Route::get('/prodi/create', [prodiController::class, 'create']);
Route::get('/prodi/update', [prodiController::class, 'updateManual']);
Route::get('/prodi/destroy', [prodiController::class, 'destroyManual']);





Route::get('/', function () {
    $title = "WebTita.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebTita.Com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/home', function(){
    $title = "WebTita.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebTita.Com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/profil', function () {
    $title = "Profil Mahasiswa Polindra";
    $slug = "profil";

    $mahasiswa = [
        'nama'           => 'Tita',
        'nim'            => '2403018',
        'program_studi'  => 'D3 Teknik Informatika',
        'hobi'           => 'Badminton dan Memasak',
        'lama_praktik'   => 'Satu Minggu',
    ];

    return view('konten.profil', compact('title', 'slug', 'mahasiswa'));
});

Route::get('/mahasiswa', function () {
    $title = "Data Mahasiswa";
    $slug = "mahasiswa";

    $mahasiswa = [
        ["nim" => "2403018", "nama" => "Tita", "hobi" => "Menyanyi dan Bermain Badminton"],
        ["nim" => "2403028", "nama" => "Ican", "hobi" => "Bermain Bola"],
        ["nim" => "2403038", "nama" => "Widia", "hobi" => "Memasak"],
        ["nim" => "2403048", "nama" => "Alikha", "hobi" => "Menulis"],
        ["nim" => "2403058", "nama" => "Alya", "hobi" => "Melukis"],
        ["nim" => "2403068", "nama" => "Anah", "hobi" => "Membaca"],
    ];

    return view('konten.mahasiswa', compact('title', 'slug', 'mahasiswa'));
});







//Route::get('/', [HomeController::class, 'index']);

//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/mhs', [MhsController::class, 'index'])->name('mahasiswa');
//Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');
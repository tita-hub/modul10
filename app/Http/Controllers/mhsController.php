<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index() {
        $mhs = "Tita";
        return view ('mahasiswa/index',compact('mhs'));
        //echo "<a href='/home'>HOME</a> - ";
        //echo "<a href='/mhs'>MAHASISWA</a> - ";
        //echo "<a href='/prodi'>PRODI</a>";
        //echo "<hr>";
        //echo "<h2>Page > Mahasiswa</h2>";
    }
}

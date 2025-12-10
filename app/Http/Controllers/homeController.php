<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        echo "<a href='/home'>HOME</a> - ";
        echo "<a href='/mahasiswa'>MAHASISWA</a> - ";
        echo "<a href='/prodi'>PRODI</a>";
        echo "<hr>";
        echo "<h2>Page > Home</h2>";
    }
}

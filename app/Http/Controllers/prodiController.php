<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index() {
        $prodi = "Tita";
        return view ('prodi/index',compact('prodi'));
    }

}

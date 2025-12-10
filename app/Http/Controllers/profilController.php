<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index() {
        $mhs = "Tita";
        return view ('profil/index',compact('profil'));
    }

}

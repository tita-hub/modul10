<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;


class resmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
    $title = "Mahasiswa WebTita.Com";
    $slug = "mahasiswa";
    $mhs = "Tita";
    //$dataMhs = $this->show();
    $dataMhs = mahasiswa::all();
    return view('resmhs.index',
        compact('mhs','title','slug','dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DB::table('mahasiswa')->insert([
            'nim' => 22030003,
            'nama' => 'Tita',
            'prodi' => 'D3TI',
            'angkatan' => 2024]);
        echo "Data mahasiswa berhasil ditambahkan";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id="")
    {
        $id = array(
            [
            'nim' => '22030001',
            'nama' => 'Nadia',
            'prodi' => 'D3TI',
            'angkatan' => '2022',
            ],
            [
            'nim' => '22030002',
            'nama' => 'Zahra',
            'prodi' => 'D3TI',
            'angkatan' => '2022',
            ],
            [
            'nim' => '22030003',
            'nama' => 'Tita',
            'prodi' => 'D3TI',
            'angkatan' => '2024',
            ]
        );
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateManual()
    {
        DB::table('mahasiswa')
            ->where('nim','22030003')
            ->update([
            'nama' => 'Gavi',
            'prodi' => 'D3TI',
            'angkatan' => 2024]);
        echo "Data mahasiswa 22030003 berhasil di perbaharui";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyManual()
    {
        DB::table('mahasiswa')
            ->where('nim','22030003')
            ->delete();
        echo "Data mahasiswa 22030003 berhasil di hapus";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Prodi";
        $slug  = "prodi";

        $dataProdi = DB::table('prodi')->get();

        return view('resprodi.index', compact('title', 'slug', 'dataProdi'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DB::table('prodi')->insert([
            'kodeprodi' => 'D3MI',
            'namaprodi' => 'Manajemen Informatika'
        ]);

        echo "Data prodi berhasil ditambahkan";
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
            'nama' => 'Tita',
            'namaprodi' => 'TI',
            'jenjang' =>'D3'
            ],
            [
            'nama' => 'Alikha',
            'namaprodi' => 'TI',
            'jenjang' =>'S1'
            ],
            [
            'nama' => 'Widia',
            'namaprodi' => 'TI',
            'jenjang' =>'D4'
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
        DB::table('prodi')
            ->where('kodeprodi', 'D3MI')
            ->update([
                'namaprodi' => 'MI Manajemen Industri'
            ]);

        echo "Data prodi berhasil diperbarui";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyManual()
    {
        DB::table('prodi')
            ->where('kodeprodi', 'D3MI')
            ->delete();

        echo "Data prodi berhasil dihapus";
    }
}

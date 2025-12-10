<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('mahasiswa')->insert(array(
        ['nim' => '22030001',
        'nama' => 'Nadia',
        'prodi' => 'D3TI',
        'angkatan' => '2022'],
        ['nim' => '22030002',
        'nama' => 'Zahra',
        'prodi' => 'D3TI',
        'angkatan' => '2022']
    ));
}

}
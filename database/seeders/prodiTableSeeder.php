<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(
            ['kodeprodi' => 'D3KP',
            'namaprodi' => 'Keperawatan'],
            ['kodeprodi' => 'D3TI',
            'namaprodi' => 'Teknik Informatika'],
            ['kodeprodi' => 'D4TRIK',
            'namaprodi' => 'TRIK'],
        ));
    }
}

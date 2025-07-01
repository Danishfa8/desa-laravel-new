<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['nama' => 'Balita'],
            ['nama' => 'Lansia'],
            ['nama' => 'Pelaku UMKM'],
            ['nama' => 'Disabilitas'],
            ['nama' => 'Stunting'],
            ['nama' => 'Sarana Pendidikan'],
            ['nama' => 'Keluarga Miskin'],
            ['nama' => 'Sarana Ibadah'],
            ['nama' => 'Jembatan'],
        ];

        DB::table('kategori_peta')->insert($data);
    }
}

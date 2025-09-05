<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Rayen Andika Ashari',
                'npm' => '2310631170043',
                'prodi' => 'Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
        ]);
    }
}

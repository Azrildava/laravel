<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::insert(
            [
                'nama' => 'Azril',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0
            ]
            );
    }
}

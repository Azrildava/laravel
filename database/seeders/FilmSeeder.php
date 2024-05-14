<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'Jumanji',
            'Deskripsi' => 'lorem ipmsum..'
        ]);
        Film::insert([
            'judul' => 'The Fast and The Forious',
            'Deskripsi' => 'lorem ipmsumm..',
        ]); 
        Film::insert([
            'judul' => 'Gampang Cuan',
            'Deskripsi' => 'lorem ipsmsum..',
        ]);


    }
}


<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Siswaseeder::class,
            Sekolahseeder::class,
            AlbumMusikSeeder::class,
            Filmseeder::class,
            DetailFilmseeder::class,
            MediaFilmseeder::class,
        ]);
    }
}

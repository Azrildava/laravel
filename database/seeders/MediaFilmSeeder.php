<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'ucok',
            'url_media' => 'https://www.youtube.com/embed/2QKg5SZ_35I?si=19Ju8nnvCeRz5TEV',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'seru',
            'url_media' => 'https://upload.wikimedia.org/wikipedia/id/1/13/Jumanji_Welcome_to_the_Jungle_Poster.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'DHOT',
            'url_media' => 'https://upload.wikimedia.org/wikipedia/id/b/b6/Jumanji_poster.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/2QKg5SZ_35I?si=19Ju8nnvCeRz5TEV',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/2QKg5SZ_35I?si=19Ju8nnvCeRz5TEV',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/ZsJz2TJAPjw?si=udr93y7ugrcdHhXI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Jurnal',
            'url_media' => 'https://www.youtube.com/embed/ZsJz2TJAPjw?si=udr93y7ugrcdHhXI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/ZsJz2TJAPjw?si=udr93y7ugrcdHhXI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'seru',
            'url_media' => 'https://upload.wikimedia.org/wikipedia/id/f/f0/Poster_Gampang_Cuan.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'seru',
            'url_media' => 'https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/fast-and-furious-master.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Podcast',
            'url_media' => 'https://www.youtube.com/embed/RMwKojXV-Dk?si=sC7F1oTPgIToL5RV',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/RMwKojXV-Dk?si=sC7F1oTPgIToL5RV',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'seru',
            'url_media' => 'https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABXmMDTg3NyeebiXotIupPZDHOIWLMRBvsXJY2d5SzHx_tKD4Wh4eeK56udA61JY8G7QvTp4w3BnPvfm5Wtwdu3_fQaPEjrJVU9du.jpg?r=701',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'seru',
            'url_media' => 'https://www.youtube.com/embed/RMwKojXV-Dk?si=sC7F1oTPgIToL5RV',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'seru',
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/07/2023/07/17/FB_IMG_1689558842567-1716504373.jpg',
        ]);


    }
}

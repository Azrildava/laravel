<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt2283362',
            'url_indb' => 'https://www.imdb.com/title/tt2283362/?ref_=nv_sr_srsg_3_tt_6_nm_2_q_juman',

        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt0232500',
            'url_indb' => 'https://www.imdb.com/title/tt0232500/?ref_=nv_sr_srsg_6_tt_8_nm_0_q_fast%2520and',

        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt28376705',
            'url_indb' => 'https://www.imdb.com/title/tt28376705/mediaviewer/rm3497742337/?ref_=tt_ov_i',

        ]);


    }
}

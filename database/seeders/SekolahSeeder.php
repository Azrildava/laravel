<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sekolah::insert(
    [
        'nama' => 'SMK ASSALAAM BDG',
        'alamat' => 'Jl.Cibaduyut',
        'email' => 'smkassalaam@gmail.com',
        'telepon' => '0897536',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMK ANGKASA 1',
        'alamat' => 'Jl.Cilampeni',
        'email' => 'smkangkasa@gmail.com',
        'telepon' => '08975',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMK ANGKASA 2',
        'alamat' => 'Jl.Cilampeni',
        'email' => 'smkangkasa@gmail.com',
        'telepon' => '08975',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMA ANGKASA',
        'alamat' => 'Jl.Cilampeni',
        'email' => 'smaangkasa@gmail.com',
        'telepon' => '08973',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMK MARHAS',
        'alamat' => 'Jl.Jadeg',
        'email' => 'smkmarhas@gmail.com',
        'telepon' => '089753',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMA 1 MARGAHAYU',
        'alamat' => 'Jl.Lanud',
        'email' => 'sma1Margahayu@gmail.com',
        'telepon' => '0897',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMA 1 MARGAASIH',
        'alamat' => 'Jl.Margaasih',
        'email' => 'sma1margaasih@gmail.com',
        'telepon' => '0426789',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMK PASUNDAN 1',
        'alamat' => 'Jl.balong gede',
        'email' => 'smkpasundan1@gmail.com',
        'telepon' => '0826089',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMA ASSALAAM',
        'alamat' => 'Jl.Cibaduyut',
        'email' => 'smaassalaam@gmail.com',
        'telepon' => '094534289',
        'status' => 'Aktif',
    ]
);
    Sekolah::insert(
    [
        'nama' => 'SMK KARYA PEMABNGUNAN',
        'alamat' => 'Jl.Lanud',
        'email' => 'smkkaryapembangunan@gmail.com',
        'telepon' => '08926719',
        'status' => 'Aktif',
    ]
);




    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;
class ArtikelController extends Controller
{
    public function getArtikel() {

        $artikel = Artikel::all();
        return view('artikel.tampil', compact('artikel'));

    }

     public function getArtikelById($id)
    {
        //melihat semua data yang ada di dalam model "Movie"
        $artikel = Artikel::findOrFail($id);
        return view('artikel.index', compact('artikel'));
    }
    
     public function getArtikelByKategori($kategori)
    {
        //melihat semua data yang ada di dalam model "Movie"
        $artikel = Artikel::where('kategori',$kategori)->get();
        return view('artikel.kategori', compact('artikel'));
    }
}

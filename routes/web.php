<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Models\Film;
//import controller
use App\Http\Controllers\MyController;
//import Movie Controller
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/About', function () {
    $nama = "Azril Dava Ilham";
    $jk = "laki-laki";
    $pendidikan = "SMK";
    $pekerjaan = "Sekolah";
    return view('biodata', compact('nama','jk','pendidikan','pekerjaan'));
});

//Parameter
Route::get('/sample/{nama}', function (Request $request,$nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});

Route::get('siswa', function () {
    return view('siswa');
});

Route::get('Album', function () {
    return view('AlbumMusik');
});
Route::get('film', function () {
    return view('film');
});
Route::get('film/{id}', function (int $id) {
    return view('detail-film',['film' => Film::findorfail($id)]);
});

//Route with controller
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[MyController::class,'animals']);

//route movie
Route::get('movie',[MovieController::class, 'getMovie'])->middleware('auth');
Route::get('movie/{id}',[MovieController::class, 'getMovieById']);

Route::get('artikel', [ArtikelController::class, 'getArtikel']);
Route::get('artikel/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);


// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::resource('penulis', PenulisController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('buku', BukuController::class);
});

// route guest(tamu / pengunjung)
Route::get('/',[FrontController::class, 'buku']);
Route::get('buku/{id}',[FrontController::class, 'detailBuku']);

// Route::get('sekolah', function () {
//     return view('siswa');
// });










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

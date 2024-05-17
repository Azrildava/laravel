<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamp = true;


    // Relasi Many To Many
    public function buku(){
        return $this->BelongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }

}

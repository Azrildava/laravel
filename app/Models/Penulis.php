<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis', 'bio'];
    public $visible = ['nama_penulis', 'bio'];
    public $timestamp = true;

    // Membuat relasi one to Many ke Model buku
    public function buku(){
        // data Model penulis bisa memiliki banyak data
        // dari Model Buku melalui fk 'id_penulis'
        return $this->hasMany(Buku::class, 'id_penulis');
    }
}

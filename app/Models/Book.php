<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['id', 'name', 'jumlah_buku', 'jumlah_di_pinjam', 'tanggal_masuk'];
}

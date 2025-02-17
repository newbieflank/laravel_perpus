<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = ['id', 'id_buku', 'id_user', 'penanggung_jawab', 'tanggal_pinjam', 'jumlah_pinjam'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi ke tabel Anggota (Setiap transaksi milik satu anggota)
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
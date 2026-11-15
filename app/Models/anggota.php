<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi ke tabel Users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke tabel Transaksi
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
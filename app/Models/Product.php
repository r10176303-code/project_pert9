<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar data bisa disimpan secara massal
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];
}
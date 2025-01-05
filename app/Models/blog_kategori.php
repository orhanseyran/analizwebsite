<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_kategori extends Model
{
    protected $table = 'blog_kategori'; // Tablo adını belirtiyoruz

    protected $fillable = ['baslik', 'resim', 'user_name', 'durum']; // Doldurulabilir alanlar

    use HasFactory;
}

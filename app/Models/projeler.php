<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projeler extends Model
{
    protected $table = 'projeler'; // Tablo adını belirtin (Opsiyonel, varsayılan olarak sınıf adının çoğul hali kullanılır).
    protected $fillable = ['resim', 'link', 'baslik']; // Kullanıcı tarafından doldurulabilir alanları belirtin.
    use HasFactory;
}

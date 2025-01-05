<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pma extends Model
{
    protected $table = 'pma'; // Eğer tablo adı farklıysa buraya yazabilirsiniz.

    protected $fillable = [
        'baslik',
        'resim',
        'user_name',
        'product_id',
        'telefon',
        'email',
        'kullanici_ip',
        'fiyat',
        'pma_skor',
    ];

    use HasFactory;
}

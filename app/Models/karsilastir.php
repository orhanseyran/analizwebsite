<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karsilastir extends Model
{
    protected $table = "karsilastir";

    protected $fillable = [
    'urun_id',
    'baslik',
    'aciklama',
    'resim',
    'kategori',
    'eskifiyat',
    'fiyat',
    'kdv',
    'meta',
    'meta_aciklama',
    'user_id',
    'active',
    "avg",
    "marka",
    "ürün_hammaddesi",
    "stok_miktarı",
    "yorum_sayisi",
];
    use HasFactory;
}

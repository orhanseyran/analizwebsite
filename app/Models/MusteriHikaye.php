<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusteriHikaye extends Model
{
    use HasFactory;

    // Eğer tablo adı varsayılan adından farklıysa, burada belirtebilirsiniz
    protected $table = 'musteri_hikaye';

    // Modelin doldurulabilir alanlarını belirleyin
    protected $fillable = [
        'ad_soyad',
        'hikaye',
        'resim',
        'video_link',
        'video',
        'ciro',
        'kar_oranı',
    ];

    // Tarih alanlarını otomatik olarak doldurmak isterseniz, burada belirtilir
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

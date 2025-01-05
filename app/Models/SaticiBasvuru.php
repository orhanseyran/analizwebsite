<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaticiBasvuru extends Model
{
    protected $table = 'satici_basvuru'; // Tablo adını belirtiyoruz.

    // Toplu atama yapılabilecek alanlar (fillable).
    protected $fillable = [
        'satici_adi',
        'satici_soyadi',
        'satici_email',
        'satici_telefon',
        'satici_adres',
        'satici_tck',
        'satici_firma_vkn',
        'satici_firma_türü',
        'satici_firma_adres',
        'satici_firma_telefon',
        'satici_firma_email',
        'satici_firma_web',
        'satici_firma_mağazaadı',
        'durum'

    ];
    use HasFactory;
}

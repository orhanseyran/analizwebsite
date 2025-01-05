<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calisanlar extends Model
{
    use HasFactory;

    // Doldurulabilir alanlar
    protected $fillable = [
        'ad',
        'soyad',
        'görev',
        'resim',
        'İşeGrişTarihi',
        'İştenÇıkışTarihi',
        'durum',
        'departman',
        'eğitim_durumu',
        'unvan',
        'maas',
        'telefon',
        'email',
        'adres',
        'linkedin',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'google'
    ];

    // Tarih alanlarını Carbon nesnesi olarak kullanabilmek için aşağıdaki özelliği ekleyebilirsin
    protected $dates = ['İşeGrişTarihi', 'İştenÇıkışTarihi'];
}

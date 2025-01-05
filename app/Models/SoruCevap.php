<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoruCevap extends Model
{
    protected $table = 'soru_cevap';

    // Doldurulabilir alanlar
    protected $fillable = [
        'user_id',
        'urun_id',
        'satici_id',
        'urun_name',
        'user_name',
        'satici_name',
        'soru',
        'soru_türü',
        'cevap',
        'durum',
    ];

    use HasFactory;
}

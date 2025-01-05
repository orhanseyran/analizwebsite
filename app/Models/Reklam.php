<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reklam extends Model
{
    use HasFactory;

    protected $table = 'reklam';

    protected $fillable = [
        'reklam_tipi',
        'reklam_adi',
        'reklam_başlangic',
        'reklam_bitiş',
        'gösterim_sayisi',
        'tiklanma_sayisi',
        'günlük_bütce',
        'toplam_bütce',
        'reklam_bütce',
        'ürünler',
        'Aktif',
        'tbm',
    ];


    public function scopeLatestForUser($query)
    {
        return $query->where('user_id', auth()->user()->id)->latest();
    }
}


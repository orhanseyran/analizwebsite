<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuponlar extends Model
{
    use HasFactory;

    protected $table = 'kuponlar';

    protected $fillable = [
        'id',
        'user_id',
        'kupon_türü',
        'Urun_kapsami',
        'Kupon_Butce',
        'ürünler',
        'Kupon_Tutari',
        'Alisveris_Alt_Limit',
        'Kupon_Adeti',
        'Kupon_Baslangic_Tarihi',
        'Kupon_Bitis_Tarihi'
    ];

    public function scopeKupons($query){
        return $query->where('user_id',auth()->user()->id)->latest()->get();
    }
}

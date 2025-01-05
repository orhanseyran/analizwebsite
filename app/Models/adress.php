<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adress extends Model
{
    protected $table = 'adress'; // Tablo adını belirtin
    protected $fillable = [
        'başlık',
        'user_id',
        'ad',
        'soyad',
        'telefon',
        'email',
        'adres',
        'şehir',
        'durum',
    ];
    use HasFactory;
}

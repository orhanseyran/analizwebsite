<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact'; // Eğer tablo adını değiştirmek istiyorsanız, burayı güncelleyin.

    protected $fillable = [
        'ad',
        'soyad',
        'email',
        'departman',
        'mesaj',
    ];
    use HasFactory;
}

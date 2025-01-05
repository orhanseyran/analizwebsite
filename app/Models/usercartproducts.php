<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercartproducts extends Model
{
    protected $table = 'usercartproducts'; // Tablo adını belirtin
    protected $fillable = [
        'user_id',
        'user_name',
        'urun_id',
        'baslik',
        'resim',
        'fiyat',
        'avg',
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destek extends Model
{
    protected $table = 'destek_script';

    protected $fillable = [

        'user_id','durum', 'konu', 'baslik', 'atanan','destek_numarasi'
    ];

    use HasFactory;
}

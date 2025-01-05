<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasindaBizCreate extends Model
{
    protected $table = 'basinda_biz_create';

    // The attributes that are mass assignable.
    protected $fillable = [
        'baslik',
        'kisa_aciklama',
        'resim',
        'link',
    ];

    use HasFactory;
}

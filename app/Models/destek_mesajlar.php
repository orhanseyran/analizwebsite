<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destek_mesajlar extends Model
{
    protected $table = 'destek_mesajlar';

    protected $fillable = [
        'destek_id', 'mesaj','user_id','user_name'
    ];
    use HasFactory;
}

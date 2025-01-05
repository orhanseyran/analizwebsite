<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalizOlustur extends Model
{
    protected $table = 'analiz_olusturs';
    protected $fillable = [
        'user_id',
        'user_name',
        'name',

        'description',
        'token',
        'status',
    ];
    use HasFactory;
}

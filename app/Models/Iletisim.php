<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim extends Model
{
    use HasFactory;

    protected $table = 'iletisim';

    protected $fillable = ['namesurname', 'email', 'soru', 'durum'];
}

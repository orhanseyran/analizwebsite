<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahminler extends Model
{
    protected $table = 'tahminler';
    protected $fillable = ['tahmin', 'ev','deplasman','tarih', 'mac_id'];
    use HasFactory;
}

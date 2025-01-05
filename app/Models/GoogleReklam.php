<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleReklam extends Model
{
    protected $table = 'google_reklam';

    protected $fillable = ['reklam_adi', 'reklam_turu', 'reklam_konumu', 'reklam_kodu'];


    use HasFactory;
}

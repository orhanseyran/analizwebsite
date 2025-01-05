<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReklamIstatistik extends Model
{
    protected $table = 'reklam_istatistik';

    protected $fillable = [
        'reklam_id', 
        'gunluk_reklam_tiklamasi', 
        'tbm_performans', 
        'ip_adress', 
        'last_clicked_at',
        'created_at', 
        'updated_at', 
        'günlük_reklam_gösterimi'
    ];
    use HasFactory;
}

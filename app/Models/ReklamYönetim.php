<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReklamYönetim extends Model
{
    protected $table = "Reklam_Yönetim";

    protected $fillable = [
        'günlük_reklam_gösterimi',
        'günlük_reklam_tiklamasi',
        'tbm_performans',
        "reklam_bakiyesi_1",
        "reklam_bakiyesi_2",
        "reklam_bakiyesi_3",
        "reklam_bakiyesi_4",
        "reklam_bakiyesi_5",
        'toplam_reklam_bakiyesi',
        "user_id",
    ];


    use HasFactory;
}

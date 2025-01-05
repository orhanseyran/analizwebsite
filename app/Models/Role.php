<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "rol_yönetimi";
    protected $fillable = [

        "yetki",
        "durum",
    ];
    use HasFactory;
}

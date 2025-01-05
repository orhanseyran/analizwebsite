<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kargo extends Model
{
    protected $table = 'kargo';
    protected $fillable = [
        "id",
        "kargo_adi",
        "resim"
    ];
    use HasFactory;
}

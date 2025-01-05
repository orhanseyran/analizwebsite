<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class markalar extends Model
{
    protected $table = 'markalar';
    protected $fillable = [
        "id",
        "marka_adi",
        "resim"
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResimliYorum extends Model
{
    protected $table = "resimli_yorum";
    protected $fillable = ["resim"];
    use HasFactory;
}

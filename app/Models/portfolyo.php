<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolyo extends Model
{
    protected $table = "portfolyo";
    protected $fillable = ["baslik","aciklama","resim","kategori"];
    use HasFactory;
}

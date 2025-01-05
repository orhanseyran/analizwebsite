<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bannerkategori extends Model
{
    protected $table = "bannerkategori";

    protected $fillable = ["kategori","resim"];


    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malzeme extends Model
{
    protected $table = "urun_malzeme";

    protected $fillable = ["urun_malzeme"];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunBoyut extends Model
{


    protected $table  = "_urun_boyut";

    protected $fillable = ["urun_boyut"];
    use HasFactory;
}

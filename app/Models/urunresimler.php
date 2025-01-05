<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunresimler extends Model
{
    protected $table = "urunresimler";
    protected $fillable = ["resimler","urun_id"];
    use HasFactory;
}

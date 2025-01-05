<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunRenk extends Model
{

    protected $table  = "_urun_renk";

    protected $fillable = ["renk_kodu"];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ürüntipleri extends Model
{
    protected $table = 'uruntipleri';
    protected $fillable = [
        "urun_tipi"
    ];
    use HasFactory;
}

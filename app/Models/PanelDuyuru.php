<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelDuyuru extends Model
{
    protected $table = "panel_duyuru";
    protected $fillable = [
        "duyuru_resim",
        "aktif",
    ] ;
    use HasFactory;
}

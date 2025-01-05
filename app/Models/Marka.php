<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    protected $table ='marka';

    protected $fillable = [
       'marka_name',
       "marka_image",
       "marka_satiş",
    ];
    use HasFactory;
}

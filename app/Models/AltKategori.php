<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltKategori extends Model
{
    protected $table = 'alt_category';

    protected $fillable = [
        'name',
        'slug',
        'parent_category',
        'shortdescription',
        'full_description',
        'sell',
        'products',
        'durum',
        'products_tag',
    ];
    use HasFactory;
}

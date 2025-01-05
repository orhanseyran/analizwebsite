<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        "id",
        'name',
        'slug',
        'shortdescription',
        "count_parent",
        'full_description',
        'sell',
        "commission",
        'products',
        'products_tag',
    ];

        public function parentCategory()
    {
        return $this->belongsTo(AltKategori::class);
    }


}

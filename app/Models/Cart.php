<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";
    protected $fillable = [
        'kullanıcı',
        'product_name',
        'product_image',
        'product_price',
        'total_price',
        'product_quantity',
        'product_id',

    ];
}

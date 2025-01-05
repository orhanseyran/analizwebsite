<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponMatch extends Model
{
    use HasFactory;

    protected $table = 'coupon_matches';

    protected $fillable = [
        'coupon_name',
        "user_id",
        "user_name",
        "user_image",
        "kupon_id",
        'match_name',
        'prediction',
        'analysis'
    ];
}

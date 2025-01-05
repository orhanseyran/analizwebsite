<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WooCommereWordpress extends Model
{
    protected $table = '_wordpress_woocomerce';

    protected $fillable = ['site_url', 'key', 'secret','durum'];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordpresJwt extends Model
{
    protected $table = '_wordpress_jwt';
    protected $fillable = ['token', 'site_url', 'username', 'password','durum'];

    use HasFactory;
}

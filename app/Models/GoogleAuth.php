<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleAuth extends Model
{
    protected $table = 'google';
    protected $fillable = [
        'name', 'client_id', 'client_secret', 'redirect_uri',
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboneler extends Model
{
    protected $table = 'aboneler';
    protected $fillable = ['name', 'email', 'phone','durum'];

    use HasFactory;
}

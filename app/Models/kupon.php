<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kupon extends Model
{
    protected $table = "kupon";
    protected $fillable = ["code","discount_percentage"];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    protected $table = "shopier";
    protected $fillable = ["orders_id","active"];

    public function order(){
        return $this->hasMany(orders::class);
    }
    use HasFactory;
}

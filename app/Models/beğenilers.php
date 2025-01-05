<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beğenilers extends Model
{
    protected $table = 'beğeniler'; // Modelin hangi tabloya karşılık geldiğini belirtiyoruz.
    protected $fillable = ['title', 'price', 'resim', 'user_id',"urun_id","avg","yorum_sayisi"];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yorum extends Model
{
    
    protected $table = 'yorum'; // Tablo adını belirtin

    protected $fillable = [
        'urun_id',
        'user_id',
        'rating',
        'name',
        'comment',
    ];
    public function product()
{
    return $this->belongsTo(Product::class);
}
    use HasFactory;
}

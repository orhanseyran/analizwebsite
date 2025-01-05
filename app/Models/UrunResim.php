<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunResim extends Model
{
    protected $table ="resimler";
    protected $fillable = ["urun_id","resim_adi"];


    use HasFactory;

        public function resimler()
    {
        return $this->belongsTo(product::class); //verileri gönderilecek tablo
    }
}

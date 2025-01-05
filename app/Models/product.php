<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "urunler";
    protected $fillable = ['baslik',
    'aciklama',
    'resim',
    'r1',
    'r2',
    'r3',
    'r4',
    'r5',
    'r6',
    'r7',
    'kargo',
    'kategori',
    'eskifiyat',
    'fiyat',
    'commission',
    'kdv',
    'meta',
    'meta_aciklama',
    'user_id',
    'active',
    "avg",
    "marka",
    "ürün_hammaddesi",
    "stok_miktarı",
    "stok_kodu",
    "sipariş_adedi",
    "satis_miktari",
    "reklam",
    "tbm",
];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(yorum::class);
    }

    public function favorites()
    {
        return $this->hasMany(beğenilers::class);
    }
    // public function kategori(){

    //     return $this->belongsTo(Kategori::class);

    // }
    // public function urunResimler()
    // {
    //     return $this->hasMany(UrunResim::class, 'urun_id'); //alıancak ürünresimleri
    // }
    // public function portfolyoresimler(){
    //     return $this->hasMany(Portfolyoresimler::class,"resim_id");
    // }

    // public function comments (){
    //     return $this->hasMany(Comments::class,"urun_id");
    // }
    // public function wishlisturun(){
    //     return $this->hasMany(wishlist::class,"urun_id");
    // }
    public function scopeKatagori($query,$kategori){
        return $query->where("kategori",[$kategori]);
     }
       public function scoperenk($query,$color){
        return $query->where("color",[$color]);
     }
    public function scopeUrunSatici($query){
        return $query->where("active",auth()->user()->id);
    }
    public function scopeAktifÜrün($query){
        return $query->where("active",1);
    }
}

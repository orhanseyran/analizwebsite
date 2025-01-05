<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = "blog";
    protected $fillable = ["baslik","icerik","resim","user_name","anahtar_kelime","Meta_aciklama","kategori"];
    use HasFactory;

    // public function yorumlar(){

    //     return $this->hasMany(CommentsBlog::class,"blog_id");

    // }
    // public function reply(){

    //     return $this->hasMany(reply_comment::class,"reply_id");

    // }
}

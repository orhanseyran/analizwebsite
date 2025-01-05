<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'google_id',
        'Soyad',
        'Sehir',
        'SirketAdi',
        'Hakkimizda',
        'VKN',
        'TCK',
        'Adres',
        'SirketTuru',
        'Role',
        'Ünvan',
        'Takdirler',
        'Takipciler',
        'TakipEdilenler',
        'HizmetSayisi',
        'ProfilZiyareti',
        'YabanciDil',
        'Eğitimi',
        'Memleketi',
        'MeslekiDeneyim',
        'UzmanlikAlani',
        'HizmetBölgeleri',
        'avg',
        'Rozetler',
        'İnstagram',
        'Facebook',
        'Youtube',
        'X',
        'linkedin',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'unv',
        'TelefonNumarası',
        'Doğum_Tarihi',
        'aciklama',
        'Ülke',
        'İlce',
        'website',
        'banner',
        'profilresim',
        'sipariş_sayisi',
        'ürün_sayisi',
        "last_activity",
    ];



    public function favorites()
    {
        return $this->hasMany(beğenilers::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

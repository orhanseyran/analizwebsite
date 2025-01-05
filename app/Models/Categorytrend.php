<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorytrend extends Model
{
    protected $table = 'categories';

    // Eklenecek veya güncellenecek alanlar
    protected $fillable = [
        'id',
        'name',
        'parent_id'
    ];

    // Kategorinin kendi alt kategorilerini almak için ilişki
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    use HasFactory;
}

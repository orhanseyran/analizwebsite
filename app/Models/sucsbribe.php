<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sucsbribe extends Model
{
    protected $table = 'sucsbribe';
    protected $fillable = [
        'email',
        'user_name',
        'user_id',
    ];
}
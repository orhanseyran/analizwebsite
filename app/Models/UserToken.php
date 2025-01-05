<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    protected $table = 'tokens';
    protected $fillable = ['user_id', 'token'];
    use HasFactory;
}

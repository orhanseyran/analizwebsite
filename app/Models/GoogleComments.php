<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleComments extends Model
{
    protected $table = 'google_comments';
    protected $fillable = ['script_code'];

    use HasFactory;
}

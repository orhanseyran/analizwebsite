<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeChannel extends Model
{
    protected $table = 'youtube_channel';
    protected $fillable = ['script_code'];


    use HasFactory;
}

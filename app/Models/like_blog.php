<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like_blog extends Model
{
    protected $table='like_blog';
    protected $fillable=['user_like_id','blog_like_id'];
}

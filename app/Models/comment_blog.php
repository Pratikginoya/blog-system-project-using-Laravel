<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_blog extends Model
{
    protected $table='comment_blog';
    protected $fillable=['user_cmt_id','blog_cmt_id','cmt'];
}

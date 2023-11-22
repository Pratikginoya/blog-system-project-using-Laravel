<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_details extends Model
{
    protected $table = 'blog_details';
    protected $fillable = ['user_id','title','s_details','f_details','slogan','tag','image_main','image_2','image_3'];
}

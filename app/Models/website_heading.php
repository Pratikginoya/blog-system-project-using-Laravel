<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class website_heading extends Model
{
    protected $table = 'website_heading';
    protected $fillable = ['title','details','image'];
}

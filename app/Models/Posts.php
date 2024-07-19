<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug','description','keywords','add_slider','add_ourpics','showusers','tags','url', 'content','status','image','image_url','additional_images','files','category','subcategory'];
}

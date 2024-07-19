<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug','description','keywords','language','parent_link','order','location','visibility','show_title','show_breadcrumb','show_rightcolumn','content'];

}

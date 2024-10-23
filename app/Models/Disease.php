<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disease extends Model
{
   

    use HasFactory;
    protected $fillable = ['title', 'description', 'category_slug','MainLead', 'subLead', 'sectionLead', 'short_description', 'tips'];
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'keywords' , 'site_name' , 'site_url' , 'twitter_title' , 'twitter_description'];
}

<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterAbout extends Model
{
    use HasFactory;

    protected $fillable = ['description' , 'url_instagram' , 'url_twitter' , 'url_facebook'];
}

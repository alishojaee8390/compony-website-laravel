<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['image' , 'alt' , 'fullName' , 'job' , 'url_instagram' , 'url_facebook', 'url_twitter' ,'url_linkden'];

}

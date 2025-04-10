<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopHeader extends Model
{
    use HasFactory;

    protected $fillable = ['email' , 'phone' , 'url_instagram' ,'url_facebook' ,'url_twitter'];
}

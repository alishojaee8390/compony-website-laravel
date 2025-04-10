<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['image' , 'alt' , 'service_title_1' , 'service_desc_1' , 'service_title_2' , 'service_desc_2', 'service_title_3' ,'service_desc_3'];
}

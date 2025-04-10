<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'description', 'helper', 'serivce_title_1',  'serivce_desc_1', 'serivce_title_2', 'serivce_desc_2', 'serivce_title_3', 'serivce_desc_3', 'serivce_title_4', 'serivce_desc_4', 'image', 'alt'];
}

<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterQuickMenu extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'link'];
}

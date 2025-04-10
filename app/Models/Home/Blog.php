<?php

namespace App\Models\Home;

use App\Models\User;
use Morilog\Jalali\Jalalian;
use App\Models\Home\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['subject' , 'body' , 'image'  , 'alt' , 'title' ,'description' ,'keywords' , 'user_id' , 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);

        
    }
    public function user(){
        return $this->belongsTo(User::class);

        
    }

function jalaliDate($date , $format = '%A , %d %B %Y'){
    return Jalalian::forge($date)->format($format);
}
}

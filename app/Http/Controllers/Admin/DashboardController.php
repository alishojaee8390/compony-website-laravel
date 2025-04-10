<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at' , 'desc')->take(5)->get();
        return view('admin.index', compact('blogs'));
    }
}

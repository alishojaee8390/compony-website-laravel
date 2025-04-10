<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Home\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(15);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        $inputs = $request->all();
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blog/', $image);
        }
        $inputs['image'] = $image;
        $inputs['user_id'] = Auth::user()->id;
        Blog::create($inputs);
        return redirect()->route('blog.index')->with('swal-success', 'پست با موفقیت ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blog.edit', compact('blog' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $file = $request->file('image');
        $image = '';
        $inputs = $request->all();
        if (!empty($file)) {
            if (file_exists('images/blog/' . $blog->image)) {
                unlink('images/blog/' . $blog->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blog/', $image);
            $inputs['image'] = $image;
        } else {
            $inputs['image'] = $blog->image;
        }
        $inputs['user_id'] = Auth::user()->id;
        $blog->update($inputs);
        return redirect()->route('blog.index')->with('swal-success', 'پست با موفقیت ویراش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {

        if (file_exists('images/blog/' . $blog->image)) {
            unlink('images/blog/' . $blog->image);
        }
        $result = $blog->delete();
        return redirect()->route('blog.index')->with('swal-success', 'پست با موفقیت حذف شد');
    }
}

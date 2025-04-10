<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Home\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(15);
        return view('admin.testimonial.index' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
       
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';

        if(!empty($file)){
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/testimonial/' , $image);
            $inputs['image'] = $image;
        }
        Testimonial::create($inputs);
        return redirect()->route('testimonial.index')->with('swal-success' , 'یک نظر اضافه شد');
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
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit' , compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';
        if(!empty($file)){
            if(file_exists('images/testimonial/'. $testimonial->image)){
                unlink('images/testimonial/'. $testimonial->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/testimonial/' , $image);
            $inputs['image'] = $image;
        }else{
            $inputs['image'] = $testimonial->image;
        }
        $testimonial->update($inputs);
        return redirect()->route('testimonial.index')->with('swal-success' , 'یک نظر موفقیت ویراش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if(file_exists('images/testimonial/'. $testimonial->image)){
            unlink('images/testimonial/'. $testimonial->image);
        }
        $result = $testimonial->delete();
        return redirect()->route('testimonial.index')->with('swal-success' , 'یک نظر با موفقیت حذف شد');
    }
}

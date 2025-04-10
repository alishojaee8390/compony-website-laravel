<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Intro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IntroRequest;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro = Intro::first();
        return view('admin.intro.index' , compact('intro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Intro $intro)
    {
        return view('admin.intro.edit' , compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntroRequest $request , Intro $intro)
    {
        $inputs = $request->all();
        $file = $request->file('image');
        $image = '';
        if(!empty($file)){
            if(file_exists('images/intro/' . $intro->image)){
                unlink('images/intro/' . $intro->image);

            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/intro/' , $image);
        }else{
            $image = $intro->image;
        }
        $inputs['image'] = $image;
        $intro->update($inputs);
        return redirect()->route('intro.index')->with('swal-success', 'مقدمه با موفقیت ویراش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

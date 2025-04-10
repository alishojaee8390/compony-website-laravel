<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
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
    public function edit(Hero $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeroRequest $request, Hero $hero)
    {
        $file = $request->file('image');
        $inputs = $request->all();
   
        // dd('images/hero/' . $hero->image);
        if (!empty($file)) {
                if (file_exists('images/hero/' . $hero->image)) {
                    unlink('images/hero/' . $hero->image);
                }
                $image = time() . '.' . $file->getClientOriginalExtension();
                $file->move('images/hero/', $image);
            } else {
                $image = $hero->image;
            }
            $inputs['image'] = $image;
            $hero->update($inputs);
            return redirect()->route('hero.index')->with('swal-success', 'خانه با موفقیت ویراش شد');
        
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CounterRequest;
use App\Models\Home\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::paginate(4);
        return view('admin.counter.index' , compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounterRequest $request)
    {
        $inputs = $request->all();
        Counter::create($inputs);
        return redirect()->route('counter.index')->with('swal-success' , 'شمارنده با موفقیت ایجاد شد');
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
    public function edit(Counter $counter)
    {
       return view('admin.counter.edit' , compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CounterRequest $request , Counter $counter)
    {
        $inputs = $request->all();
        $counter->update($inputs);
        return redirect()->route('counter.index')->with('swal-success' , 'شمارنده با موفقیت ویراش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
      $result = $counter->delete();
      return redirect()->route('counter.index')->with('swal-success' , 'شمارنده با موفقیت حذف شد');

    }
}

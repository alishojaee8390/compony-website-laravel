<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teams = Team::paginate(15);
       return view('admin.team.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request , Team $team)
    {
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';

        if(!empty($file)){
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/team/' , $image);
            $inputs['image'] = $image;
        }
        Team::create($inputs);
        return redirect()->route('team.index')->with('swal-success' , 'یک اعضای به تیم اضافه شد');

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
    public function edit(Team $team)
    {
        return view('admin.team.edit' , compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';
        if(!empty($file)){
            if(file_exists('images/team/'. $team->image)){
                unlink('images/team/'. $team->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/team/' , $image);
            $inputs['image'] = $image;
        }else{
            $inputs['image'] = $team->image;
        }
        $team->update($inputs);
        return redirect()->route('team.index')->with('swal-success' , 'یک اعضای با موفقیت ویراش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if(file_exists('images/team/'. $team->image)){
            unlink('images/team/'. $team->image);
        }
        $result = $team->delete();
        return redirect()->route('team.index')->with('swal-success' , 'یک اعضای تیم با موفقیت حذف شد');
    }
}

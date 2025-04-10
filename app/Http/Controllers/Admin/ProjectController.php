<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';

        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/project/', $image);
            $inputs['image'] = $image;
        }
        Project::create($inputs);
        return redirect()->route('project.index')->with('swal-success', 'یک پروژه جدید اضافه شد');
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
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $file = $request->file('image');
        $inputs = $request->all();
        $image = '';
        if (!empty($file)) {
            if (file_exists('images/project/' . $project->image)) {
                unlink('images/project/' . $project->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/project/', $image);
            $inputs['image'] = $image;
        } else {
            $inputs['image'] = $project->image;
        }
        $project->update($inputs);
        return redirect()->route('project.index')->with('swal-success', 'پروژه با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (file_exists('images/project/' . $project->image)) {
            unlink('images/project/' . $project->image);
        }
        $result = $project->delete();
        return redirect()->route('project.index')->with('swal-success', 'پروژه با موفقیت حذف شد');
    }
}

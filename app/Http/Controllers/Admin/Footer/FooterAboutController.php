<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Footer\FooterAboutRequest;
use App\Models\Footer\FooterAbout;
use Illuminate\Http\Request;

class FooterAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerAbout = FooterAbout::first();
        return view('admin.footer.about.index', compact('footerAbout'));
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
    public function edit(FooterAbout $footerAbout)
    {
        return view('admin.footer.about.edit', compact('footerAbout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FooterAboutRequest $request, FooterAbout $footerAbout)
    {
        
        $inputs = $request->all();
        $footerAbout->update($inputs);
        return redirect()->route('footer-about.index')->with('swal-success', 'درباره ما با موفقیت ویرایش شد');
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

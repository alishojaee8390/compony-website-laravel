<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Footer\FooterContactRequest;
use App\Models\Footer\FooterContact;
use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerContact = FooterContact::first();
        return view('admin.footer.contact.index', compact('footerContact'));
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
    public function edit(FooterContact $footerContact)
    {
        return view('admin.footer.contact.edit', compact('footerContact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FooterContactRequest $request, FooterContact $footerContact)
    {
        $inputs = $request->all();
        $footerContact->update($inputs);
        return redirect()->route('footer-contact.index')->with('swal-success', 'تماس باما با موفقیت ویرایش شد');
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

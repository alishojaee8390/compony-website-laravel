<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Footer\FooterQuickMenuRequest;
use App\Models\Footer\FooterQuickMenu;
use Illuminate\Http\Request;

class FooterQuickMenuFAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerQuickMenus = FooterQuickMenu::all();
        return view('admin.footer.quickMenu.index', compact('footerQuickMenus'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.quickMenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterQuickMenuRequest $request)
    {
        $inputs = $request->all();
        FooterQuickMenu::create($inputs);
        return redirect()->route('footer-quick-menu.index')->with('swal-success', 'منو با موفقیت ایجاد شد');
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
    public function edit(FooterQuickMenu $footerQuickMenu)
    {
        return view('admin.footer.quickMenu.edit', compact('footerQuickMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FooterQuickMenuRequest $request, FooterQuickMenu $footerQuickMenu)
    {
        $inputs = $request->all();
        $footerQuickMenu->update($inputs);
        return redirect()->route('footer-quick-menu.index')->with('swal-success', 'منو با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterQuickMenu $footerQuickMenu)
    {
        $result = $footerQuickMenu->delete();
        return redirect()->route('footer-quick-menu.index')->with('swal-success', 'منو با موفقیت حذف شد');
    }
}

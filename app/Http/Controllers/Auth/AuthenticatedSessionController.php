<?php

namespace App\Http\Controllers\Auth;

use App\Models\Seo;
use App\Models\User;
use App\Models\Home\Menu;
use Illuminate\Http\Request;
use App\Models\Home\TopHeader;
use App\Models\Footer\FooterAbout;
use App\Http\Controllers\Controller;
use App\Models\Footer\FooterContact;
use Illuminate\Support\Facades\Auth;
use App\Models\Footer\FooterQuickMenu;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('admin.index' );
    }
    public function create()
    {
        
        $seo = Seo::first();
        $topHeader = TopHeader::first();
        $menus = Menu::orderBy('created_at' , 'asc')->take(6)->get();
        $footerAbout = FooterAbout::first();
        $footerContact = FooterContact::first();
        $footerQuickMenus = FooterQuickMenu::take(5)->get();
        return view('auth.login', compact('seo','topHeader','menus' , 'footerAbout' , 'footerContact' ,'footerQuickMenus'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $user = User::factory()->create();
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

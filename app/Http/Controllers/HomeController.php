<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\Home\FAQ;
use App\Models\Home\Blog;
use App\Models\Home\Hero;
use App\Models\Home\Team;
use App\Models\Home\About;
use App\Models\Home\Intro;
use App\Models\Home\Contact;
use App\Models\Home\Counter;
use App\Models\Home\Project;
use App\Models\Home\Service;
use Illuminate\Http\Request;
use App\Models\Home\TopHeader;
use App\Models\Home\Testimonial;
use App\Models\Footer\FooterAbout;
use Illuminate\Support\Facades\DB;
use App\Models\Footer\FooterContact;
use App\Models\Footer\FooterQuickMenu;
use App\Models\Home\Category;
use App\Models\Home\Menu;
use Database\Factories\TopHeaderFactory;

class HomeController extends Controller
{
    public function index()
    {
        $seo = Seo::first();
        $topHeader = TopHeader::first();
        $menus = Menu::orderBy('created_at', 'asc')->take(6)->get();
        $hero = Hero::first();
        $about = About::first();
        $intro = Intro::first();
        $service = Service::first();
        $counters = Counter::orderBy('created_at', 'desc')->take(4)->get();
        $teams = Team::orderBy('created_at', 'desc')->take(4)->get();
        $projects = Project::orderBy('created_at', 'desc')->take(6)->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->take(4)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $faqs = FAQ::take(3)->get();
        $footerAbout = FooterAbout::first();
        $footerContact = FooterContact::first();
        $footerQuickMenus = FooterQuickMenu::take(5)->get();
        return view('index', compact('seo', 'topHeader', 'menus', 'hero', 'about', 'intro', 'service', 'counters', 'teams',  'projects', 'testimonials', 'blogs', 'faqs', 'footerAbout', 'footerContact', 'footerQuickMenus'));
    }

    public function contact(Request $request)
    {

        Contact::create();
        return 1;
    }

    public function blog()
    {
        $blogs = Blog::paginate(8);
        $lastBlogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        $topHeader = TopHeader::first();
        $menus = Menu::orderBy('created_at', 'asc')->take(6)->get();
        $footerAbout = FooterAbout::first();
        $footerContact = FooterContact::first();
        $footerQuickMenus = FooterQuickMenu::take(5)->get();
        $categories = Category::all();
        return view('pages.blog', compact('blogs', 'lastBlogs', 'topHeader', 'menus', 'footerAbout', 'footerContact', 'footerQuickMenus', 'categories'));
    }
    public function blogDetail(Blog $blog)
    {
        $topHeader = TopHeader::first();
        $lastBlogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        $menus = Menu::orderBy('created_at', 'asc')->take(6)->get();
        $footerAbout = FooterAbout::first();
        $footerContact = FooterContact::first();
        $footerQuickMenus = FooterQuickMenu::take(5)->get();
        return view('pages.blog-details', compact('blog', 'lastBlogs',  'topHeader', 'menus', 'footerAbout', 'footerContact', 'footerQuickMenus'));
    }

    public function search($id)
    {
        $topHeader = TopHeader::first();
        $menus = Menu::orderBy('created_at', 'asc')->take(6)->get();
        $footerAbout = FooterAbout::first();
        $footerContact = FooterContact::first();
        $footerQuickMenus = FooterQuickMenu::take(5)->get();
        $categories = Category::all();
        $blogs = Blog::where('category_id', 'like', '%' . $id . '%')->paginate(8);
        return view('pages.search', compact('blogs',  'topHeader', 'menus', 'footerAbout', 'footerContact', 'footerQuickMenus'));
    }
}

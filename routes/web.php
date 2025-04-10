<?php

use App\Models\Home\About;
use App\Models\Home\Intro;
use App\Models\Home\Category;
use App\Models\Home\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\IntroController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TopHeaderController;
use App\Http\Controllers\Admin\TestimonialController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Http\Controllers\Admin\Footer\FooterAboutController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Footer\FooterContactController;
use App\Http\Controllers\Admin\Footer\FooterQuickMenuFAQController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/blog', [HomeController::class , 'blog'])->name('blog');
Route::get('/blog/{blog}', [HomeController::class , 'blogDetail'])->name('blog.detail');
Route::post('/contact', [HomeController::class , 'contact'])->name('contact');
Route::get('/search/{id}', [HomeController::class , 'search'])->name('search');

Route::prefix('/dashboard')->middleware(['auth'])->group(function(){
    Route::get('/' , [DashboardController::class  , 'index'])->name('admin.index');
    Route::resource('/users' , UserController::class)->middleware(['admin']);
    Route::get('/users/status/{users}' , [UserController::class , 'status'])->middleware(['admin'])->name('users.status');
    Route::resource('/seo' , SeoController::class);
    Route::resource('/top-header' , TopHeaderController::class)->middleware(['admin']);
    Route::resource('/menu' , MenuController::class)->middleware(['admin']);
    Route::resource('/hero' , HeroController::class)->middleware(['admin']);
    Route::resource('/about' , AboutController::class)->middleware(['admin']);
    Route::resource('/intro' , IntroController::class)->middleware(['admin']);
    Route::resource('/service' , ServiceController::class)->middleware(['admin']);
    Route::resource('/counter' , CounterController::class)->middleware(['admin']);
    Route::resource('/team' , TeamController::class)->middleware(['admin']);
    Route::resource('/project' , ProjectController::class)->middleware(['admin']);
    Route::resource('/testimonial' , TestimonialController::class)->middleware(['admin']);
    Route::resource('/blog' , BlogController::class);
    Route::resource('/contact' , ContactController::class);
    Route::resource('/faq' , FAQController::class)->middleware(['admin']);
    Route::resource('/footer-about' , FooterAboutController::class)->middleware(['admin']);
    Route::resource('/footer-quick-menu' , FooterQuickMenuFAQController::class)->middleware(['admin']);
    Route::resource('/footer-contact' , FooterContactController::class)->middleware(['admin']);
    Route::resource('/category' ,CategoryController::class);
});

require __DIR__.'/auth.php';

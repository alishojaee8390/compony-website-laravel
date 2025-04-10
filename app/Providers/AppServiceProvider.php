<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Home\Blog;
use App\Models\Home\Project;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting['blog'] = Blog::count();
        $setting['user'] = User::count();
        $setting['project'] = Project::count();
        View::share('setting' , $setting);
        // $setting['comment'] = Project::count();
        Paginator::useBootstrap();
    }
}

<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Tour;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Models\Page;

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
        $mainCategories = Category::where('parent_id',null)->orderBy('order')->get();
        $sliders = Slider::where('status','AKTIF')->orderBy('order')->get();
        $blog = Page::where('status','ACTIVE')->orderBy('created_at')->get();
        $tours = Tour::where('status','AKTIF')->orderBy('order')->get();
        View::share('settings',Setting::all());
        View::share('categories',$mainCategories);
        View::share('sliders',$sliders);
        View::share('blog',$blog);
        View::share('tours',$tours);
    }
}

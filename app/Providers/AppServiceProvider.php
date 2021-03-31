<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Slider;
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
        $mainCategories = Category::where('parent_id',null)->orderBy('order')->get();
        $sliders = Slider::where('status','AKTIF')->orderBy('order')->get();
        View::share('settings',Setting::all());
        View::share('categories',$mainCategories);
        View::share('categories',$mainCategories);
        View::share('sliders',$sliders);
    }
}

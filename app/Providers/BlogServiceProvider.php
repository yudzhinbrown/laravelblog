<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->navbar();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function navbar(){
        View::composer('blog.layouts.shared.navbar', function ($view){
            $view->with('categories', \App\Category::where('published', 1)->get());
        });
    }
}

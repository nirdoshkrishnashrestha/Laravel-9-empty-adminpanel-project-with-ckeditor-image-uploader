<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

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
    
    // $about_menu=DB::table('abouts')->orderby('order')->get();
    // view()->share('about_menu', $about_menu); 

    // $service_menu=DB::table('services')->orderby('order')->get();
    // view()->share('service_menu', $service_menu);

    // $management_menu=DB::table('managements')->orderby('order')->get();
    // view()->share('management_menu', $management_menu);

    // $download_form=DB::table('legals')->get();
    // view()->share('forms', $download_form); 

    // $details=DB::table('details')->where('id',1)->first();
    // view()->share('details', $details); 

    // $socials=DB::table('socials')->get();
    // view()->share('socials', $socials); 

    Paginator::useBootstrap();
    }
}

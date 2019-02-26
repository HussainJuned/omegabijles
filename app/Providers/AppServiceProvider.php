<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TutorInfo;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('tutor.partials.sidebar',function($view){
            $view->with('tutor',\App\TutorInfo::tutorInformation());
        });
        view()->composer('tutor.partials.header',function($view){
            $view->with('tutor',\App\TutorInfo::tutorInformation());
        });
    }
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}

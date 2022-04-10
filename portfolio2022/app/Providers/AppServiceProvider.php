<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\level;
use Illuminate\Support\Facades\URL; 

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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // ▼下記3行を追加
        View::composer('*', function ($view) {
            if(Auth::id()){
            $max_exp = level::where('Lv', Auth::user()->Lv +1)->first(['EXP']);
            $min_exp = level::where('Lv', Auth::user()->Lv )->first(['EXP']);

            $view->with(['max_exp'=> $max_exp, 'min_exp' =>$min_exp]);
            }
        });
    }
}

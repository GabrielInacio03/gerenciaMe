<?php

namespace App\Providers;

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
        $this->app->bind('App\Repositories\Contracts\ICartaoRepository','App\Repositories\Eloquent\CartaoRepository');
        $this->app->bind('App\Repositories\Contracts\IDespesaRepository','App\Repositories\Eloquent\DespesaRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

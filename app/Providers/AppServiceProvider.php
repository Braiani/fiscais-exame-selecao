<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        Voyager::addAction(\App\CustomButtons\ViewCandidatoAction::class);
        Voyager::addAction(\App\CustomButtons\AutorizarButton::class);
        if (env('ASSETS_HTTPS', true)) {
            $url->formatScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('ASSETS_HTTPS', true)) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}

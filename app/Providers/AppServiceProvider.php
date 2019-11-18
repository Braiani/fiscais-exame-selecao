<?php

namespace App\Providers;

use App\CustomButtons\AutorizarButton;
use App\CustomButtons\DesfazerButton;
use App\CustomButtons\ImprimirButton;
use App\CustomButtons\RejeitarButton;
use App\CustomButtons\ViewCandidatoAction;
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
        Voyager::addAction(ViewCandidatoAction::class);
        Voyager::addAction(AutorizarButton::class);
        Voyager::addAction(RejeitarButton::class);
        Voyager::addAction(DesfazerButton::class);
        Voyager::addAction(ImprimirButton::class);
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

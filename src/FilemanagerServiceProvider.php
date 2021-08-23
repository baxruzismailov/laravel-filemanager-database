<?php

namespace Baxruzismailov\Filemanager;

use Baxruzismailov\Filemanager\Http\Middleware\FileManagerMiddleware;
use Illuminate\Support\ServiceProvider;

class FilemanagerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //Routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        //Views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'filemanager');
        //Translations
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'fm-translations');

        //Config
        $this->publishes([
            __DIR__ . '/config/file-manager-bi.php' => config_path('file-manager-bi.php'),
        ], 'fm-bi-config');


        //CSS & JS
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/file-manager-bi'),
        ], 'fm-bi-assets');

        //CSS & JS
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/file-manager-bi'),
        ], 'fm-bi-assets');

        //Migrations
        $this->publishes([
            __DIR__
            .'/migrations' => database_path('migrations'),
        ], 'fm-bi-migrations');



        // Views
//        $this->publishes([
//            __DIR__
//            .'/resources/views' => resource_path('views/vendor/file-manager-bi'),
//        ], 'fm-bi-views');


        //Translations
//        $this->publishes([
//            __DIR__ . '/resources/lang' => resource_path('lang/vendor/file-manager-bi'),
//        ], 'fm-bi-translations');


    }

    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . '/config/file-manager-bi.php',
            'file-manager-bi'
        );

        $this->app['router']->aliasMiddleware('fm-bi-acl', FileManagerMiddleware::class);

    }
}

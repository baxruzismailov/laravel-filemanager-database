<?php

namespace Baxruzismailov\Filemanager;

use Baxruzismailov\Filemanager\Http\Middleware\FileManagerMiddleware;
use Illuminate\Support\ServiceProvider;

class FilemanagerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'filemanager');

        //Config
        $this->publishes([
            __DIR__ . '/config/file-manager-bi.php' => config_path('file-manager-bi.php'),
        ], 'fm-bi-config');


        //CSS & JS
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/file-manager-bi'),
        ], 'fm-bi-assets');
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

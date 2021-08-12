<?php
namespace Baxruzismailov\Filemanager;

use Illuminate\Support\ServiceProvider;

class FilemanagerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'filemanager');

    }

    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__.'/config/file-manager.php',
            'file-manager'
        );

    }
}

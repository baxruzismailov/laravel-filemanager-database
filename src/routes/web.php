<?php

use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Baxruzismailov\Filemanager\Http\Controllers'], function() {

    Route::middleware(config('file-manager.middleware_fm'))->group(function (){
        Route::get('filemanager-bi', 'FilemanagerController@index');
    });


});

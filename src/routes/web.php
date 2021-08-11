<?php

use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Baxruzismailov\Filemanager\Http\Controllers'], function() {
    Route::get('filemanager', 'FilemanagerController@index');

});

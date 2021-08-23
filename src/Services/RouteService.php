<?php

namespace Baxruzismailov\Filemanager\Services;
use Illuminate\Support\Facades\Route;



class RouteService
{

    public static function routes()
    {
        Route::group(['namespace' => '\Baxruzismailov\Filemanager\Http\Controllers'], function() {
            Route::middleware(config('file-manager-bi.middleware_fm_bi'))->group(function (){
//                Route::prefix('filemanager-bi')->group(function (){
//
//                });

                Route::get('filemanager-bi', 'FilemanagerController@index');
                /*   CATEGORIES START   */
                Route::post('filemanager-bi/categories/sortable', 'FilemanagerController@sortable')->name('filemanagerBI.sortable');
                /*   CATEGORIES END   */


            });
        });
    }

}

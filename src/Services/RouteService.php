<?php

namespace Baxruzismailov\Filemanager\Services;
use Illuminate\Support\Facades\Route;



class RouteService
{

    public static function routes()
    {
        Route::group(['namespace' => '\Baxruzismailov\Filemanager\Http\Controllers'], function() {
            Route::middleware(array_merge(['fm-bi-acl'],config('file-manager-bi.middleware_fm_bi')))->group(function (){

                Route::prefix('filemanager-bi')->group(function () {
                    Route::post('/home', 'FilemanagerController@home')->name('filemanager.bi.home');
                    /*   FILE   */
                    Route::get('/{type?}', 'FilemanagerController@index')->where('type', '[image,media]+');
                    Route::post('/upload-file', 'FilemanagerController@uploadFile')->name('filemanager.bi.uploadFile');
                    /*   FOLDER   */
                    Route::post('/create-new-folder', 'FilemanagerController@createNewFolder')->name('filemanager.bi.createNewFolder');
                    Route::post('/rename-folder-name', 'FilemanagerController@renameFolderName')->name('filemanager.bi.renameFolderName');
                    /*   LOCAL STORAGE   */
                    Route::post('/local-storage', 'FilemanagerController@localStorage')->name('filemanager.bi.localStorage');
                });


            });
        });
    }

}

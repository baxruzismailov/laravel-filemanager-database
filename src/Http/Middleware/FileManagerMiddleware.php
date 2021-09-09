<?php

namespace Baxruzismailov\Filemanager\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FileManagerMiddleware
{

    public function handle(Request $request, Closure $next)
    {



        /**
         *  Appearance
         *  1 => sketch
         *  2 => list
         */

        if (!isset($_COOKIE['filemanager_bi_appearance'])) {
            setcookie('filemanager_bi_appearance', 1, time() + (86400 * 30 * 12), "/"); // 1 year
        } else {

            if ($_COOKIE['filemanager_bi_appearance'] != 1 && $_COOKIE['filemanager_bi_appearance'] != 2) {
                setcookie('filemanager_bi_appearance', 1, time() + (86400 * 30 * 12), "/"); // 1 year
            }

        }


        /**
         *  Sorting field
         *  1 => name
         *  2 => created_at
         */

        if (!isset($_COOKIE['filemanager_bi_sort_field'])) {
            setcookie('filemanager_bi_sort_field', 2, time() + (86400 * 30 * 12), "/"); // 1 year
        } else {

            if ($_COOKIE['filemanager_bi_sort_field'] != 1 && $_COOKIE['filemanager_bi_sort_field'] != 2) {
                setcookie('filemanager_bi_sort_field', 2, time() + (86400 * 30 * 12), "/"); // 1 year
            }

        }



        /**
         *  Order BY
         *  1 => ASC
         *  2 => DESC
         */

        if (!isset($_COOKIE['filemanager_bi_order_by'])) {
            setcookie('filemanager_bi_order_by', 2, time() + (86400 * 30 * 12), "/"); // 1 year
        } else {

            if ($_COOKIE['filemanager_bi_order_by'] != 1 && $_COOKIE['filemanager_bi_order_by'] != 2) {
                setcookie('filemanager_bi_order_by', 2, time() + (86400 * 30 * 12), "/"); // 1 year
            }

        }


        //SHARE VIEW
        //filemanagerBiSortField
        if(!isset($_COOKIE['filemanager_bi_sort_field'])){
            view()->share('filemanagerBiSortField',2);
        }else{
            view()->share('filemanagerBiSortField',$_COOKIE['filemanager_bi_sort_field']);
        }

        //filemanagerBiOrderBy
        if(!isset($_COOKIE['filemanager_bi_order_by'])){
            view()->share('filemanagerBiOrderBy',2);
        }else{
            view()->share('filemanagerBiOrderBy',$_COOKIE['filemanager_bi_order_by']);
        }



        return $next($request);
    }
}

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
         *  2 => date
         */

        if (!isset($_COOKIE['filemanager_bi_sort_field'])) {
            setcookie('filemanager_bi_sort_field', 1, time() + (86400 * 30 * 12), "/"); // 1 year
        } else {

            if ($_COOKIE['filemanager_bi_sort_field'] != 1 && $_COOKIE['filemanager_bi_sort_field'] != 2) {
                setcookie('filemanager_bi_sort_field', 1, time() + (86400 * 30 * 12), "/"); // 1 year
            }

        }



        /**
         *  Sorting
         *  1 => asc
         *  2 => desc
         */

        if (!isset($_COOKIE['filemanager_bi_sort'])) {
            setcookie('filemanager_bi_sort', 1, time() + (86400 * 30 * 12), "/"); // 1 year
        } else {

            if ($_COOKIE['filemanager_bi_sort'] != 1 && $_COOKIE['filemanager_bi_sort'] != 2) {
                setcookie('filemanager_bi_sort', 1, time() + (86400 * 30 * 12), "/"); // 1 year
            }

        }


        return $next($request);
    }
}

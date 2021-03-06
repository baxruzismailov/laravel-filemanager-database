<?php

namespace Baxruzismailov\Filemanager\Services;

use Baxruzismailov\Filemanager\Models\FilemanagerFolder;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Types\This;

class FolderService
{

    public static function getFolders($parent_id = 0, $parents = [], $sub_mark = 11)
    {

        $sortField = '';
        $orderBy = '';


        //Sort Field
        if (isset($_COOKIE['filemanager_bi_sort_field'])) {
            if ($_COOKIE['filemanager_bi_sort_field'] == 1) {
                $sortField = 'name';
            } else {
                $sortField = 'created_at';
            }
        } else {
            $sortField = 'created_at';
        }

        //Order By
        if (isset($_COOKIE['filemanager_bi_order_by'])) {
            if ($_COOKIE['filemanager_bi_order_by'] == 1) {
                $orderBy = 'ASC';
            } else {
                $orderBy = 'DESC';
            }
        } else {
            $orderBy = 'DESC';
        }


        Cache::rememberForever('filemanager-bi-folders-6JIz1EB1GuKEiahMvyWz', function () use ($sortField,$orderBy) {
            return  FilemanagerFolder::orderBy($sortField, $orderBy)
                ->get()
                ->toArray();

        });


        $html = '';

        if ($parent_id == 0) {
            foreach (cache('filemanager-bi-folders-6JIz1EB1GuKEiahMvyWz') as $folder) {
                if (($folder['parent'] != 0) && !in_array($folder['parent'], $parents)) {
                    $parents[] = $folder['parent'];
                }
            }

            $html .= '<li><div class="filemanager-bi-main-menu-item-container" data-folder-id="0" style="padding-left: 11px">
                           <div class="filemanager-bi-main-menu-item-left">
                               <div class="filemanager-bi-main-menu-item-folder">
                                   <i class="fas fa-folder"></i>
                               </div>
                               <div>'.trans('fm-translations::filemanager-bi.main_folder_name').'</div>
                           </div>
                       </div></li>';
        }


        foreach (cache('filemanager-bi-folders-6JIz1EB1GuKEiahMvyWz') as $folder) {


            if ($folder['parent'] == $parent_id) {
                if (in_array($folder['id'], $parents)) {
                    $html .= '<li class="filemanager-bi-menu-item-has-children filemanager-bi-has-children">
                                <div class="filemanager-bi-main-menu-item-container " data-folder-id="' . $folder['id'] . '" style="padding-left: ' . $sub_mark . 'px">
                           <div class="filemanager-bi-main-menu-item-left">
                               <div class="filemanager-bi-main-menu-item-folder">
                                   <i class="fas fa-folder"></i>
                               </div>
                               <div>' . $folder['name'] . '</div>
                           </div>
                       </div>';

                } else {


                    $html .= '<li><div class="filemanager-bi-main-menu-item-container " data-folder-id="' . $folder['id'] . '" style="padding-left: ' . $sub_mark . 'px">
                           <div class="filemanager-bi-main-menu-item-left">
                               <div class="filemanager-bi-main-menu-item-folder">
                                   <i class="fas fa-folder"></i>
                               </div>
                               <div>' . $folder['name'] . '</div>
                           </div>
                       </div>';

                }
                if (in_array($folder['id'], $parents)) {
                    $html .= '<ul class="filemanager-bi-sub-menu">';
                    $html .= self::getFolders($folder['id'], $parents, $sub_mark + 20);
                    $html .= '</ul>';
                }
                $html .= '</li>';
            }
        }
        return $html;


    }


    public static function uniquName($name = '', $parent = 0)
    {
        $slug = \Illuminate\Support\Str::slug($name);
        //get unique slug...
        $nSlug = $name;
        $i = 0;


        while ((FilemanagerFolder::where('name', $nSlug)->where('parent', $parent)->count()) > 0) {
            $i++;
            $nSlug = trim($name) . ' (' . ($i + 1) . ')';
        }
        if ($i > 0) {
            $newSlug = substr($nSlug, 0, strlen(trim($name))) . ' (' . ($i + 1) . ')';
        } else {
            $newSlug = trim($name);
        }
        return $newSlug;
    }





    public static function getParentFolderID($cutFolderID,&$arr = [])
    {
        $folders = FilemanagerFolder::where('parent', $cutFolderID)
            ->get()->toArray();

        foreach ($folders as $folder):

            $arr[] = $folder['id'];
            self::getParentFolderID($folder['id'],$arr);
        endforeach;

        return $arr;

    }


}

<?php

namespace Baxruzismailov\Filemanager\Services;

use Baxruzismailov\Filemanager\Models\FilemanagerCategory;

class CategoryService
{

    public static function getCategories($parent_id = 0, $parents = [],$sub_mark = 11)
    {

        $categories = FilemanagerCategory::all()->toArray();


        if ($parent_id == 0) {
            foreach ($categories as $category) {
                if (($category['parent'] != 0) && !in_array($category['parent'], $parents)) {
                    $parents[] = $category['parent'];
                }
            }
        }
        $html = '';

        foreach ($categories as $category) {


            if ($category['parent'] == $parent_id) {
                if (in_array($category['id'], $parents)) {
                    $html .= '<li class="filemanager-bi-menu-item-has-children filemanager-bi-has-children">
                                <div class="filemanager-bi-main-menu-item-container " style="padding-left: '.$sub_mark.'px">
                           <div class="filemanager-bi-main-menu-item-left">
                               <div class="filemanager-bi-main-menu-item-folder">
                                   <i class="fas fa-folder"></i>
                               </div>
                               <div>'.$category['name'].'</div>
                           </div>
                       </div>';

                } else {


                    $html .= '<li><div class="filemanager-bi-main-menu-item-container " style="padding-left: '.$sub_mark.'px">
                           <div class="filemanager-bi-main-menu-item-left">
                               <div class="filemanager-bi-main-menu-item-folder">
                                   <i class="fas fa-folder"></i>
                               </div>
                               <div>'.$category['name'].'</div>
                           </div>
                       </div>';

                }
                if (in_array($category['id'], $parents)) {
                    $html .= '<ul class="filemanager-bi-sub-menu">';
                    $html .= self::getCategories($category['id'], $parents,$sub_mark+20);
                    $html .= '</ul>';
                }
                $html .= '</li>';
            }
        }
        return $html;


    }




}

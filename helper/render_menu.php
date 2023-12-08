<?php

function has_child($data, $id) {
    foreach ($data as $v) {
        if($v['parent_id'] == $id) {
            return true;
        }
    }
    return false;
}

function render_menu($data, $menu_id = "main-menu", $menu_class = "", $parent_id = 0, $level = 0) {
    if($level == 0) 
        $result = "<ul id='{$menu_id}' class='{$menu_class}'>";
    else
        $result = "<ul class='sub-menu'>";
    foreach($data as $v) {
        if($v['parent_id'] == $parent_id) {
            $result.= "<li>";
            $result.= "<a href='{$v['url']}'>{$v['title']}</a>";
            if(has_child($data, $v['category_product_id'])) {
                $result .= render_menu($data, $menu_id, $menu_class, $v['category_product_id'], $level + 1);
            }
            $result.= "</li>";
        }
    }
    $result .= "</ul>";
    return $result;
}
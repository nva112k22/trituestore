<?php

function has_child($data, $id) {
    foreach ($data as $v) {
        if($v['parent_id'] == $id) {
            return true;
        }
    }
    return false;
}

function data_tree($data, $parent_id = 0, $level = 0) {
    $result = array();
    foreach ($data as $v) {
        if($v['parent_id'] == $parent_id) {
            $v['level'] = $level;
            $result[] = $v;
            if(has_child($data, $v['category_product_id'])) {
                $result_child = data_tree($data, $v['category_product_id'], $level + 1);
                $result = array_merge($result, $result_child);
            }
        }
    }
    return $result;
}

function data_tree_post($data, $parent_id = 0, $level = 0) {
    $result = array();
    foreach ($data as $v) {
        if($v['parent_id'] == $parent_id) {
            $v['level'] = $level;
            $result[] = $v;
            if(has_child($data, $v['category_post_id'])) {
                $result_child = data_tree($data, $v['category_post_id'], $level + 1);
                $result = array_merge($result, $result_child);
            }
        }
    }
    return $result;
}



<?php

function construct() {
    load('helper', 'format');
    load_model('index');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_posts`");
//echo $num_rows;
//Số bản ghi 1 trang
    $num_per_page = 5;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);
//echo $num_page;
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
//echo $page;
    $start = ($page - 1) * $num_per_page;
//echo $start;


    $list_posts = get_posts($start, $num_per_page);
    foreach ($list_posts as &$posts) {
        $posts['url_update'] = "?mod=posts&action=update&id={$posts['post_id']}";
        $posts['url_delete'] = "?mod=posts&action=delete&id={$posts['post_id']}";
    }
    unset($posts);
//    $list_users = get_list_users();
//    show_array($list_users);
    $data = array(
        'list_posts' => $list_posts,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('index', $data);
}

function detailAction() {
    $id = (int) $_GET['id'];
    $post_by_id = get_post_by_id($id);
    $data['post_by_id'] = $post_by_id;
    load_view('detail', $data);
}

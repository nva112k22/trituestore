<?php
get_header();
?>

<?php
?>

<div id="main-content-wp" class="list-post-page">
    <style>
        /*Style pagging*/
        ul.pagging{
            float: right;
            margin-top: 23px;
        }
        ul.pagging li {
            float: left;
            padding: 0px 2px;
        }
        ul.pagging li a{
            display: block;
            padding: 5px 10px;
            color: #333;
            border: 1px solid #dedede;
        }

        ul.pagging li.active a {
            border: 1px solid #f00;
            color: #f00;
        }

    </style>
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?mod=users&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Nhóm quản trị</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <?php get_sidebar('users'); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(<?php echo ($total_row); ?>)</span></a> |</li>
<!--                            <li class="publish"><a href="">Đã đăng <span class="count">(5)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt <span class="count">(5)</span></a></li>-->
                            <li class="trash"><a href="">Thùng rác <span class="count">(0)</span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Chỉnh sửa</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Họ và tên</span></td>
                                    <td><span class="thead-text">Tên đăng nhập</span></td>
                                    <td><span class="thead-text">Số điện thoại</span></td>
                                    <td><span class="thead-text">Giới tính</span></td>
                                    <td><span class="thead-text">Địa chỉ</span></td>
                                    <td><span class="thead-text">Tác vụ</span></td>
                                </tr>
                            </thead>
                            <?php
                            $temp = $start;
                            if (!empty($list_users)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($list_users as $item) {
                                        $temp++;
                                        ?>
                                        <tr>

                                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                            <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
                                            <td class="clearfix">
                                                <div class="tb-title fl-left">
                                                    <span class="tbody-text"><?php echo $item['fullname']; ?></span>
                                                </div>
                                            </td>
                                            <td><span class="tbody-text"><?php echo $item['username']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo $item['phone_number']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo $item['gender']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo $item['address']; ?></span></td>
                                            <td>
                                                <a href="<?php echo $item['url_update']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo $item['url_delete']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>
            <?php
            echo get_pagging($num_page, $page, "?mod=users&controller=team");
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
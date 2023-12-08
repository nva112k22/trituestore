<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
}

function indexAction() {

    load_view('index');
}

function addAction() {
    if (isset($_FILES['file'])) {
        $result = "";
        // Số lượng ảnh upload 
        $num_images = count($_FILES['file']['name']);
        $target_dir = "uploads/";
        // Duyệt từng ảnh để upload lên server 
        for ($i = 0; $i < $num_images; $i++) {
            $target_file = $target_dir . basename($_FILES['file']['name'][$i]);

            if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
                // Tạo html hiển thị hình ảnh đã upload 
                $result .= "<img src=\"{$target_file}\" >";
                //    echo "Upload {$i} ok";
                $data = array(
                    'image_url' => $target_file,
                );
                $id_insert = db_insert("tbl_images", $data);
                $id[] = $id_insert;
//                echo $id_insert;
                $datas = array(
                    "id" => $id,
                    "result" => $result
                );
            }
        }
        echo json_encode($datas);
    }
}

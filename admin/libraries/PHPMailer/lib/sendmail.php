<?php

$data = array(
        'receiver' => 'nguyenvietan112k2@gmail.com',
        'name' => 'Nguyễn Viết An',
        'attach' => 'image.jpg',
        'subject' => 'Nhiều người dân TP HCM hoảng hốt vì hoá đơn tiền điện tăng vọt',
        'content' => 'dtjdtgjtdrjtfjtrfyjtfyrjft'
);

//require '../data/data.php';

//global $data;
//print_r($data);
function send_mail($data = array()) {
    if (is_array($data)) {
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
        $receiver = $data['receiver'];
        $name = $data['name'];
        $attach = $data['attach'];
        $subject = $data['subject'];
        $content = $data['content'];
    }
    return $receiver;
}
echo $receiver;

send_mail($data);


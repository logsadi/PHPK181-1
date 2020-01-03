<?php
$file_upload = $_GET['file_upload']; // dùng pt GET để hứng tham số
//bước 1: mở file
$file_path = 'upload/'.$file_upload;
//bước 2: thông tải file cho trình duyệt
header("Content-Disposition: attachment; filename = $file_upload"); //tải xuống
//Bước 3:thông báo định dạng file trả về
header("Content-Type: application/pdf");
//Bước 4: đọc file
readfile($file_path);
?>
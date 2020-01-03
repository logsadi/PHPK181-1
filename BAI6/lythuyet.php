<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//SESSION trong php
//ss là 1 phiên làm việc của người dùng trên website
// 1ss bằng 1 tk người dùng
// session_start();
// $_SESSION['name']=gia_tri; //cú pháp thực thi
// // hủy session:   
// session_unset(); //xóa bỏ tất cả các SESSION sinh ra trong cùng phiên với SESSION bị chọn xóa bỏ
// unset($name); //xóa bỏ từng SESSION đơn lẻ
// session_destroy(); //hủy tất cả các session
// session_start();
// if(isset($_POST['sbm'])){
//     $_SESSION['ho_ten'] = $_POST['ho_ten'];
//     //echo $_POST['ho_ten'];;
//     //print_r($_SESSION['ho_ten']);
// }
// if(isset($_SESSION['ho_ten'])){
//  echo $_SESSION['ho_ten'];
// }
//hàm chuyển hướng và báo lỗi
//chuyển hướng
// header('location: adin.php');
// //báo lỗi
// die('bạn không có quyền truy cập file');
//hằng:
// define('PI','xin chào vietpro');
// //echo PI;
// if(defined('PI')){
//     echo 'abc';
// }
?>
<!-- <form action="" method="POST">
<input type="text" name="ho_ten">
<input type="submit" name="sbm">
</form> -->
</body>
</html>
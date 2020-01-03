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
//Phương thức GET: là phương thức gửi dữ liệu từ client lên server thông qua các tham số trên URL, 
//và từ đó nó sẽ thực thực hành động. các tham số mà pt GET gửi lên sẽ bắt đầu bằng ? 
//và nối với nhau bằng dấu &.
//https://yeulacuoi.vn/index.php?tham_so1=gia_tri1&tham_so2=gia_tri2&tham_so3=gia_tri3
//cú pháp : $_GET['tham_so'];
//hàm isset($ten_bien); //
// if(isset($_GET['ten']) && isset($_GET['diachi']) && isset($_GET['phone'])){
//     $ten = $_GET['ten'];
//     $diachi = $_GET['diachi'];
//     $phone = $_GET['phone'];
//     echo $ten.'<br/>'.$diachi.'<br/>'.$phone;
// }
//mảng
//có 2 cách khia báo mảng
//cách 1:  
//$arr = array(1,'hai',true,5.4,'vân vân','mây mây',5,4,3,2,8,0);
//cách 2
//$arr = [1,'hai',true,5.4,'vân vân','mây mây',5,4,3,2,8,0];
//echo $arr;
// echo '<pre>';
// var_dump($arr);
// //print_r($arr);
// echo '<pre/>';
//echo $arr[11];
// foreach ($arr as $abc) {
//     echo $abc;
// }
//json
//phần 1 : chuyển json sang dạng mảng để làm việc trong php
//gọi file json vào
$data_json = file_get_contents('data.json');
//chuyển json sang dạng mảng
$arr_json = json_decode($data_json, true);
foreach ($arr_json as $key => $value) {
    echo $value.'<br/>';
}
//phaanf2: thêm dữ liệu vào json
//ghi dữ liệu vào json(dữ liệu mới sẽ thay thế cho dữ liệu cũ)
$data_en_json = json_encode($arr_json, JSON_UNESCAPED_UNICODE);
file_put_contents('data.json', $data_en_json);
?>
<!-- <form action="" method="GET">
<input type="text" name="user" placeholder="Nhập tên tài khoản">
<input type="text" name="pass" value="Nhập mật khẩu">
<input type="submit" name="sbm" value="Đăng nhập">
</form> -->
<!-- <a href="lythuyet.php?ten=nguyenvananh&diachi=haiphong"></a> -->
</body>
</html>
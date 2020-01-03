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
//phương thức POST
//cú pháp: $_POST['tham_so'];
// if(isset($_POST['sbm'])){
//     $user = $_POST['user'];
//     $pass = $_POST['pass'];
//     echo $user.'<br/>'.$pass;
// }
//upload file
//cú pháp
// $_FILES['tham_so']['name']; //lấy được tên files
// $_FILES['tham_so']['size']; //lấy theo kích cỡ file
// $_FILES['tham_so']['type']; //lấy theo kiểu file
// $_FILES['tham_so']['error']; //lấy được file lỗi
// $_FILES['tham_so']['tmp_name']; //upload lên thư mục tạm
// move_uploaded_file($ten_bien_thu_muc_tam, 'upload/anhdep.png');
if(isset($_POST['sbm'])){
    $file_name = $_FILES['fileupload']['name'];
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    $file_error = $_FILES['fileupload']['error'];
    if($file_error > 0){
        echo 'File upload bị lỗi';
    }else{
        move_uploaded_file($tmp_name, 'upload/'.$file_name);
        echo 'Upload thành công!';
    }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="fileupload">
<input type="submit" name="sbm">
</form>
<!-- <form action="" method="POST">
<input type="text" name="user">
<input type="text" name="pass">
<input type="submit" name="sbm">
</form> -->
</body>
</html>
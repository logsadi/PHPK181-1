<?php
//có 3 bước để lấy ra csdl 
//buowcs1: kết nối csdl
$connect = mysqli_connect('localhost', 'root', '', 'hocphpk181');
if($connect){
 mysqli_query($connect, "SET NAMES 'utf8'");
 //print_r('Kết nối thành công');
}else{
 echo 'Kết nối thất bại';
}
//buowcs2: viết truy vấn và thực thi
$sql = "SELECT * FROM thanh_vien";
$query = mysqli_query($connect, $sql);
//bước 3: lấy ra bản ghi
//hàm đếm số bản ghi:
// $num_rows = mysqli_num_rows($query);
// echo $num_rows;
//hàm lấy ra bản ghi trong tbale
// $row = mysqli_fetch_assoc($query);
// echo $row['address']; 
//sử dung vòng lặp để laays ra toàn bộ dữ liwwuj - while
while($row = mysqli_fetch_assoc($query)){
 echo $row['name'].'<br/>'.$row['birthday'].'<br/>'.$row['address'].'<br/>'.$row['phone'].'<br/>'.$row['name'];
 echo '<hr/>';
}
?>
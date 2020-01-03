<?php
// biểu thức điều kiện:
//if
// $soNguyen = -10;
// if($soNguyen > 0){
//     echo 'Đây là số nguyên dương';
//     //dang bolen có kết quả true và false
// }
//if -else
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'Đây là số nguyên dương';
//     //dang bolen có kết quả true và false
// }else{
//     echo 'Đây là số nguyên âm';
// }
//if-esle if -else
// $soNguyen = 0;
// if($soNguyen > 0){
//     echo 'Đây là số nguyên dương';
//     //dang bolen có kết quả true và false
// }else if($soNguyen < 0){
//     echo 'Đây là số nguyên âm'; 
// }else{
//     echo 'Đây là số 0'; 
// }
//Vòng lặp WHILE
// while(biểu thức){
//  thực thi hành động
// }
//vd:in ra các số chạy từ 5 đến 9, và cho mỗi số tương ứng 1 dòng
// $a = 5;
// while ($a < 10) {
//     echo $a.'<br/>';
//     $a++;
// }
//ví dụ 2: in ra các số từ 10 đến 1 và có dấu phảy trước 1, dấu chấm sau số 1
// $i = 10;
// while($i > 0){
//     if($i == 1){
//         echo $i.'.';
//     }else{
//         echo $i.',';
//     }
//     $i--;
// }
//vòng lặp for
// for (khởi tạo biểu thức; biểu thức ; tăng/giảm bt) { 
//     //thực thi hành động
// }
//bài tập:lấy ra các số chẵn từ 10 - 0
// for ($i=10; $i >= 0 ; $i-= 2) { 
//     echo $i.',';
// }
// bài tập 2: tính tổng của dãy số từ 0 đến 10
// $tong = 0;
// for ($i=0; $i <= 10 ; $i++) { 
//     $tong += $i;
// }
// echo $tong;
//bài tập
for ($i=2; $i <= 9 ; $i++) { 
    for ($j=1; $j <= 10 ; $j++) { 
        echo $i.'x'.$j.'='.$i*$j.',';
    }
    echo '<br/>';
}
?>
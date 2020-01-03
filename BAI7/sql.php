<?php
//SQL có cấu trúc:  
//a. SQL SERVER : C#, ASP.net
//b. MYSQL: PHP thuần, fwlarravel, CMS(WP, Joomla), nodejs, ruby, python
//có 3 bộ thư viện: 
//MYSQL: php cũ 5
//MYSQLi: mới -> php 7
//PDO: hay dùng cho nước ngoài
//2. NO SQL: không có cấu trúc -> monggodb
////////////MYSQLi
//có 4 tầng
//tàng 1: database (csdl)
//tầng 2: table (bảng dữ liệu)
//tầng 3: colum (trường thông tin)
//id là trường có tác dụng phân biệt dữ liệu
//taangf 4: thêm bản ghi
///////////////4 lệnh kinh điển
//1. SELECT: lấy ra toàn bộ dữ liệu trong data
//SELECT * FROM thanh_vien
//2. INSERT: thực thi chức năng thêm
//INSERT INTO user(user_mail, user_pass, user_full) 
//VALUES('tuanlt.it@gmail.com','admin','Lê Thanh Tuấn')
//3. UPDATE: thực thi chức năng sửa
//UPDATE thanh_vien 
//SET birthday = '2000-12-01', address = 'Thành Phố Hải Phòng, Hải Phòng' 
//WHERE id = 5
//4. DELETE :thực thi chức năng xóa
//DELETE FROM thanh_vien
//WHERE id = 5

?>
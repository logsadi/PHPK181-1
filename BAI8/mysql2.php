<?php
//lệnh bổ trợ nâng cao cho select
//1.WHERE (câu lệnh điều kiện)
//lấy ra tất cả các thành viên ỏ HN
// SELECT * FROM thanh_vien WHERE address = 'Hà Nội'
// //2,3: OR : AND | hoặc: và
// // lấy ra tăt các thành viên ở hà noi và sinh năm 2000
// SELECT * FROM thanh_vien WHERE address = 'Hà Nội' 
// AND birthday>='2000-01-01' 
// AND birthday<='2000-12-31'
// //lấy ra tất cả các thành viên ở hà nội hoặc sinh năm 2000
// SELECT * FROM thanh_vien WHERE address = 'Hà Nội' 
// OR birthday>='2000-01-01' 
// AND birthday<='2000-12-31'
// //4.ORDER BY (sắp xếp theo thứ tự: tăng dần ASC | Giảm dần DESC)
// //lấy ra tắt cả các sản phẩm theo thứ tự mới đăng
// SELECT * FROM product ORDER BY prd_id DESC
// //5. LIMIT (giới hạn số bản ghi hiển thị)
// //lấy ra 5 sản phaamr cũ nhất
// SELECT * FROM product ORDER BY prd_id ASC LIMIT 5
// // KẾT NỐI BẢNG
// SELECT * FROM product INNER JOIN category ON product.cat_id=category.cat_id

?>
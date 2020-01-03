<?php
//thuật toán phân trang
//LIMIT
// SELECT * FROM product LIMIT 5
// //Trang 1: 1-5| 0-4 | SELECT * FROM product LIMIT 0, 5
// //Trang 2: 6-10| 5-9 / SELECT * FROM product LIMIT 5, 5
// ..... 
// Trang N ($page)

// //ví dụ: 
// 1. sản phẩm 0
// 2. sản phẩm 1
// 3. sản phẩm 2

// 4.sản phẩm 3
// 5 sản phẩm 4
// 6. sản phẩm 5

// 7. sản phẩm 6
// 8. sản phaamr 7
// SELECT * FROM product LIMIT $per_row, $rows_per_page
// $rows_per_page = 3;

// $page = $_GET['page'];
// .............  

// $per_row = $page*$rows_per_page-$rows_per_page;
// //trang 1: 1*3-3=0
// //trang2: 2*3-3=3
// //trang3: 3*3-3=6

// trang1//LIMIT 0, 3
// trang2//LIMIT 3, 3
// trang3//LIMIT 6, 3 

?>
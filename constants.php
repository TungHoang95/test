<?php 
// Để tạo một hằng số, sử dụng define()hàm.
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
// phân biệt chữ hoa với chữ thường
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
//tạo hằng số Array bằng define()hàm
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
//Các hằng số được tự động toàn cầu và có thể được sử dụng trên toàn bộ tập lệnh.
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
 ?>
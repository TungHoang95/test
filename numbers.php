<?php 
// số
// trả về true 
$x = 5985;
var_dump(is_int($x));
//trả về false
$x = 59.85;
var_dump(is_int($x));
// trả về true
$x = 76.98;
var_dump(is_float($x));
// kiểm tra vô hạn
$x = 1.9e411;
var_dump($x);
// trả về NaN
$x = acos(8);
var_dump($x);
// kiểm tra xem biến có phải là số ko
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
// truyền float và chuỗi thành số nguyên

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
 ?>
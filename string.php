<?php 
//strlen () - Trả về độ dài của chuỗi
echo strlen("hello world!");
//str_word_count() - Đếm số từ trong chuỗi
echo str_word_count("hello world!");

//strrev () - Đảo ngược một chuỗi
echo strrev("hello world!");

//strpose () - Tìm kiếm văn bản trong chuỗi

echo strpos("hello world!",  "world");//// outputs 6
//str numplace () - Thay thế văn bản trong chuỗi

echo str_replace("world!", "abcd", "world! abcd");
 ?>
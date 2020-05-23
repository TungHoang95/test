<?php 
// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;
// $z = ($x + $y);

// echo $z;
//  $x = 5; // global scope
 
// function myTest() {
//   // using x inside this function will generate an error
//   echo "Variable x inside function is:";
// } 
// myTest();

// echo "Variable x outside function is:".$x;
// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();   // 0 1 2
 ?>
<?php
//bai1
// $a = array( '1', '2', '3');
// print_r($a);
// $inserted = array( '0' ); // not necessarily an array, see manual quote

// array_splice( $a, 0, 0, $inserted );
// echo "<pre>";
// print_r($a);
// echo "</pre>";
// // //bai2
// $mang = ['abc'];
// echo "<pre>";
// print_r($mang);
// echo "</pre>";
// $result = array_replace($mang,array('abc'), array('aBc'));
// echo "<pre>";
// print_r($result);
// $result = array_replace($mang,array('abc'), array('abC'));
// echo "<pre>";
// print_r($result);
// $result = array_replace($mang,array('abc'), array('AbC'));
// echo "<pre>";
// print_r($result);
// echo "</pre>";
$array =array();
$a =array('1','2','3');
$b = array('a','b');
foreach ($a as $key=>$value){
   foreach ($b as $keys => $values){
       $array[] = $value."-".$values;
   }
}
echo "<pre>";
print_r($array);
echo "</pre>";

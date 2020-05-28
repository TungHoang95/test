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


// cho 3 mang nhu phia duoi,

// 
$a =array('1','2','3');
$b = array('a','b');
$c = array('x','y',9);

function GhepPhanTu($arr1, $arr2){
    //todo viet code
}

$d=GhepPhanTu($a,$b);
$e=GhepPhanTu($d,$c);

print_r($e);

$finnal=[$a,$b,$c];

while(true){
    //todo: ghep phan tu cua tung mang trong mang $finnal cho den khi count(finnal)==0
        //dieu kien thoat: $finnal count ==1 break;
        
}


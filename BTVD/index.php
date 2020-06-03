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
// $array =array();
// $a =array('1','2','3');
// $b = array('a','b');
// foreach ($a as $key=>$value){
//    foreach ($b as $keys => $values){
       
//        $array[] = $value."-".$values;
//    }
// }
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// cho 3 mang nhu phia duoi,

// 
// $a =array('1','2','3');
// $b = array('a','b');
// $c = array('x','y',9);

// function GhepPhanTu($a, $b){
//     // todo viet code
//   foreach ($a as $key => $value) {
// 		  	 foreach ($b as $key1 => $value1) {
// 		  	 $d[] = [$value,$value1];
// 		  	 }
// 	}
// 	return $d;

// }

// $d=GhepPhanTu($a,$b);
// //[[1,a],[1,b],[2,a],[2,b],[3,a],[3,b]]
// print_r($d);

//  $e=GhepPhanTu($d,$c);
// print_r($e);


//[[1,a,x],[1,a,y],[1,a,9] ,...]
//print_r($d);
// print_r($e[0]);

// $final = [$a,$b,$c];

//  $txt = "Hello world!";
//  $txt =9;
//  $txt = array(null);
// print_r($txt);
//  echo count($txt);
   $a =array('1','2','3');
    $b = array('a','b','c');
    $c = array('x','y','9');

function GhepPhanTu($a, $b, $c){
    foreach ($a as $key => $value) {
        foreach ($b as $key1 => $value1) {
            $d[] = [$value,$value1];
        }
    }
    echo "<pre>";
    print_r($d);
    echo "</pre>";   
    $e = array();
    $j=0;
    for ($i=0; $i < count($d) ; $i++) { 
        array_push($d[$i], $c[$j]);
        array_push($e, $d[$i]);
        $j++;
        if ($j == count($c)) {
            $j = 0;
        };
    };
    echo "<pre>";
    print_r($e);
    echo "</pre>";

};
echo GhepPhanTu($a, $b, $c);

?>
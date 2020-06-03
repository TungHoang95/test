
<?php
// $a = [1,2,3];
// $b =[];
// $c =[];
// $d =[];

// for($i = 1; $i <= count($a); $i++){
//     if($i == 1){
//         array_push($a,0);
//         $b = $a;
//         print_r($b);
//         print_r('</br>');
//     }elseif($i == 2){
//         sort($a);
//         $c = $a;
//         print_r($c);
//         print_r('</br>');
//     }elseif($i == 3)
//     {
//         array_shift($a);
//         array_splice($a,2,0,0);
//         $d = $a;
//         print_r($d);
//         print_r('</br>');
//     }   
// }
// function insertAfterIndex($arrSource, $item, $index){
// //todo: write code here
    
// }
function insertAfterIndex($arrSource, $item, $index){
       array_splice( $arrSource, $index+1, 0, $item );
         return $arrSource;
}

$arr=["A",1,"d","b",5,8];

$result=insertAfterIndex($arr, "x",4);
print_r($result);
// will be ["A",1,"x" ....]

$result=insertAfterIndex($arr, "x",2);
print_r($result);
// will be ["A",1,"d","x" ....]

$result=insertAfterIndex($arr, "x",10);
print_r($result);
// will be ["A",1 ....8,"x"]

//array_splice( $arrSource, $index+1, 0, $item )
// $arrSource là mảng cần chèn
// $index+1 là vị trí cần chèn
// $item Giá trị cần chèn

// $number = array(1,2,0,9,7,8);
// sort($number);

// $arr = count($number);
// for($x = 0; $x < $arr; $x++) {
//   echo $number[$x];
//   echo "<br>";
// $cars = array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );
  
// 	echo "key =".$key."value =".$value;
}

?>


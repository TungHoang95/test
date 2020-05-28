
<?php
$a = [1,2,3];
$b =[];
$c =[];
$d =[];

for($i = 1; $i <= count($a); $i++){
    if($i == 1){
        array_push($a,0);
        $b = $a;
        print_r($b);
        print_r('</br>');
    }elseif($i == 2){
        sort($a);
        $c = $a;
        print_r($c);
        print_r('</br>');
    }elseif($i == 3)
    {
        array_shift($a);
        array_splice($a,2,0,0);
        $d = $a;
        print_r($d);
        print_r('</br>');
    }   
}
?>
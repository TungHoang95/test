<?php 
$a=[1,2,3];
$b=["a","b"];
function GhepPhanTu($a,$b){
    $result = array();
    foreach($a as $i){
        foreach($b as $j){
            $temp=[];
            if(is_array($i)) $temp = array_merge($temp, $i);
            else array_push($temp, $i);
            if(is_array($j)) $temp = array_merge($temp, $j);
            else array_push($temp, $j);
            array_push($result, $temp);
        }
    }
    return $result;
}
$c=GhepPhanTu($a,$b);
echo "<pre>";
print_r($c);
echo "</pre>";
$d=["x",1];
$e= GhepPhanTu($c,$d);
echo "<pre>"; 
print_r($e);
echo "</pre>";

function GhepPhanTuNangCao($arrayInput){
//write your code here
	$result = $arrayInput[0];
	$count = count($arrayInput);
    for ($i=1; $i < $count ; $i++) { 
    	$result = GhepPhanTu($result,$arrayInput[$i]);
    }
    return $result;
}

$arr=[$a,$b,$d,[1,34,8],["g","h","t"]];// $arr co the co so luong item bat ki
$r= GhepPhanTuNangCao($arr);
echo "<pre>";
print_r($r);
echo "</pre>";
// Giải thích ghép phần tử nâng cao
   // khai báo mảng $result có giá trị ban đầu là item đầu tiên của $arrayInput
   // dùng for để duyệt hết các item có trong $arrayInput
    // Không cần duyệt item 0 (phần tử đầu tiên),
    // vì $result đã lưu lại item đầu tiên của $arrayInput
    // ở vòng lặp đầu tiên, GhepPhanTu sẽ trả về kết quả khi ghép 2 mảng $arrayInput[0] và $arrayInput[1]
        // và gán giá trị đó cho $result,

        // tiếp tục sang vòng lặp thức 2 thì GhepPhanTu lại gộp kết quả cũ của vòng lặp trước (kết quả đó đang lưu trong $result)
        // gộp lại với $arrayInput[2] và gán giá trị sau khi gộp cho $result,
        // ....
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]
?>



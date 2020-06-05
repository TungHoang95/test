<?php

class Version
{
    public function toString(){
        $NumberOfVersion = range(0,1000000);
        return "Current version $NumberOfVersion[1]";
    }

    //getNumberOfVersion
    public function NumberOfVersion($num){
        if(is_array($num)){
            $result = "";
            foreach($arrVersion as $arr){
                $result .= "$arr" ;
            }        
            $this->NumberOfVersion = $result;
        }else{
            $this->NumberOfVersion = $num;
        }
        return $this->NumberOfVersion;
    }

    // dem so
    public function DemSo($So){
        switch($So):
            case 0:
                $So = 0;
            break;
            case 1:
                $So = 1;
            break;
            case 2:
                $So = 2;
            break;
            case 3:
                $So = "ba";
            break;
            case 1000:
                $So = "một nghìn";
            break;
        endswitch;
        return $So;
    }
    function ThayDoiVersion($arrVersion){
        if(is_array($arrVersion)){
            foreach($arrVersion as $key =>$value){
                $arrVersion[$key] = $this->DemSo($value);
            }
        }
        return $arrVersion;
    }
    //write your code here
        // doi version cho cac object $ver1, $ver2, $ver3, dang tu 1,2, 3,
        // thanh MOT, HAI, BA,

}
/*yeu cau:
bo xung property NumberOfVersion cho class Version
bo xung ham ToString khi duoc goi se tra ve vd: "Current version 1"

Khai bao cac object $ver1, $ver2, $ver3 va gan gia tri 1,2,3 tuong ung cho NumberOfVersion

    //advance: NumberOfVersion co the tu 0-> 1000000

*/
$ver1 = new Version;
$currentV1 = $ver1->ToString() ;
echo $currentV1 ;
echo "\n";
// mong muon ket qua la: Current version 1

// ver1
$ver1 = new Version;
echo $ver1->NumberOfVersion(1);
echo "\n";
// ver2
$ver2 = new Version;
echo $ver2->NumberOfVersion(2);
echo "\n";
// ver3
$ver3 = new Version;
echo $ver3->NumberOfVersion(3);
echo "\n";
// kq: 1 2 3

//------------
$arrVersion = [$ver1, $ver2 , $ver3];
$arr = new Version;
$arr->NumberOfVersion($arrVersion);
print_r($arr);
//in ra $arrVersion
//ket qua mong muon la 1, 2 , 3

// dem so
$ver4 = new Version;
$arrVersion =[1 ,2 ,3,1000];
$arrResult = $ver4->ThayDoiVersion($arrVersion);
print_r($arrResult);
//in ra $arrResult
//ket qua mong muon la MOT, HAI , BA, MOT NGHIN 

?>

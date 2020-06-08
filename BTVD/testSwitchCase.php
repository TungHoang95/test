<?php
class SwithCaseHandle 
{
    function __construct()
    {
    $this->arr = ["fade",
    "wipeleft",
    "wiperight",
    "wipeup",
    "wipedown",
    "slideleft",
    "slideright",
    "slideup",
    "slidedown",
    "circlecrop",
    "rectcrop",
    "distance",
    "fadeblack",
    "fadewhite",
    "radial",
    "smoothleft",
    "smoothright",
    "smoothup",
    "smoothdown",
    "circleopen",
    "circleclose",
    "vertopen",
    "vertclose",
    "horzopen",
    "horzclose",
    "dissolve",
    "pixelize",
    "diagtl",
    "diagtr",
    "diagbl",
    "diagbr",
    "hlslice",
    "hrslice",
    "vuslice",
    "vdslice"] ;
 }
    //khai bao du lieu mang tren cho class, tai constructor
    
    // voi moi item trong mang da khai bao, can viet 1 function tuong ung de Viet hoa chu cai dau tien
    //vd: voi item "wipeup" se viet ham 
  function Handle($input){
        if(in_array($input,$this->arr)){
            return ucfirst($input);
        }
    }  
 // xét tạm 3 hàm
    function fade($input){
        return ucfirst($input);
    }
    function wipeleft($input){
        return ucfirst($input);
    }
    function wiperight($input){
        return ucfirst($input);
    }
}

$test=new SwithCaseHandle();
echo $test->Handle('wiperight');
// ket qua mong cho: Vdslice
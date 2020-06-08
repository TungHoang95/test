<?php
class SwithCaseHandle 
{
    function __construct()
    {
     $arr = ["fade",
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
    function wipeup(){
        return ucfirst('wipeup'); 
    }
    function wipeleft(){
        return ucfirst('wipeleft');
    }
    function wiperight(){
        return ucfirst('wiperight');
    }
    function vdslice(){
        return ucfirst('vdslice');
    }
 // xét tạm 4 hàm này thôi chứ để xét hết thì quá nhiều 

    function Handle($input){
        switch($input){
            case 'wipeup':
                return $this->wipeup($input);
            break;
            case 'wipeleft':
                return $this->wipeleft($input);
            break;
            case 'wiperight':
                return $this->wiperight($input);
            break;
            case 'vdslice':
                return $this->vdslice($input);
            break;
        }
        
        //khi dua $input la 1 trong nhung item trong mang khai bao. goi ham tuong ung
    }   
}

$test=new SwithCaseHandle();
echo $test->Handle('vdslice');
// ket qua mong cho: Vdslice
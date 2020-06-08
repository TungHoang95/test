<?php
/*array =["fade",
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
    "vdslice"] 
    
    */

class SwithCaseHandle 
{
    

    //khai bao du lieu mang tren cho class, tai constructor
    
    // voi moi item trong mang da khai bao, can viet 1 function tuong ung de Viet hoa chu cai dau tien
    //vd: voi item "wipeup" se viet ham 
    function Wipeup () {
        // return upper case chu cai dau tien
    }

    function Handle( $input){
        //khi dua $input la 1 trong nhung item trong mang khai bao. goi ham tuong ung
    }    
}

$test=new SwithCaseHandle();

echo $test->Handle('vdslice');
// ket qua mong cho: Vdslice
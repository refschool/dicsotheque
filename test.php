<?php
function div($a,$b){
    if($b == 0 ){
        //
    }
   return $a / $b;
}


function testDiv(){
    $result = div(5,0);
    if($result == 2.5){
        echo 'Test OK';
    } else {
        echo 'Test failed';
    }
}

testDiv();
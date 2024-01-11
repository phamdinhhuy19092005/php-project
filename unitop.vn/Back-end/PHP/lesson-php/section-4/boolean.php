<?php
// $a = 10;
// if($a%2 == 0){ // trả về True or False
//     echo"{$a} là số chẵn ";
// }


function checkEven($n){
    if($n%2 == 0){ // trả về True or False
        return true;
    }else{
        return false;
    }
}

$check = checkEven(4);

echo"{$check} đúng";
<?php
//step1
function number(){
    $number1 = 20;
    $number2 =30;
    $number3 = $number1 + $number2;


    return $number3;
};

$allnumber = number();
echo $allnumber;
 echo"<br>";
//step2

function name($firstname, $lastname){
$fullname = $firstname.$lastname;
echo$fullname;
};
name("Phạm Đình ", "Huy" );
?>
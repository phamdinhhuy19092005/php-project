<?php
class car{

function MoveWheels(){
echo"Wheels move";
} 


};


if(method_exists("car", "MoveWheels")){
    echo "Yehhhhh moveWheels";
}else{
    echo "Nooo wtf";
}

?>
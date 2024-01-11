<?php



class car{
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 4;

function MoveWheels(){
   $this->wheels=10;
// echo"Wheels move";
}

function CreateDoors(){
    $this-> doors = 8;
}
};
// khai báo object
$bmw = new car();
$struck = new car();

$bmw->MoveWheels();
$truck->CreateDoors();
echo $bmw -> wheels;
echo "<br>";
echo "Xe bán tải  <br>";
echo  $truck->wheels ;
echo "<br>";





?>
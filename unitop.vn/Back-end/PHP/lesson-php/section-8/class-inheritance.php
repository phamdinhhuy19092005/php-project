<?php



class car{
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 4;

function MoveWheels(){
   $this->wheels=10;
} 
function CreateDoors(){
    $this->doors = 8;
}
};
// khai báo object
$bmw = new car();


// kiểu đối tác mở rộng
class Plane extends Car{
    // ưu tiên
     var $wheels = 20;
}
$jet = new Plane();

echo $jet->wheels;





?>
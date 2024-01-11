<?php
class Dog{
    var $foot = 4;
    var $head = 1;
    var $fur_color = "red";

    function ShowAll(){
       echo $this->foot."<br>";
       echo  $this->head."<br>";
       echo  $this->fur_color."<br>";
    }
}

$pitbull = new Dog;

echo $pitbull->foot;

echo $pitbull->ShowAll();

?>
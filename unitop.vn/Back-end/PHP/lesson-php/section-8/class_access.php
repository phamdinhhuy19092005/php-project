<?php

class car{
    // công cộng
public $wheels = 4;
    // được bảo vệ
protected $hood = 1;
    // riêng tư
private $engine = 1;

var $doors = 4;

function __construct(){
   echo $this->wheels = 10;
}

};
// khai báo object
$bmw = new car();
$struck = new car();





?>
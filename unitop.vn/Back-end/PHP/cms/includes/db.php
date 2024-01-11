<?php

$connection = mysqli_connect('localhost','root','','cms');
if(isset($connection)){
    echo "Đã kết nối";
}

?>
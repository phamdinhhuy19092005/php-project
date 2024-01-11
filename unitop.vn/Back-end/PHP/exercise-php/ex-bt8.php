<?php
 $password = "huypham1909";
 $salt = "loginaphuypham22";
 $password_md5 = md5($password . $salt);
 echo $password_md5;

?>
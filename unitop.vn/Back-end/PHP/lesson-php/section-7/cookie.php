<?php

$name = "huypham";
$value = 100;

// hết hạn              1s*1h*1ngay*1tuan
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE PHP</title>
</head>
<body>
    
</body>
</html>
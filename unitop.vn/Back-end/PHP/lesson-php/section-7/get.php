 <?php
 // lấy dữ liệu 
print_r($_GET) ;
 ?>

 <?php
$id = 10;
$button = "CLICK HERE!";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="get.php?id=<?php echo $id ?>" ><?php echo $button ?></a>
</body>
</html>
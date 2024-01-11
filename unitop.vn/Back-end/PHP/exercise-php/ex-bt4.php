<?php

// Ex1;
$list_member = array(
    1 => array(
        'id' => 1,
        'fullname' => 'phạm đình huy',
        'age' => 18,
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'nguyễn phạm đông thanh',
        'age' => 17,
    ),


);


//Ex2;
$list_product = array(
    1 => array(
        'sst' => 1,
        'fullname_book' => 'Cách biến thành yêu quái'
    ),
    2 => array(
        'sst' => 2,
        'fullname_book' => 'Cách biến thành người'
    ),
);

//Ex3;
$name = 'Huy';
$birth = 2005;
$hevy = '75kg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <p class="name">Tôi tên <strong><?php echo $name ?></strong></p>   
    <p class="birth">Sinh năm <strong><?php echo $birth ?></strong></p>
    <p class="name">Cân nặng <strong><?php echo $hevy ?></strong></p>

</body>
</html>

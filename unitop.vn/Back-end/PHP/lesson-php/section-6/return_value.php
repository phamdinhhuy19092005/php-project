<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function addNumber($number1, $number2){

    $sum = $number1 + $number2;
    return $sum;
};
$result = addNumber(34, 23);
echo $result;

    ?>
</body>
</html>
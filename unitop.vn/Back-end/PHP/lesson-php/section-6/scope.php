<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope php</title>
</head>

<body>
    <?php
    // $GLOBALS => lấy dữ liệu ở bên ngoài hàm
    $a = 'Đình ';
    $b = 'Huy';

    function fullName(){

        $fullname = $GLOBALS['a'] . $GLOBALS['b'];

        echo $fullname;
    };

    fullName();
    ?>
</body>

</html>
<?php


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if ($connection) {
        echo "Đã đc kết nối";
    } else {
        die('dữ liệu chết');
    }

    $query = "SELECT * FROM user";
    
    $result = mysqli_query($connection, $query);


    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
            <?php
while($row = mysqli_fetch_assoc($result)){
 echo"<pre>";

print_r($row);

echo"<pre>";


};



            ?>
        </div>
    </div>




</body>

</html>
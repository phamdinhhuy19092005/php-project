<?php
// lấy ra dữ liệu name đc viết trong input
echo $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="the_post.php" method="post">
        <input type="text" name="name">
        <input type="submit" value="submit">

    </form>
</body>

</html>
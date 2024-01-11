
<?php
// lấy dữ liệu từ $_GET
if(isset($_GET['username']) && isset( $_GET['password'])){
    echo $_GET['username'];
    echo"<br>";
    echo $_GET['password'];
}
// đặt thời gian hết hạn 1 tuần
$expiration = time()+(86400*7);
setcookie('username','password',$expiration);
// $_COOKIE
if(isset($_COOKIE['username'])&& isset($_COOKIE['password'])){
    echo $_COOKIE['username'];
    echo "<br>";
    echo $_COOKIE['password'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 9</title>
</head>
<body>
    <form action="ex-bt9.php" method="get">
        Fullname : <input type="username" name="username">
        Password : <input type="password" name="password">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
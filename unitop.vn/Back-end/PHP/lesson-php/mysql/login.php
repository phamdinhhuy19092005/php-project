<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'webnhalam');
    if ($connection) {
        echo "Đã đc kết nối";
    } else {
        die('dữ liệu chết');
    }
// truy vấn CHÈN DỮ LIỆU 
    $query = "INSERT INTO users(username,password)";

    $query .= "VALUES ('$username','$password')";

    $result = mysqli_query($connection, $query);


    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    }

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

    <style>
        input {
            padding: 10px;
            margin: 10px;
        }
    </style>

    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="LOGIN">
            </form>
        </div>
    </div>




</body>

</html>
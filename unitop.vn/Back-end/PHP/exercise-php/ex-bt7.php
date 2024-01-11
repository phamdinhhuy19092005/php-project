<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'mylist');
    if ($connection) {
        echo "Đã được kết nối";
    } else {
        echo "Kết nối thất bại";
    }

    // $queryDatabase = "INSERT INTO users(username,password)";
    // $queryDatabase .= "VALUES ('$username','$password') ";
       $queryDatabase = "SELECT * FROM users";
        // ===> lấy ra Array Database

    $result = mysqli_query($connection, $queryDatabase);

    if (!$result) {
        die('QUERY FAILE' . mysqli_error($connection));
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 7</title>
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .wrapper {
            width: 500px;
            margin: 0px auto;
        }

        .wrapper form {
            padding: 10px;
        }

        input {
            border: none;
            padding: 10px;
            margin: 3px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 8px;
            border: 2px solid #FF8080;
        }
    </style>
    <div class="wrapper">
        <!-- <form action="ex-bt7.php" method="post">
            <label for="username">Nhập tên</label> <br>
            <input type="text" name="username"> <br>

            <label for="password">Nhập mật khẩu</label> <br>
            <input type="password" name="password"> <br>

            <input type="submit" name="submit">
        </form> -->

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<pre>";

            print_r($row);

            echo "<pre>";
        };
        ?>
    </div>

</body>

</html>
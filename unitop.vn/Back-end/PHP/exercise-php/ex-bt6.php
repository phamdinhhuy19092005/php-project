<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-bt6</title>
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .error-btn {
            width: 500px;
            margin: 0px auto;
            text-align: center;
            border: 1px solid #64CCC5;
            padding: 20px;
            margin: 20px 20px;
            border-radius: 8px;
        }

        label {
            padding: 3px;
        }

        input {
            margin: 2px;
            padding: 10px;
            border-radius: 8px;
            background: none;
            
            border: 1px solid #64CCC5;
        }

        .aa:hover {
            background: #64CCC5;
            color: white;
        }
    </style>
    <div class="error-btn">
        <form action="ex-bt6.php" method="post">

<input type="text" name="username" placeholder="Nhập tên">
<input type="password" name="password" placeholder="Nhập mật khẩu?">
<input class="aa" type="submit" name="submit">

        </form>
    </div>
</body>

</html>
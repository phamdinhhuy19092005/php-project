<?php
$name = array("Huy", "thanh", "hào");
$min = 5;
$max = 10;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;

    echo"<br>";
// Kiểm tra độ dài của password 
//- nằm trong khoảng 5-10 ký tự
    if(strlen($password) < $min){
        echo "Cần nhập mật khẩu lớn hơn 5 ký tự";
    };
    echo"<br>";

     if(strlen($password) > $max){
        echo"Nhập mật khẩu nhỏ hơn 10 ký tự";
     };
     echo"<br>";
// kiểm tra người dùng có nhập đúng như array hay không
     if(!in_array($username,$name)){
        echo"Nhập sai tên";
     };



}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
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

    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Nhập tên của bạn?"><br>
        <input type="password" name="password" placeholder="Nhập mật khẩu?"><br>
        <input class="aa" type="submit" name="submit">
    </form>
    
    </div>
    
</body>

</html>
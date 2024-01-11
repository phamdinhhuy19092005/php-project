<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root', '', 'webnhalam');
    if($connection){
        echo '<i class="bi bi-database-check"></i>';
        echo "Kết nối thành công";
    }else{
        echo '<i class="bi bi-database-slash"></i>';
        echo "Kết nối thất bại";
    }
    
    echo "<br></br>";

    $query = "INSERT INTO users(username,password)";
    $query.= "VALUE ('$username','$password')";

    $result = mysqli_query($connection, $query);
    if($result){
        echo '<i class="bi bi-person-fill-add"></i>';
        echo "Thêm người dùng thành công";
    }else{
        echo '<i class="bi bi-person-fill-x"></i>';
        echo "Thêm người dùng thất bại";
    }
}
?>
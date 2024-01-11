
<?php include "db.php"; ?>

<?php

function createRow()
{

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
        
    // Mã hóa mật khẩu 1 chiều
        $password = md5($password);
    //-----------------------//
    
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if ($connection) {
            echo "Đã đc kết nối";
        } else {
            die('dữ liệu chết');
        }
        // truy vấn CHÈN DỮ LIỆU 
        $query = "INSERT INTO user(username,password)";
    
        $query .= "VALUES ('$username','$password')";
    
        $result = mysqli_query($connection, $query);
    
    
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        }
    } 
};



function showAllData()
{

    global $connection;

    $query = "SELECT * FROM user";

    $result = mysqli_query($connection, $query);


    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    };
}


// update 1 user
function UpdateTable()
{
    global $connection;
    $username =   $_POST['username'];
    $password =  $_POST['password'];
    $id =  $_POST['id'];

    $query = "UPDATE user SET  ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";


    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo " Record Update";
    }
};


function deleteRow()
{
    global $connection;
    // $username =   $_POST['username'];
    // $password =  $_POST['password'];
    $id =  $_POST['id'];

    $query = "DELETE FROM user  ";
    // $query .= "username = '$username', "; 
    // $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";


    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record Delete ";
    }
};

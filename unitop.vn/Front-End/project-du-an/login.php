<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'webnhalam1');

    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }

    // Close the connection after performing the query
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssCV/login.css">
    <title>Login__WebNhaLam</title>
</head>

<body>
    <div id="wrapper_login">
        <header>
            <div class="dashboard_login">
                <div class="nav_bar">
                    <div class="left_header">
                        <a href="">DASHBOARD</a>
                    </div>

                    <div class="center_header">
                        <ul class="item-1">
                            <li>
                                <a href="">
                                    <i class="bi bi-boxes"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="bi bi-person-fill"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="bi bi-person-circle"></i>
                                    <p>Sign Up</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-key"></i>
                                    <p>Sign In</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="right-header">
                        <ul class="item-2">
                            <li class="btn-1">
                                <a href="">ONLINE BIULDER</a>
                            </li>
                            <li class="btn-2">
                                <a href="">FREE DOWLOAD</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="form-login">
            <div class="header-form">
                <h1>Sign in</h1>
                <ul class="item-icon">
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-square-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="table-login">
                <form class="table" method="post">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <hr>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <hr>
                    <input type="submit" name="submit" id="submit" value="SIGN IN">
                </form>
            </div>

        </div>

    </div>
</body>

</html>
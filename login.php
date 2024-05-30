<?php
include('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <h1>Welcome to LUCAS LOAVES</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
</nav>
<div class="container">
    <h2>Login</h2>
    <form action="" method="post">
        <label>Username :</label>
        <input type="text" name="username" class="box"/><br/><br/>
        <label>Password :</label>
        <input type="password" name="password" class="box"/><br/><br/>
        <input type="submit" value="Submit"/><br/>
    </form>
</div>
<footer>
    <p>&copy; 2024 Lucas Loaves. <a href="https://www.nsw.gov.au/nsw-government/privacy-statement">Privace Statement</a></p>
    <p>123 Pitt Street, Sydney NSW 2000</p>
</footer>
</body>
</html>

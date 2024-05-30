<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <h1>Welcome to Lucas Loavers</h1>
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
    <h2>Register</h2>
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

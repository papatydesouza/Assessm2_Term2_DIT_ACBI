<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lucas Loaves</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Lucas Loaves</h1>
        <nav>   
            <a href="index.php">Home</a>
            <!-- <a href="products.php">Products</a> -->
            <!-- <a href="classes.php">Classes</a> -->
            <!-- <a href="contact.php">Contact</a> -->
            <a href="products.html">Products</a>
            <a href="classes.html">Classes</a>
            <a href="contact.html">Contact</a>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <h2>About Us</h2>
        <p>Welcome to Lucas Loaves, Here you can find everything you want </p>
    </main>
    <footer>
        <p>&copy; 2024 Lucas Loaves</p>
    </footer>
</body>
</html>

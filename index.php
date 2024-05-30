<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lucas Loaves</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .centered-image {
            display: block;
            margin: 0 auto;
            max-width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Lucas Loaves</h1>
        <nav>   
            <a href="index.php">Home</a>
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
        <img src="https://www.telegraph.co.uk/content/dam/food-and-drink/2023/07/20/TELEMMGLPICT000343041565_16898662927160_trans_NvBQzQNjv4Bqek9vKm18v_rkIPH9w2GMNpPHkRvugymKLtqq96r_VP8.jpeg" alt="Centralized Image" class="centered-image">
    </main>
    <footer>
    <p>&copy; 2024 Lucas Loaves. <a href="https://www.nsw.gov.au/nsw-government/privacy-statement">Privace Statement</a></p>
    <p>123 Pitt Street, Sydney NSW 2000</p>
    </footer>
</body>
</html>

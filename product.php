<?php
include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <h1>Welcome to Our Site</h1>
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
    <h2>Our Products</h2>
    <?php
    $sql = "SELECT name, description, image_url FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">';
            echo '<h3>' . $row["name"] . '</h3>';
            echo '<p>' . $row["description"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>
<footer>
    <p>&copy; 2024 Lucas Loaves. <a href="https://www.nsw.gov.au/nsw-government/privacy-statement">Privace Statement</a></p>
    <p>123 Pitt Street, Sydney NSW 2000</p>
</footer>
</body>
</html>

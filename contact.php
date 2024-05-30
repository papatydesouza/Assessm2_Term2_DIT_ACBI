<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
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
    <h2>Contact Us</h2>
    <form action="contact-form-handler.php" method="post">
        <label>Name :</label>
        <input type="text" name="name" class="box"/><br/><br/>
        <label>Email :</label>
        <input type="text" name="email" class="box"/><br/><br/>
        <label>Message :</label>
        <textarea name="message" class="box"></textarea><br/><br/>
        <input type="submit" value="Submit"/><br/>
    </form>
</div>
<footer>
    <p>&copy; 2024 Lucas Loaves. <a href="https://www.nsw.gov.au/nsw-government/privacy-statement">Privace Statement</a></p>
    <p>123 Pitt Street, Sydney NSW 2000</p>
</footer>
</body>
</html>

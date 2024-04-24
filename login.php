<?php
session_start();
include 'mylib.php';
?>
<!--Filename: login.php
	Purpose: login page for FashionFinder prototype -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashion finder</title>
    <link rel="icon" href="https://fashion-finder.store/images/favicon.png">
    <!--<link rel="stylesheet" href="styles.css"> -->
	<link rel="stylesheet" type= "text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<style>
	</style>
</head>
<body>
	
    <?php include 'elements/header.php'; ?>
	
    <!-- Login form  -->
    <div class="login-form">
        <h2>Login</h2>
        <form action="loginDB.php" method="POST">
            <label for="loginField">Display Name:</label>
            <input type="text" id="displayName" name="loginField" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
	<?php include 'elements/footer.php'; ?>
</body>
</html>

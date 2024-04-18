<?php
session_start();
include 'mylib.php';
// Check if the user is logged in
$userLoggedIn = isset($_SESSION['email']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection
    $error = db_connect();
    if ($error !== null) {
        die("Connection failed: " . $error);
    }

    $loginField = $_POST['loginField'];
    $password = $_POST['password'];
    if ($loginField && $password) {
        // Check if loginField is a display name
        $query = $db->prepare("SELECT * FROM users WHERE displayName = ?");
        $query->bind_param("s", $loginField);
        $query->execute();
        $result = $query->get_result();

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify password
            if ($user['password'] == $password) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['displayName'] = $user['displayName'];
                // Redirect
                header("Refresh:0");
                //exit();
            } else {
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            echo "<script>alert('User not found');</script>";
        }
    } else {
        echo "<script>alert('Please provide both login field and password.');</script>";
    }

    $db->close();
}
?>

<!--Filename: login.php
	Purpose: login page for FashionFinder prototype 
-->
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
	
	<div class="logo-container">
                <img src="images/fashion-finder.png" alt="Fashion Finder Logo" class="logo">
                <img src="images/fashion-finder-small.png" alt="Fashion Finder Logo Small" class="logo-small">
    </div>
    <header>

        <div class="container">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
		    <li>​<a href=​"signUp.php">​SIGN UP​</a>​</li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
	<!-- SEARCH BAR -->
		<script async src="https://cse.google.com/cse.js?cx=e42db96d918aa4f45">
		</script>
		<div class="gcse-searchbox"></div>
		<div class="gcse-searchresults" data-mobileLayout="enabled" data-disableWebSearch="true">
	<!---------------->

    </main>
	
    <!-- Login form  -->
    <div class="login-form">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="loginField">Display Name:</label>
            <input type="text" id="displayName" name="loginField" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <footer class="footer">
        <div class="footer__addr">
            <img src="images/fashion-finder-small.png" alt="Fashion Finder Logo Small" width="100" height="100">
            
            <h2>Contact</h2>
            
            <address>
            15200 Kutztown Rd, Kutztown, PA 19530<br>
                
            <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a> <!-- Set up email and insert it here lol -->
            </address>
        </div>
        
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Info</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">About Fashion Finder</a>
                    </li>

                    <li>
                        <a href="#">About Us</a>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav__item">
                <h2 class="nav__title">Questions</h2>
                
                <ul class="nav__ul">
                    <li>
                        <a href="#">Add your favorite store</a>
                    </li>
                    
                    <li>
                        <a href="#">Suggestions</a>
                    </li>
                    
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </li>
        </ul>
        
        <div class="legal">
            <p>&copy; 2024 Fashion Finder. All rights reserved.</p>
            
            <div class="legal__links">
            <span>Made with <span class="heart">♥</span> by FashionFinders</span>
            </div>
        </div>
    </footer>
</body>
</html>

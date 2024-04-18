<!--Filename: signUp.php 
	Purpose: signUp page for FashionFinder prototype -->
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
					<li>
                    <?php
                        include 'mylib.php';
                        // Check if the user is logged in
                        $userLoggedIn = isset($_SESSION['email']);
                        // Check if the user is logged in
						if ($userLoggedIn) {
							echo '<a href="logout.php">Sign out? ' . $_SESSION['displayName'] . '</a>';
						} else {
							// If not logged in, show the login link
							echo '<a href="login.php">LOGIN</a>';
						}
						?>
                    </li>
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

     <!-- Sign Up form  -->
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="signUpDB.php" method="POST">
                <label for="displayName">Display Name:</label>
                <input type="text" id="displayName" name="displayName" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </main>
	
	<h2>Sign Up</h2>
    <form action="signUpDB.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="displayName">Display Name:</label>
            <input type="text" id="displayName" name="displayName" required><br><br>
            <input type="submit" value="Sign Up">
    </form>

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

<?php
session_start();
include 'mylib.php';
?>
<!--Filename: signUp.php
	Purpose: signUp page for FashionFinder prototype -->
<!DOCTYPE html>
<html lang="en">
<body>
	<?php include 'elements/header.php'; ?>
	<div class="signup-form" style ="color:#E0FF4F;">
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
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>

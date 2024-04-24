<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

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
        // Check if loginField is a display name or email
        $query = $db->prepare("SELECT * FROM users WHERE displayName = ? OR email = ?");
        $query->bind_param("ss", $loginField, $loginField);
        $query->execute();
        $result = $query->get_result();

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $hashedPassword = $user['password']; // Get hashed password from the database
            // Verify password
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, set session variables and redirect
                $_SESSION['email'] = $user['email'];
                $_SESSION['displayName'] = $user['displayName'];
                header("Location: index.php");
                exit();
            } else {
                // Password is incorrect
                echo "<script>alert('Incorrect password');</script>";
                //For testing purposes
                //echo "<script>alert('Incorrect password. Login Field: $loginField, Password: $password, Hashed Password: $hashedPassword');</script>";
            }
        } else {
            // User not found
            echo "<script>alert('User not found');</script>";
        }
    } else {
        // Login field or password not provided
        echo "<script>alert('Please provide both login field and password.');</script>";
    }

    $db->close();
}

?>
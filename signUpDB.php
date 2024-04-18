<?php
session_start();
include 'mylib.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = db_connect();
    if ($error !== null) {
        die("Connection failed: " . $error);
    }

    $displayName = $_POST['displayName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = $db->prepare("SELECT * FROM users WHERE email = ? OR displayName = ?");
    $query->bind_param("ss", $email, $displayName);
    $query->execute();
    $result = $query->get_result();

    if ($result && $result->num_rows > 0) {
        echo "<script>alert('Email or Display Name already registered');</script>";
        $_SESSION = array();
        session_destroy();
    } else {
        $query = $db->prepare("INSERT INTO users (displayName, email, password) VALUES (?, ?, ?)");
        $query->bind_param("sss", $displayName, $email, $hashedPassword); // Use hashed password
        if ($query->execute()) {
            $_SESSION['email'] = $email;
            $_SESSION['displayName'] = $displayName;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Error creating user');</script>";
        }
    }

    $db->close();
}
?>

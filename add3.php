<?php
require_once 'config.php';

if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Select user data by email
    $result = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0){
        $hashedPassword = $row['password']; // Get hashed password from the database

        // Check if the entered password matches the hashed password using password_verify
        if(password_verify($password, $hashedPassword)){
            // Passwords match
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Password is incorrect!')</script>";
        }
    } else {
        // Email is incorrect or not registered
        echo "<script>alert('Email is incorrect or not registered!')</script>";
    }
}
?>
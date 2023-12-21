<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "foodiefix";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into a table named "users" 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, phone_number, address, email, password)
            VALUES ('$fullName', '$phoneNumber', '$address', '$email', '$hashedpassword')";
        
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

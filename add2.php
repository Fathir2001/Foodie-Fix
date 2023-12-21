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

// Insert data into a table named "bookings"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO bookings (people, time, phone, date, name, email)
            VALUES ('$people', '$time', '$phone', '$date', '$name', '$email')";
        
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
        // Redirect to a thank you page or wherever needed
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

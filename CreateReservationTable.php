<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodiefix";

// Create a connection to MySQL using PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL query to create a table with 'phone' as primary key
    $sql = "CREATE TABLE IF NOT EXISTS bookings (
        people INT(6) NOT NULL,
        time VARCHAR(50) NOT NULL,
        phone VARCHAR(20) PRIMARY KEY,
        date DATE NOT NULL,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL
    )";

    // Execute the SQL query
    $conn->exec($sql);
    echo "Table 'bookings' created successfully with 'phone' as primary key";
} catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>

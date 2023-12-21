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
    
    // SQL query to create a table
    $sql = "CREATE TABLE IF NOT EXISTS users (
        full_name VARCHAR(255) NOT NULL,
        phone_number VARCHAR(15) PRIMARY KEY,
        address VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    // Execute the SQL query
    $conn->exec($sql);
    echo "Table 'users' created successfully";
} catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>

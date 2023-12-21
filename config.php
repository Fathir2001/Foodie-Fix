<?php

$server = "localhost";
$user = "root";
$password="";
$name_database = "foodiefix";

$db = mysqli_connect($server,$user,$password,$name_database);

if (!$db){
    die("Failed to connect with database: " . mysqli_connect_error());
}
?>
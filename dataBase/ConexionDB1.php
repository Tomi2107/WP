<?php

$servername = "localhost";
$username = "id18460223_latelier";
$password = "Ll12345_Ll1234";
$database = "id18460223_tut";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>


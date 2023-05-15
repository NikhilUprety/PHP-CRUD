<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demo1db";

$conn = mysqli_connect($host, $username, $password, $dbname);

// // Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
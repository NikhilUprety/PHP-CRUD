<?php


// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demo1db";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Get the form data
$username = $_POST["username"];
$password = $_POST["password"];


// // Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Insert the data into the database
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

//daabse baseko xaina
if (mysqli_query($conn, $sql)) { //yo line le garda baseko
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
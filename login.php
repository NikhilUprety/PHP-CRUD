<?php

include "connect.php";
    // Get the form data
    $un = $_POST["username"];
    $pd = $_POST["password"];

$sql = "SELECT * FROM user WHERE username='$un' AND password='$pd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // echo "Valid User";  
    // echo "<a href='./homepage.html'>click here for valid user</a>";

    header('Location: ./homepage.php');
    exit();

} else {
    // If the username and password are incorrect, display an error message
    echo "Invalid username or password.";
}


// Close the database connection
mysqli_close($conn);
?>
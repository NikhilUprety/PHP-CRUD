<?php
include 'connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE user SET username='$username', password='$password' WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {

    header('Location: ./display.php');
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
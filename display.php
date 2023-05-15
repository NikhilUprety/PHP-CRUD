<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <p>
        User
    </p>
    <?php
    // connection
    include "connect.php";

    // sql query ho
    // $sql = "SELECT * FROM user where password = '123'";
    $sql = "SELECT * FROM user";
    // result ma query pass gare if only there is connection
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    // mysqli_fetch_assoc() yesle chai row wise padera true and false bhanxa
    // true and false ma kaam gareko xa

    // while(int number = 0){
    //     // code
    // }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>";
        echo "<a href='update.php?id=" . $row["id"]."'>Update</a>";
        echo "<button type='button' >Delete</button>";
        echo "</td>";
        echo "</tr>";
    }


    echo "</table>";

    // Close the database connection
    mysqli_close($conn);

    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id='$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $username = $row['username'];
    $password = $row['password'];
}
?>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-3 border p-4">
                <div class="text-center mb-4">
                    <h1 class="display-4">Register</h1>
                </div>
                <!-- <form action="update.php" method="post" > -->
                    <form action="updateProces.php" method="post" onsubmit="return validate()">
                   
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                   
                    <div class="form-group">
                        <div class="text-center">
                            <label for="exampleInputEmail1" class="font h4">Username</label>
                            <?php
                            echo "<input type='text' name='username' class='form-control' id='exampleInputEmail1' value='$username' required>"
                                ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label for="exampleInputPassword1" class="font h4">Password</label>
                            <?php
                            echo "<input type='text' name='password' class='form-control' id='exampleInputPassword1' value='$password'
                            required>";
                            ?>

                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
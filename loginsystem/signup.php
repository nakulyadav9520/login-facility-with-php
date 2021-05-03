<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $successAlert = false;
    $failedAlert = false;
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numberExistRows = mysqli_num_rows($result);
    if ($numberExistRows > 0) {
        $failedAlert = "Email Already Exists";
    } else {
        if (($password == $cpassword)) {
            $sql = "INSERT INTO `users` (`email`, `password`, `date`) VALUES ('$email', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $successAlert = true;
            }
        } else {
            $failedAlert = "Password Do not Match";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Signup</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if ($successAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    if ($failedAlert) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Success!</strong> ' . $failedAlert . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <section class="signup-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 my-4">
                    <div class="comman-heading d-inline-block mb-4">
                        <h1>Sign Up to our Casa Sabine</h1>
                    </div>
                    <form action="signup.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" maxlength="11" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" maxlength="20" class="form-control" name="password" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" maxlength="20" class="form-control" name="cpassword" id="exampleInputPassword1" required>
                            <small id="emailHelp" class="form-text text-muted">Make Sure type the Same Password</small>
                        </div>
                        <button type="submit" class="btn book-btn w-100 mb-3">Signup</button>
                        <button type="reset" class="btn book-btn w-100">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
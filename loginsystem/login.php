<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $successAlert = false;
    $failedAlert = false;
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $exists = false;

    $sql = "Select * from users where email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $numRow = mysqli_num_rows($result);
    if ($numRow == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: welcome.php");
    } else {
        $failedAlert = "Password Do not Match";
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

    <title>Login</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are Loggedin .
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
                        <h1>Login to our Casa Sabine</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" maxlength="11" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" maxlength="20" class="form-control" name="password" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group form-check">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me.</label>
                                </div>
                                <div class="col-lg-6 col-md-6 text-md-right">
                                    <a href="#" class="text-dark text-decoration-none"><strong>Forget Password?</strong></a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn book-btn w-100 mb-3">Login</button>
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
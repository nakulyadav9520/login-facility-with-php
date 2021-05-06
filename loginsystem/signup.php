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
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`email`, `password`, `date`) VALUES ('$email', '$hash', current_timestamp())";
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="comman/images/logo.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front_assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front_assets/css/style.css" />
    <title>Sign Up Casa Sabine</title>
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" maxlength="20" class="form-control" id="firstname" name="first_name" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Surname</label>
                                    <input type="text" maxlength="20" class="form-control" id="lastname" name="last_name" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" maxlength="20" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="mainpassword">Password</label>
                                    <input type="password" maxlength="20" class="form-control" name="password" id="mainpassword" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password</label>
                                    <input type="password" maxlength="20" class="form-control" name="cpassword" id="confirmpassword" required>
                                    <small class="form-text text-muted">Make Sure type the Same Password</small>
                                </div>
                            </div>
                        </div>
                        <label for="birthdate">Date of Birth</label>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <select id="birthdate" name="birth_day" class="form-control overflow-auto">
                                        <option selected value="day">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <select id="birthdate" name="birth_month" class="form-control">
                                        <option selected value="day">Month</option>
                                        <option value="1">Junuary</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <select name="birthday_year" id="birthdate" class="form-control">
                                        <option value="year" selected>Year</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label for="gender">Gender</label>
                        <div class="row mb-3 gender_block">
                            <col-lg-4 class="col-md-4">
                                <div class="form-check pl-0">
                                    <label class="form-check-label pr-2" for="exampleRadios1">Female</label>
                                    <input type="radio"name="exampleRadios" id="exampleRadios1" value="option1">
                                </div>
                            </col-lg-4>
                            <col-lg-4 class="col-md-4">
                                <div class="form-check pl-0">
                                    <label class="form-check-label pr-2" for="exampleRadios2">Male</label>
                                    <input type="radio"name="exampleRadios" id="exampleRadios2" value="option2">
                                </div>
                            </col-lg-4>
                            <col-lg-4 class="col-md-4">
                                <div class="form-check pl-0">
                                    <label class="form-check-label pr-2" for="exampleRadios3">Custom</label>
                                    <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                </div>
                            </col-lg-4>
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
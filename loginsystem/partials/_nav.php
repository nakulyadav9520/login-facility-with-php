
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}
echo '<!DOCTYPE html>
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
  <title>Casa Sabine</title>
</head>

<body>

  <!-- starting Header  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="comman/images/logo.svg" alt="logo" class="img-fluid head-logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accomodation <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>';
          if (!$loggedin) {
            echo '<li class="nav-item">
            <a class="nav-link" href="/loginsystem/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
          </li>';
          }
          if ($loggedin) {
            echo '<li class="nav-item">
            <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
          </li>';
          }
        echo '</ul>
        <div class="contact-block">
          <ul>
            <li class="list-unstyled mb-3">
              <img src="comman/images/mail-icon.png" alt="mail-icon" class="img-fluid mr-3" /><a href="javascript:void(0)">casasabine@greece-climbing.com</a>
            </li>
            <li class="list-unstyled">
              <img src="comman/images/call-icon.png" alt="call-icon" class="img-fluid mr-3" /><a href="javascript:void(0)">+ 43 654 897 52</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Header  -->
  <!-- Bootstrap JS and jquery-->
  <script src="front_assets/js/jquery-3.6.0.min.js"></script>
  <script src="front_assets/js/bootstrap.min.js"></script>
  <!-- js of Changing Header Color on Scroll  -->
  <script>
    window.onscroll = function() {
      myFunction();
    };
    // Get the header
    var header = document.getElementById("header");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
</body>
</html>';
?>
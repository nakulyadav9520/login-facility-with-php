<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="comman/images/logo.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front_assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front_assets/css/style.css" />
    <title>Casa Sabine</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <!-- <h1>Hello Welcome -- <?php echo $_SESSION['email']?></h1> -->
    <section class="banner-section pd-tb d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex order-lg-2 order-md-2">
                    <div class="player align-self-center mr-4">
                        <img src="comman/images/play-button.png" alt="play-button" class="img-fluid" />
                    </div>
                    <div class="p-title align-self-center">
                        <p class="w-para">Watch Casa Sabin video</p>
                        <p class="w-para t-small">04:30</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center order-lg-1 order-md-1">
                    <div class="b-heading">
                        <h1 class="mb-4">Casa Sabine Luxury Villa Kalymnos</h1>
                        <p class="mb-5">
                            Beautifully appointed luxury villa, Your home in Kalymnos
                        </p>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="book-btn btn btn-lg mt-3 d-inline-block text-center">Book
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner_section  -->
    <!-- startng Welcome Section  -->
    <section class="pd-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 description">
                    <div class="comman-heading">
                        <h1>Welcome to Casa Sabine</h1>
                    </div>
                    <p class="comman-para">
                        We would like to Welocme you in our Beautifully appointed luxury
                        villa.Casa Sabine is a modern spacious family home, avaliable
                        directly from the owner or
                        <a href="javascript:void(0);">on AirBnB</a>.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Reprehenderit temporibus voluptatum facilis odio? Sed adipisci
                        neque cum, quo doloremque eaque!
                    </p>

                    <div class="accomodation-block d-flex mb-3">
                        <div class="acco-img">
                            <img src="comman/images/bx-home.png" class="img-fluid mr-2" alt="home-icon" />
                        </div>
                        <div class="acco-info">
                            <h2>Accomodation</h2>
                            <p>
                                modern well appointed and spacious; sleeps 6-9 people
                                depending on group composition; Fast WIFI.
                            </p>
                        </div>
                    </div>
                    <div class="accomodation-block d-flex">
                        <div class="acco-img">
                            <img src="comman/images/location-arrow.png" class="img-fluid mr-2" alt="home-icon" />
                        </div>
                        <div class="acco-info">
                            <h2>Location</h2>
                            <p>
                                Directly under climbing sectors from poets to Grande Grotta;
                                5min from Massouri bars and restaurants; Swimming from
                                secluded beaches nearby.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                            <img src="front_assets/images/location01.jpeg" class="w-100 shadow-1-strong mb-4"
                                alt="location01" />

                            <img src="front_assets/images/location03.jpg" class="w-100 shadow-1-strong mb-4"
                                alt="location03" />
                        </div>

                        <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                            <img src="front_assets/images/location02.jpg" class="w-100 shadow-1-strong mb-4"
                                alt="location02" />

                            <img src="front_assets/images/location04.jpg" class="w-100 shadow-1-strong mb-4"
                                alt="location04" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section  -->
    <!-- startng Holiday Section  -->
    <section class="holiday-section">
        <div class="container">
            <div class="comman-heading d-inline-block mb-4">
                <h1>Enjoy your Holiday!</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="white-block">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#accomodation"
                                    role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#amenities" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#about" role="tab"
                                    aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>

                        <div class="tab-content tb-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="accomodation" role="tabpanel"
                                aria-labelledby="home-tab">
                                <p>
                                    <span><strong>Bedroom 1 & Bedroom 2:</strong></span> One
                                    Double Queen + One Euro Single: With Mosquito Nets; Air
                                    Conditioning Large Terrace with Telendos views
                                </p>

                                <p>
                                    <span><strong>Bedroom 3:</strong></span> Double Queen with
                                    Mosquito Nets; Fan: Climbing Sector Views
                                </p>

                                <p>
                                    <span><strong>Living Room:</strong></span> One Sofa Bed; 1
                                    Travel Cot available upon request
                                </p>

                                <p>
                                    <span><strong>Downstairs Bathroom:</strong></span> Walk - in
                                    shower, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Upstairs Bathroom:</strong></span> Spacious
                                    Bathtub, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Additional areas:</strong></span>Kitchen Laundry. Living / Dining
                                    Room, TV / Couch area
                                </p>

                                <p>
                                    <span><strong>Outdoor living: BBQ area:</strong></span>
                                    Terraces: Beautiful Mountain Garden featuring natural
                                    organic herbs and a viewing platform
                                </p>
                            </div>
                            <div class="tab-pane fade" id="amenities" role="tabpanel" aria-labelledby="profile-tab">
                                <p>
                                    <span><strong>Bedroom 1 & Bedroom 2:</strong></span> One
                                    Double Queen + One Euro Single: With Mosquito Nets; Air
                                    Conditioning Large Terrace with Telendos views
                                </p>

                                <p>
                                    <span><strong>Bedroom 3:</strong></span> Double Queen with
                                    Mosquito Nets; Fan: Climbing Sector Views
                                </p>

                                <p>
                                    <span><strong>Living Room:</strong></span> One Sofa Bed; 1
                                    Travel Cot available upon request
                                </p>

                                <p>
                                    <span><strong>Downstairs Bathroom:</strong></span> Walk - in
                                    shower, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Upstairs Bathroom:</strong></span> Spacious
                                    Bathtub, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Additional areas:</strong></span>Kitchen Laundry. Living / Dining
                                    Room, TV / Couch area
                                </p>

                                <p>
                                    <span><strong>Outdoor living: BBQ area:</strong></span>
                                    Terraces: Beautiful Mountain Garden featuring natural
                                    organic herbs and a viewing platform
                                </p>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="contact-tab">
                                <p>
                                    <span><strong>Bedroom 1 & Bedroom 2:</strong></span> One
                                    Double Queen + One Euro Single: With Mosquito Nets; Air
                                    Conditioning Large Terrace with Telendos views
                                </p>

                                <p>
                                    <span><strong>Bedroom 3:</strong></span> Double Queen with
                                    Mosquito Nets; Fan: Climbing Sector Views
                                </p>

                                <p>
                                    <span><strong>Living Room:</strong></span> One Sofa Bed; 1
                                    Travel Cot available upon request
                                </p>

                                <p>
                                    <span><strong>Downstairs Bathroom:</strong></span> Walk - in
                                    shower, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Upstairs Bathroom:</strong></span> Spacious
                                    Bathtub, Sink and Toilet
                                </p>

                                <p>
                                    <span><strong>Additional areas:</strong></span>Kitchen Laundry. Living / Dining
                                    Room, TV / Couch area
                                </p>

                                <p>
                                    <span><strong>Outdoor living: BBQ area:</strong></span>
                                    Terraces: Beautiful Mountain Garden featuring natural
                                    organic herbs and a viewing platform
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 holiday-price-block">
                    <div class="white-block">
                        <div class="high-season">
                            <h1>High Season<span class="ml-2"><i class="fab fa-gripfire"></i></span></h1>
                            <p>April - June, September - November</p>
                            <p class="p-1 para-bg">
                                <span>20,-€ /incl. additional person</span>
                            </p>
                            <p class="p-1 para-bg"><span>170,-€ /incl.6 persons</span></p>
                        </div>
                        <div class="low-season">
                            <h2>Low Season</h2>
                            <p class="p-0">July-August</p>
                            <p class="p-1 para-bg">
                                <span>20,-€ /incl. additional person</span>
                            </p>
                            <p class="p-1 para-bg"><span>170,-€ /incl.6 persons</span></p>
                            <p class="top-brdr"></p>
                            <p class="p-1 para-bg"><span>70,-€ /Cleaning Fee</span></p>
                            <p>
                                Ask for special long term winter hibernation rates between
                                December and end of February
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Holiday Section  -->
    <!-- startng Booking Section  -->
    <section class="booking-section">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 col-md-6 booking-info">
                    <h2>Book your stay via Contact Us</h2>
                    <p class="m-0">
                        Use to contact link to ask for availabiliy.We promise you a quick
                        responese.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="#" class="book-btn btn btn-lg mt-3 d-inline-block text-center">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Booking Section  -->
    <!-- startng Gallery Section  -->
    <section class="gallery_section pd-tb">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="comman-heading d-inline-block mb-4">
                        <h1>Gallery</h1>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <img src="front_assets/images/slider01.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image1" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <img src="front_assets/images/slider02.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image2" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <img src="front_assets/images/slider03.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image3" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">
                            <img src="front_assets/images/slider04.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image4" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4">
                            <img src="front_assets/images/slider05.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image5" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5">
                            <img src="front_assets/images/slider06.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image6" />
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6">
                            <img src="front_assets/images/slider07.jpg"
                                class="d-lg-block d-md-block d-none w-100 img-fluid" alt="slider image7" />
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="front_assets/images/slider01.jpg" class="d-block w-100 img-fluid"
                                alt="slider image1" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider02.jpg" class="d-block w-100 img-fluid"
                                alt="slider image2" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider03.jpg" class="d-block w-100 img-fluid"
                                alt="slider image3" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider04.jpg" class="d-block w-100 img-fluid"
                                alt="slider image4" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider05.jpg" class="d-block w-100 img-fluid"
                                alt="slider image5" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider06.jpg" class="d-block w-100 img-fluid"
                                alt="slider image6" />
                        </div>
                        <div class="carousel-item">
                            <img src="front_assets/images/slider07.jpg" class="d-block w-100 img-fluid"
                                alt="slider image7" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section  -->
    <!-- starting Footer-section -->
    <section class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 form_block mt-5">
                    <div class="comman-heading d-inline-block my-3">
                        <h1>Book Now!</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text bg-transparent border-right-0"><i
                                                    class="far fa-user"></i></div>
                                        </span>
                                        <input type="text" class="form-control border-left-0" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text bg-transparent border-right-0"><i
                                                    class="far fa-envelope"></i></div>
                                        </span>
                                        <input type="email" class="form-control border-left-0" placeholder="Email*" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text bg-transparent border-right-0"><i
                                                    class="fas fa-phone-alt"></i></div>
                                        </span>
                                        <input type="tel" class="form-control border-left-0"
                                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text bg-transparent border-right-0"><i
                                                    class="far fa-user"></i></div>
                                        </span>
                                        <input type="text" class="form-control border-left-0"
                                            placeholder="Number of Person*" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Arrival - Departure" />
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div
                                                class="pd_top input-group-text bg-transparent border-right-0 align-items-baseline">
                                                <i class="far fa-comment-alt"></i>
                                            </div>
                                        </span>
                                        <textarea class="form-control border-left-0" rows="3"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn book-btn w-100 btn-block">
                                        Block level button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row foot_location_block">
                <div class="col-lg-5 col-md-5">
                    <div class="comman-heading d-inline-block mb-3">
                        <h1>Location</h1>
                    </div>
                    <p class="heighlighted_para">
                        <strong>Casa Sabine,Sesame Street North, Armeos, Kalymnos 85200
                            Greece</strong>
                    </p>
                    <p>Directly under climbing sectors from poets to Grande Grotta</p>
                </div>
                <div class="col-lg-7 col-md-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.385810593281!2d26.937595415482747!3d37.00059126409315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bdef350bf4f82d%3A0x5031bad44b3e4300!2sCasa%20Sabine%2C%20Luxury%20Villa!5e0!3m2!1sen!2sin!4v1619266595201!5m2!1sen!2sin"
                        width="100%" height="350" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="foot_bottom">
            <div class="container">
                <div class="foot_bottom_heading">
                    <h2 class="mb-0"><a href="#">Casa Sabine</a></h2>
                    <p>&copy; <span>2020</span> All rights reserved.</p>
                </div>
                <div class="row bottom_contact_block pt-3">
                    <div class="col-lg-3 col-md-3 socialmedia_icon_block">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link pr-4 pl-0" href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pr-4 pl-0" href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pr-4 pl-0" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="contact-block">
                            <ul class="nav">
                                <li class="nav-item list-unstyled mr-3 mb-3">
                                    <img src="comman/images/mail-icon.png" alt="mail-icon" class="img-fluid mr-3" /><a
                                        href="javascript:void(0)">casasabine@greece-climbing.com</a>
                                </li>
                                <li class="nav-item list-unstyled mb-3">
                                    <img src="comman/images/call-icon.png" alt="call-icon" class="img-fluid mr-3" /><a
                                        href="javascript:void(0)">+ 43 654 897 52</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 privacy_policy_block text-lg-right">
                        <p class="mb-1"><a href="#">Privacy Policy</a></p>
                        <p class="mb-1"><a href="#">Sitemap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Footer-section -->
    <!-- Bootstrap JS and jquery-->
    <script src="front_assets/js/jquery-3.6.0.min.js"></script>
    <script src="front_assets/js/bootstrap.min.js"></script>
    <!-- js of Changing Header Color on Scroll  -->
    <script>
        window.onscroll = function () {
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

</html>
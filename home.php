<?php

SESSION_START();

if (isset($_SESSION['ses_useremail']) === false){
  header("Location: index.php?logfirst");
}
else if (isset($_REQUEST['logout']) === true){
  session_destroy();
  header("Location: index.php?logout");
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kusina </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="home.php">Kusina</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Specialties</a></li>
            <li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Stories</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="?logout" class="nav-link">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
<!-- ---------Heading--------- -->

    <section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <div class="text mt-md-5">
                <h1 class="mb-4">Eat Healthy <br> and Natural Foods</h1>
                <?php
                echo "<p>Masarap ang pagkain kung masustansiya na, natural pa.</p>";
                ?>
                <div class="thumb mt-4 mb-3 d-flex">
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu1.jpg);"></div>
                    <h4>Filipino Organic Beef</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu2.jpg);"></div>
                    <h4>Filipino Shrimp Steamed</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu3.jpg);"></div>
                    <h4>Filipino Milky Calamares</h4>
                  </a>
                </div>
                <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <div class="text mt-md-5">
                <h1 class="mb-4">We Love <br> Delicious Foods</h1>
                <?php
                echo "<p> Sino ba naman ang hindi magmamahal kung masarap ang pagkain? </p>";
                ?>
                <div class="thumb mt-4 mb-3 d-flex">
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu1.jpg);"></div>
                    <h4>Filipino Organic Beef</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu2.jpg);"></div>
                    <h4>Filipino Shrimp Steamed</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                    <div class="img" style="background-image: url(images/menu3.jpg);"></div>
                    <h4>Filipino Milky Calamares</h4>
                  </a>
                </div>
                <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
<!-- ------------Statistics------------ -->

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="18">0</strong>
                    <span>Years of Experienced</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="20000">0</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="564">0</strong>
                    <span>Finished Projects</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="300">0</strong>
                    <span>Working Days</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- --------Customers Review--------- -->

    <section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <?php
                    echo "<p class='mb-4'>Please thank your team for their professional, efficient and friendly service on Sat night.  The chefs smashed it and the drinks flowed freely!  Everyone was impressed and were quite taken with how cost effective it was to have Kusina do what you did.</p>";
                    echo "<p class='name'>Ken Suson</p>";
                    ?>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <?php
                    echo "<p class='mb-4'>We cannot thank you and the team for all your hard work! The night was just perfect and we received lots of complements on the food! </p>";
                    echo "<p class='name'>Pablo Nase</p>";
                    ?>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <?php
                    echo "<p class='mb-4'>The restaurant is always well kept and very clean. The staff is friendly and the bartender knows how to make good drinks. One of the best parts about the Kusina is the food is consistently great!!!!! </p>";
                    echo "<p class='name'>Stellvester Ajero</p>";
                    ?>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <?php
                    echo "<p class='mb-4'>Excellent food and the best service around! Great place to eat. We go there every chance we can.</p>";
                    echo "<p class='name'>Josh Cullen</p>";
                    ?>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                   <?php
                    echo "<p class='mb-4'>Food has been quite good! I am working my way thru the menu items I like and so far everything I've tried has been excellent!!! Give this new venue a try!! You will be glad you did.</p>";
                    echo "<p class=name'>Justin de Dios</p>";
                    ?>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kusina</h2>
                  <?php
                    echo "<p>Nothing brings people together like good food.</p>";
                    ?>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                </a>
              </div>
              <div class="thumb d-flex">
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php
SESSION_START();

$acc_useremail = "cardodalisay0@gmail.com";
$acc_userpassword = "cardongBakal";

$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if(isset($_REQUEST['login']) === true){
  if($_REQUEST['user-email'] != $acc_useremail) {
    header("Location: ".$url_add."?notexist");
  }
  else if ($_REQUEST['user-email'] == $acc_useremail && $_REQUEST['user-password'] != $acc_userpassword){
    header("Location: ".$url_add."?wrongpass");
  }
  else if ($_REQUEST['user-email'] == $acc_useremail && $_REQUEST['user-password'] == $acc_userpassword){
    header("Location: ".$url_add."?success");

    $_SESSION['ses_useremail'] = $acc_useremail;
    $_SESSION['ses_password'] = $acc_userpassword;
  }
}


  
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kusina Hustler</title>
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
    
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Kusina Hustler</h1>
            <h5 class="font-white"> Log in to Our Website </p>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5" style="margin: auto;">
            <div class="heading-section ftco-animate mb-5">
              <span class="subheading">Book a Table</span>
              <h2 class="mb-4">Make Reservation</h2>
            </div>
            <form name="loginform" method="POST" action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="user-email" class="form-control" placeholder="Your Email">

                    <?php

                    if(isset($_REQUEST['notexist']) === true) {
                      echo "<div class='alert alert-danger' role='alert'> Username does not exist.. </div>";
                    }
                    else if (isset($_REQUEST['wrongpass']) === true){
                      echo "<div class='alert alert-warning' role='alert'> Incorrect Password </div>";
                    }
                    else if(isset($_REQUEST['success']) === true) {
                      echo "<div class='alert alert-success' role='alert'> Redirecting... </div>";
                      header ("Refresh: 4; url=home.php");
                    }
                    else if(isset($_REQUEST['logout']) === true){
                      echo "<div class='alert alert-info' role='alert'> Thank You... </div>";
                    }
                    else if (isset($_REQUEST['logfirst']) === true) {
                      echo "<div class='alert alert-info' role='alert'> Please Login first. </div>";
                    }
                    else if(isset($_SESSION['ses_useremail']) === true){
                      echo "<div class='alert alert-warning' role='alert'> You are still logged in. Please <a href='home.php'> click here </a> to proceed. </div>";
                    }
                                          ?>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="user-password" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" name="login" value="Log In" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
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
              <p>Far far away, behind the word mountains, there live the blind texts.</p>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kusina Hustler<i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

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
    <title>Kusina - Free Bootstrap 4 Template by Colorlib</title>
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
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Kusina</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Specialties</a></li>
	        	<li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>
	        	<li class="nav-item active"><a href="blog.php" class="nav-link">Stories</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="?logout" class="nav-link">Log Out</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Stories</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
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
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
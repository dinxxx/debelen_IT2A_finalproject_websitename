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
	        	<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">Welcome to Kusina Restaurant</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<?php 
              echo "<p>The Kusina Hustler story began in 2003 with two friends, Andrei Monroyo and Geraldine de Belen, and their shared passion for good food.  In the beginning, Andrei stood at the helm of Kusina's operations while Geraldine created recipes for their locally-produced chorizos and smoked meats alongside his corporate job, but soon word of Kusina's quality had spread and Geraldine decided to go full-time with their food business.<br><br>  Opening a restaurant was not exactly their original plan, but in a rather fortuitous turn of events, the building where they rented their first office had a ground floor space that housed a café and the building's owner asked if they were interested in partnering with them to open a restaurant there. Andrei and Geraldine sensed this as an opportunity to spread their passion for excellent food and drinks. After creating a menu of familiar Filipino foods and some newer creations inspired by their travels around the Philippines, Kusina Hustler opened its doors in Marinduque in June 2015. Focusing on serving great food and drinks made with the highest-quality ingredients in a friendly, fuss-free atmosphere, Kusina Hustler soon established a name for itself as a favourite watering hole in the neighbourhood. <br><br>This same spirit of serving quality food and drinks expanded from their southern neighborhood to their newest branch which opened in December 2016 in Taguig City. Today, Kusina Hustler continues to win over discerning palettes from all around the metro as it continues to serve Filipino dishes favourites as well as dreaming up new flavour creations, inviting everyone to come and enjoy a good meal with family and friends.</p>";
              ?>
							<h3 class="mt-5">Special Recipe</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
	            		<h4>Lil Shrimpy</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
	            		<h4>My Manokish</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
	            		<h4>Beef Me</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- ------footer------- -->

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
                <li class="ftco-animate"><a href="https://twitter.com/?lang=en"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="http://facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
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
              <?php
              echo "<p>Far far away, behind the word mountains, far from the countries.</p>";
              ?>
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
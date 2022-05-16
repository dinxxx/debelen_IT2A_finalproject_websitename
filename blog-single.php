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
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">A wonderful day to see you relax and chill while you wait.</h2>

            <?php
            echo "<p>Relaxation is a state of calmness. It is being free of worry in the mind, and free of tension in the body. It is having a sense of openness to one’s outside environment and an ease within oneself. When we are feeling stressed, relaxation is the space we give ourselves to let go of that which is gripping us, opening us up to more spaciousness in our body, mind and heart</p>";
            ?>

            
            <h2 class="mb-3 mt-5">Important Meal Day</h2>

            <?php
            echo "<p>It probably goes without saying that here at Kusina Hustler Restaurant we are huge fans of the first meal of the day. For years, the general belief has been breakfast is essential to starting your day right and should never be skipped. However, recent studies are suggesting that breakfast might not be particularly important to overall health, and dare we say it, may not even be necessary.  It’s time to end this debate once and for all.</p>";
            ?>
            <p>
            
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <?php
            echo "<p>A leading argument in favor of breakfast says eating shortly after waking up kickstarts your metabolism. However, all bodies are different, and routines vary. People who eat breakfast everyday should continue to do so. For those who skip it; it may work best with their schedule, but they must allocate those extra calories into the rest of their meals.<br><br>Do you remember how often teachers would stress eating breakfast before a big test? That’s because breakfast is the perfect way to jumpstart your day and wake up your mind. Eating a meal in the morning replenishes the glucose that your body lost overnight resulting in an energy boost. When you go without breakfast, your body is starved for energy which may result in low performance and less healthy food choices for the rest of the day. Many common breakfast foods contain healthy nutrients that can power your brain and improve performance.</p>";
            ?>
          
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Food</a>
                <a href="#" class="tag-cloud-link">Wine</a>
                <a href="#" class="tag-cloud-link">Drink</a>
                <a href="#" class="tag-cloud-link">Dish</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/person1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>Ken Suson</h3>
                <?php
                echo "<p>This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.</p>";
                ?>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">5 Feedbacks</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person2.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Pablo Nase</h3>
                    <div class="meta mb-2">January 03, 20120 at 2:31pm</div>
                    <?php
                echo "<p>We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit.</p>";
                    ?>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person3.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Stellvester Ajero</h3>
                    <div class="meta mb-2">January 5, 2019 at 5:21pm</div>
                    <?php
                     echo "<p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.</p>";
                     ?>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person4.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Josh Cullen</h3>
                        <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                        <?php
                        echo "<p>This place is great! Atmosphere is chill and cool but the staff is also really friendly. They know what they’re doing and what they’re talking about, and you can tell making the customers happy is their main priority. Food is pretty good, some italian classics and some twists, and for their prices it’s 100% worth it.</p>";
                        ?>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person5.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Justin De Dios</h3>
                            <div class="meta mb-2">March 03, 2021 at 6:00pm</div>
                            <?php
                            echo "<p>It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make great recommendations.</p>";
                            ?>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Leave a comment</h3>
                <form action="#" class="p-4 p-md-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                <li><a href="#">Breakfast <span>(6)</span></a></li>
                <li><a href="#">Lunch <span>(8)</span></a></li>
                <li><a href="#">Dinner <span>(2)</span></a></li>
                <li><a href="#">Desserts <span>(2)</span></a></li>
                <li><a href="#">Drinks <span>(2)</span></a></li>
                <li><a href="#">Wine <span>(2)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">The night the I want, will forever love.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 9, 2015</a></div>
                    <div><a href="#"><span class="icon-person"></span> Ken Suson </a></div>
                    <div><a href="#"><span class="icon-chat"></span> 5</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Just bought beverages for motivation.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>March 10, 2012</a></div>
                    <div><a href="#"><span class="icon-person"></span> Pablo Lomo</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 3</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_5.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">It's a yay! More wines to come</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> November 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Josh Copo</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 12</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">Dish</a>
                <a href="#" class="tag-cloud-link">Food</a>
                <a href="#" class="tag-cloud-link">Lunch</a>
                <a href="#" class="tag-cloud-link">Menu</a>
                <a href="#" class="tag-cloud-link">Dessert</a>
                <a href="#" class="tag-cloud-link">Drinks</a>
                <a href="#" class="tag-cloud-link">Sweets</a>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">January 2019 <span>(20)</span></a></li>
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Kusina</h3>
              <?php
              echo "<p>All you need is here. Kaya huwag ka na tumingin pa sa iba.</p>";
              ?>
            </div>
          </div><!-- END COL -->
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
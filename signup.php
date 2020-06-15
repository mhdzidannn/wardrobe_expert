<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
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
	<style>
.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
* {
  box-sizing: border-box;
}

.column1 {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

</style>
</head>
<br>

<body>


	<div class="container">
	<div class="alert alert-success">
    <?php
                    if (isset($_GET["signup"])) {
                        if ($_GET["signup"] == 'success') {
                            echo "<h5><b><i><font color=green  size='5pt'>Your account has been successfully registered.</font></i></b></h5>";
                            echo "<a href='login.php' ><font color=black  size='3pt'>Login Here </font></a><br>";
                        }
                    }

 ?>

  </div>
     
          	
				
   
        
      </div>
	<br><br>


 			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
							<h2> Please Sign Up Here</h2>
							<div class="alert alert-warning" role="alert">
							<p>Please fill in this form to create an account. Required information is marked with an asterisk (*).</p>
							</div><br>

							<form action="processSignup.php" method="post">
								<div class="form-group">
									<label >*Name:</label>
									<input name="name" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label >*Phone Number:</label>
									<input name="phonenum" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label >*Address:</label>
									<input name="address" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label >*Username:</label>
									<input name="username" type="text" class="form-control" required>
									<?php
														if (isset($_GET['error'])) {
															if ($_GET['error'] == 'takenuser' || $_GET['error'] == 'takenuseremail') {
																echo "Username is already taken";
															}
														}
									?>
									</div>
									
									<div class="form-group">
										<label >*Email:</label>
										<input name="email" type="email" class="form-control" required>
											 <?php
															if (isset($_GET['error'])) {
																if ($_GET['error'] == 'takenemail' || $_GET['error'] == 'takenuseremail') {
																	echo "Email is already registered";
																}
															}
											?>
									</div>
									<div class="form-group">
										<label >*Password:</label>
										<input name="pass" type="password" class="form-control" required>
									</div>
									<div class="form-group">
										<label for=>*Repeat Password:</label>
										<input name="repeatpass" type="password" class="form-control" required>
									</div>


								<br>
								<button name="but" type="submit" class="btn btn-info" id="newSubmit">Sign Up</button> <a href='welcome.php'>Back to main page</a><br>
														   
								</div>
							</div>   
							<br><br>
	</div>

<footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
			</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
             <h2 class="ftco-heading-2">Wardrobe Expert</h2>
              <p>Experience Our Service</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                 <li><a href="#" class="py-2 d-block">Book Service</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Delivery Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	               <li><span class="icon icon-map-marker"></span><span class="text">203 Petaling Jaya, Selangor, MLYS</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+603 4056 7890</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">wardrobe_expert@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
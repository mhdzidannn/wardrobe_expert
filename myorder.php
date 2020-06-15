<?php
session_start();
include_once('config.php');
?>
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
	<br>
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

<main>



<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="main.php" class="nav-link"><font color=brown  size='2pt'><b><i>Book Service</b></i></font></a></li>
	        <li class="nav-item"><a href="profile.php" class="nav-link" ><font color=brown  size='2pt'><b><i>Profile</b></i></font></a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link"><font color=brown  size='2pt'><b><i>Logout</b></i></font></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <br><br><br><br>

	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="monospace" style="color:DarkCyan">My Order(s) </h2>  <br><br>
							<main>
                <div>
                    <div>
                              
                        <?php
                         
                                $query = "SELECT Date,Article,Weight,Total,Service,PaymentMethod FROM myorder";
                                $result = $conn->query($query);							
								if ($result->num_rows > 0){	
								echo '<table width=100% cellpading=10 cellspacing=0 border=1>';
								echo '<tr><td><b>Date & Time</b></td><td><b>Article</b></td><td><b>Approximate Weight(kg)</b></td><td><b>Total RM</b></td><td><b>Service</b></td><td><b>Payment Method</b></td></tr>';
								while($row = $result->fetch_assoc()) {
									echo '<tr>';
									echo '<td>' . $row['Date'] . '</td>';
									echo '<td>' . $row['Article'] . '</td>';
									echo '<td>' . $row['Weight'] . '</td>';
									echo '<td>' . $row['Total'] . '</td>';
									echo '<td>' . $row['Service'] . '</td>';
									echo '<td>' . $row['PaymentMethod'] . '</td>';
									echo '</tr>';
									}
								echo '</table>';
								}
 								else {
								echo "0 results";
								}
                        ?>
                        
                </div>
            </main>
                </div>
            </main>
					</div>
				</div>   
				<br><br>
	</div>

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

</html>

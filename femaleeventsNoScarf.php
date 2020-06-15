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
  font-family: "Lucida Console", Courier, Rage Italic;
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

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="profile.php" class="nav-link" ><font color=#F56A57  size='2pt'><b><i>My Profile</b></i></font></a></li>
	          <li class="nav-item"><a href="feedback.php" class="nav-link"><font color=#F56A57 size='2pt'><b><i>Feedback</b></i></font></a></li>
			 <li class="nav-item"><a href="logout.php" class="nav-link"><font color=#F56A57  size='2pt'><b><i>Logout</b></i></font></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <br><br><br><br> <br>


	<div class="container">
	<div class="alert alert-success">
     <?php
                    if (isset($_GET["order"])) {
                        if ($_GET["order"] == 'success') {
                            echo "<h5><b><i><font color=green  size='5pt'>Your order has been placed.</font></i></b></h5>";
                        }
                    }

  ?>

  </div>
     
          	
				
   
        
      </div>
	<br><br>
<body >


	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
					<div class="w-100"><h3 class="Rage Italic" style="color:#F56A57"> <b>Female - Choose Your Event (Without Scarf)<b/> </h3></div><br> <br>
								 
													<div class="row1">

						  <div class="column1">
							<img src="basic.png" alt="Snow" style="width:30%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/dinner.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>


						  <div class="column1">
							<img src="women_denim.png" alt="Forest" style="width:38%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/profile.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>


						  <div class="column1">
							<img src="dating.jpg" alt="Mountains" style="width:40%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/profile.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>


						   <div class="column1">
							<img src="corporate.png" alt="Mountains" style="width:40%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/profile.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>


                          <div class="column1">
							<img src="assetsKM/preferences/hijabs.png" alt="Mountains" style="width:55%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/profile.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>


                          <div class="column1">
							<img src="female.png" alt="Mountains" style="width:40%"><br><br>
							<button onclick="location.href = '/wardrobe_expert/profile.php';" 
              id="myButton" 
              class="btn btn-success" ><font 
              color=white  
              size='3pt'>
              <b>Casual (Class/Shopping)</b>
              </font>
              </button>
						  </div>

              
						</div>
													<main>
										<div>
												  <div>
											
										</div>
									</main>
										</div>
									</main>
											</div>
										</div>   
										<br><br>
	</div>



	 <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		
	          	</div>
				<br><br>
	          	
										</div>
									</div>
								</div>
	          	</div>
<br><br>

<script>
function AutoCalc(obj) {
           var total = 6;

           if (isNaN(obj.value)) {
               alert("Please enter a number :(");
               obj.value = '';
               return false;
           }
           else {

               var textBox = new Array();
               textBox = document.getElementsByTagName('input')

               for (i = 0; i < textBox.length; i++) {
                   if (textBox[i].type == 'text') {
                       var inputVal = textBox[i].value;
                       if (inputVal == '')
                           inputVal = 0;
                       if (textBox[i].id == 'weight') {
                           total = total * parseInt(inputVal);
                       }
                   }
               }
               document.getElementById('total').value = total;
           }
       }

</script>
</div>
</form>
</div>

</main>
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
  <!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "5edb386367e6000007c73937";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
</body>
</html>
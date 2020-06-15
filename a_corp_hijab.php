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

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="main.php" class="nav-link" ><font color=#F56A57  size='2pt'><b><i>Outfit Suggestion</b></i></font></a></li>
	          <li class="nav-item"><a href="profile.php" class="nav-link"><font color=#F56A57  size='2pt'><b><i>My Profile</b></i></font></a></li>
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Bahnschrift SemiBold, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #F56A57;
  font-size: 15px;
  padding: 8px 12px;
  position: center;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

.gallery {list-style: none}
.gallery li {list-style: none; display: inline;}
.gallery img { vertical-align: middle}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>Here is our suggestions : </h2>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="assetsKM/femaleHijabDinner/reddress.png" style="width:48%">
  <div class="text">Dress</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="assetsKM/femaleHijabDinner/heels.png" style="width:50%">
  <div class="text">Heels</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="assetsKM/femaleHijabDinner/hijab.png" style="width:48%">
  <div class="text">Earings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="assetsKM/femaleHijabDinner/reddress.png" style="width:48%">
  <div class="text">Earings</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<br><br>
<h2>Colour pallete suggestion: </h2>
<div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">

              <ul class="gallery">
    <li>Pallete Suggestion 1  : <img src="/wardrobe_expert/color/c8.jpg" style="width:720px;height:300px;" alt="1"/><br/><br/><br/></li>
    <li>Pallete Suggestion 2  : <img src="/wardrobe_expert/color/c10.jpg" style="width:720px;height:300px;" alt="2"/><br/><br/><br/></li>
    <li>Pallete Suggestion 3  : <img src="/wardrobe_expert/color/c5.jpg" style="width:720px;height:300px;" alt="3"/><br/><br/><br/></li>
              </ul>
				<br>
        <br> 
											</div>





<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 


</body>
</html> 

						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
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
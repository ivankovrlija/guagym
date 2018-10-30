<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
    <meta name="description" content="Guagym is the place where you will become and stay healthy">
      <meta name="author" content="Ivan Kovrlija, Aleksandar Grujic i Uros Zeravica">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onscroll="changeBackground()">
  <div id="header_background">

	<div class="container">
		<?php include "header.php" ?>
	</div>
	</div>
	<div class ="heroG">
	    <div class="container">	       	        
	        <h1>Contact Us</h1>	                
	    </div>    
	 </div>
	<div class="contact_main">
		<div class="container">
			<div class="contact_left">
			
				<div class="side_top">
						<h3>How to Find Us</h3>
						<p>We are located in the city center and is easy to reach with any kind of public transport. Use our map to find the nearest gym.</p>
					</div>
					<div class="side_bot">
						<h4>GUAgym OFFICE 1</h4>
						<p>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
						<p>Telephone +1 800 603 6035</p>
						<p>E-mail: mail@demolink.org</p>
					</div>
				
			</div>
			<div class="contact_right">
				
					<h3>Get in touch</h3>
				
				<form action="" method="get" accept-charset="utf-8">
					<div class="input_container">
						<div class="input">
							<label>Name:<br><input type="text" name="name" value=""></label>
						</div>
						<div class="input">
							<label>Email:<br><input type="text" name="mail" value=""></label>
						</div>
					</div>
					
					<div class="message">
						<label>Message:<br><textarea name=""  rows="10" cols="80"></textarea></label>
					</div>
					<div class="submit">
						<input type="submit" name="message" value="SEND" class="read_more">
						<input type="reset" name="reset" value="RESET" class="read_more">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="map">
			<div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV6J6X-doSyGWQjQfgXtUb2glXBuEmC8k&callback=initMap">
    </script>

	</div>



	<div class="footer">
        <div class="overlay">
          <div class="container">
            <?php include_once("footer.php"); ?>
          </div>
        </div>
      </div>
</body>
<script src="js/home.js"></script>
</html>
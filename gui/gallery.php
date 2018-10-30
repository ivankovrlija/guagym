<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="description" content="Guagym is the place where you will become and stay healthy">
      <meta name="author" content="Ivan Kovrlija, Aleksandar Grujic i Uros Zeravica">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUAGYM</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script src="js/lightbox-plus-jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body onscroll="changeBackground()">
  <div id="header_background">
	<div class="container">
	<?php 
		include "header.php";
	?>
	</div>
  </div>
		<div class ="heroG">
	    	<div class="container">
	        	<h1>Our Gallery</h1>
	        </div>    
	    </div>
	    <div id="gallery">
    	<div class="container">
    		<div id="main">
    			<a href="images/1.jpg" data-lightbox="mygallery"><img src="images/1.jpg" alt=""></a>    
	        	<a href="images/2.jpg" data-lightbox="mygallery"><img src="images/2.jpg" alt=""></a>    
	        	<a href="images/3.jpg" data-lightbox="mygallery"><img src="images/3.jpg" alt=""></a>    
	        	<a href="images/4.jpg" data-lightbox="mygallery"><img src="images/4.jpg" alt=""></a>    
	        	<a href="images/promotion1.jpg" data-lightbox="mygallery"><img src="images/promotion1.jpg" alt=""></a>    
	        	<a href="images/promotion2.jpg" data-lightbox="mygallery"><img src="images/promotion2.jpg" alt=""></a>    
	        	<a href="images/femaleslim.jpg" data-lightbox="mygallery"><img src="images/femaleslim.jpg" alt=""></a>    
	        	<a href="images/femalefat.jpg" data-lightbox="mygallery"><img src="images/femalefat.jpg" alt=""></a>    
	        	<a href="images/maleslim.jpg" data-lightbox="mygallery"><img src="images/maleslim.jpg" alt=""></a>    
	        	<a href="images/malefat.jpg" data-lightbox="mygallery"><img src="images/malefat.jpg" alt=""></a>    
	        	<a href="images/programs_cover.jpg" data-lightbox="mygallery"><img src="images/programs_cover.jpg" alt=""></a>    
	        	<a href="images/purpose.jpg" data-lightbox="mygallery"><img src="images/purpose.jpg" alt=""></a>  
    		</div>
        </div>
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
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Guagym is the place where you will become and stay healthy">
  		<meta name="author" content="Aleksandar Grujic i Ivan Kovrlija">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GUAGYM</title>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body onscroll="changeBackground()">
			<div class="header">
				<img class="slides animate-right" src="images/1.jpg" alt="background">
				<img class="slides animate-right" src="images/2.jpg" alt="background">
				<img class="slides animate-right" src="images/3.jpg" alt="background">
				<img class="slides animate-right" src="images/4.jpg" alt="background">
				<div class="slogan">
					<div class="slogans animate-bottom">
						<h1>Get fit &amp; healthy.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatem.Lorem ipsum dolor sit amet,amet summ.</p>
						<br>
						<a href="login.php" class="read_more">GET MEMBERSHIP</a>
					</div>
					<div class="slogans animate-bottom">
						<h1>Fitness wonder.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatem.Lorem ipsum dolor sit amet.</p>
						<br>
						<a href="login.php" class="read_more">READ MORE</a>
					</div>
					<div class="slogans animate-bottom">
						<h1>Long life Fitness.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatem.</p>
						<br>
						<a href="login.php" class="read_more">READ MORE</a>
					</div>
					<div class="slogans animate-bottom">
						<h1>Too Fit to Quit.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatem, consectetur adipisicing elit.</p>
						<br>
						<a href="login.php" class="read_more">READ MORE</a>
					</div>
				</div>
				<button class="btn" onclick="plusIndex(-1)" id="previous">PREV</button>
				<button class="btn" onclick="plusIndex(1)" id="next">NEXT</button>
				<div id="header_background">
				<div class="container">
					<?php include_once("header.php"); ?>
				</div>
				</div>
			</div>
			<div class="ads">
				<div class="container" id="promotions">
				<div class="promotion">
					<div class="promotion_content" id="promo">
						<h2>25% Discount</h2>
						<p>*If You Register Today</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="promotion_image"><img src="images/promotion1.jpg" alt=""></div>
				</div>
				<div class="promotion">
					<div class="promotion_image"><img src="images/promotion2.jpg" alt=""></div>
					<div class="promotion_content" id="promotion_content">
						<h2>Fitness Class</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, vero.</p>
						<p>from &#36;10/day </p>
					</div>
				</div>
				</div>
			</div>
			<div class="all_programs">
				<div class="container" id="programs_offer">
					<div class="programs2">
						<img src="images/maleslim.jpg" alt="program 1">
						<h1><span class="pink">&#36;60</span><span class="gray"> /Month</span></h1>
						<h2>Men's slim</h2>
						<ul>
							<li class="gray"><span class="pink">&#9679;</span> Donec molestie tincidunt</li>
							<li class="gray"><span class="pink">&#9679;</span> Sit amet aliquet auctor nisi</li>
							<li class="gray"><span class="pink">&#9679;</span> Dut purus eleifentincid</li>
						</ul>
						<br>
						<a href="programs.php" class="read_more">ENROLL NOW</a>
					</div>
					<div class="programs2">
						<img src="images/femaleslim.jpg" alt="program 2">
						<h1><span class="pink">&#36;80</span><span class="gray"> /Month</span></h1>
						<h2>Women's slim</h2>
						<ul>
							<li class="gray"><span class="pink">&#9679;</span> Donec molestie tincidunt</li>
							<li class="gray"><span class="pink">&#9679;</span> Sit amet aliquet auctor nisi</li>
							<li class="gray"><span class="pink">&#9679;</span> Dut purus eleifentincid</li>
						</ul>
						<br>
						<a href="programs.php" class="read_more">ENROLL NOW</a>
					</div>
					<div class="programs2">
						<img src="images/malefat.jpg" alt="program 3">
						<h1><span class="pink">&#36;60</span><span class="gray"> /Month</span></h1>
						<h2>Men's fat</h2>
						<ul>
							<li class="gray"><span class="pink">&#9679;</span> Donec molestie tincidunt</li>
							<li class="gray"><span class="pink">&#9679;</span> Sit amet aliquet auctor nisi</li>
							<li class="gray"><span class="pink">&#9679;</span> Dut purus eleifentincid</li>
						</ul>
						<br>
						<a href="programs.php" class="read_more">ENROLL NOW</a>
					</div>
					<div class="programs2">
						<img src="images/femalefat.jpg" alt="program 4">
						<h1><span class="pink">&#36;80</span><span class="gray"> /Month</span></h1>
						<h2>Women's fat</h2>
						<ul>
							<li class="gray"><span class="pink">&#9679;</span> Donec molestie tincidunt</li>
							<li class="gray"><span class="pink">&#9679;</span> Sit amet aliquet auctor nisi</li>
							<li class="gray"><span class="pink">&#9679;</span> Dut purus eleifentincid</li>
						</ul>
						<br>
						<a href="programs.php" class="read_more">ENROLL NOW</a>
						<br><br><br>
					</div>
				</div>
			</div>
			<div class="working_hours container">
				<h1>Working Hours</h1>
				<p class="gray">Monday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Thuesday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Wednesday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Thursday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Friday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Saturday<span>08:00 - 21:00</span></p>
				<hr>
				<p class="gray">Sunday<span>08:00 - 21:00</span></p>
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
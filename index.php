<?php
// wamc index
//session_start();
//$_SESSION['pagename'] = "wamc_index";
//include 'db/db.php'; include 'db/error.php';
//include 'db/pushhits.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/wamc.css" rel="stylesheet">

    <style>
.imgdiv {
    float: left;
}

    </style>

    <script type="text/javascript">
// place your images in this array
var random_images_array = ['banner1.png', 'banner2.png', 'banner2.png', 'banner3.png','banner4.png','banner5.png','banner6.png','banner7.png','banner8.png','banner9.png','banner10.png'];

function getRandomImage(imgAr, path) {
    path = path || 'banners/'; // default path here
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}

</script>
</head>
<body>
<div class="header">
	    <!-- This script segment displays an image from the array -->
    <script type="text/javascript">getRandomImage(random_images_array, 'banners/')</script>

</div>
<div class="row">
	<div class="col-9 col-m-12">
	 <?php
	if (isset($_GET['v'])) {
		$get = $_GET['v']; // Default page
		} else {
			$get = -1;
		}

	if ($get == -1) {
		   require "intro.html";
	}
	if ($get == 0) {
		   require "intro.html";
	}
	if ($get== 1) {
	 require "about.html";
	}

	if ($get== 2) {
	 require "contact.html";
	}

	if ($get== 3) {
	 require "registration.html";
	}

	if ($get== 4) {
	 require "locations.html";
	}

	if ($get== 5) {
	 require "teachers.html";
	}

	if ($get== 6) {
	 require "cte-funding.html";
	}

	if ($get== 7) {
	 require "osi-conetnt/application.html";
	}

	if ($get== 9) {
	 require "curriculum.html";
	}

	if ($get== 10) {
	 require "ccss-math.html";
	}

	if ($get== 11) {
	 require "ospi-stem.html";
	}
	?>
	</div>
	<div class="col-2 col-m-2 menu">
	  <ul>
		<li><a href="index.php?v=0">Home</a></li>
		<li><a href="index.php?v=1" >Application</a></li>
		<li><a href="index.php?v=2" >Contact</a></li>
		<li><a href="index.php?v=3">Registrations</a></li>
		<li><a href="index.php?v=4">Inservice Locations</a></li>
		<li><a href="index.php?v=5">Current Teachers</a></li>
		<li><a href="index.php?v=6" >CTE Funding</a></li>
		<li><a href="index.php?v=7">Frameworks</a></li>
		<li><a href="index.php?v=9">Curriculum</a></li>
		<li><a href="index.php?v=10">CCSS - MATH</a></li>
		<li><a href="http://www.k12.wa.us/stem/default.aspx" target = "_blank">OSPI-STEM <tt>OPENS IN A NEW WINDOW </tt></a></li>
		<li><a href="files/" target = "_blank" >Resources/Labs <tt>OPENS IN A NEW WINDOW </tt></a></li>
		<img src = "img/wamc-logo.png" width = "350px" class = "imagesize";>
	</div>
</div><!-- end row-->
<div class="footer">
		<center>
			  <?php  echo "Today is " . date("m/d/Y"); ?>
			<br />
	OSI - MODEL
	<br/>		C.W. Coleman
	</center>
</div>

</body>
</html>

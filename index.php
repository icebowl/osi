<?php
//session_start();
//$_SESSION['pagename'] = "osi_index";
//include 'db/db.php'; include 'db/error.php';
//include 'db/pushhits.php';
?>


<!DOCTYPE html>
<html>
<head><title>OSI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/custom.css" rel="stylesheet">

    <style>
.imgdiv {
    float: left;
}

    </style>


<body>
<div class="header">
	<img src = "img/osi-banner.png" height = "70px">
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
	require "osi-content/physical-layer.html";
	}

	if ($get== 2) {
	 require "osi-content/data-link-layer.html";
	}

	if ($get== 3) {
	 require "osi-content/network-layer.html";
	}

	if ($get== 4) {
	require "osi-content/transport-layer.html";
	}

	if ($get== 5) {
	 require "osi-content/session-layer.html";
	}

	if ($get== 6) {
	 require "osi-content/presentation-layer.html";
	}

	if ($get== 7) {
	 require "osi-content/application-layer.html";
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
		<li><a href="index.php?v=0">OSI-MODEL</a></li>
		<li><a href="index.php?v=7">Application</a></li>
		<li><a href="index.php?v=6">Presentation</a></li>
		<li><a href="index.php?v=5">Session</a></li>
		<li><a href="index.php?v=4">Transpost</a></li>
		<li><a href="index.php?v=3">Network</a></li>
		<li><a href="index.php?v=2">Data Link</a></li>
		<li><a href="index.php?v=1">Physcial</a></li>
		<li><a href="files/" target = "_blank" >Documents <tt>OPENS IN A NEW WINDOW </tt></a></li>
		<img src = "img/osi.png" width = "350px" class = "imagesize";>
	</div>
</div><!-- end row-->
<div class="footer">
		<center>
			<?php
			$ncolor = array('#B35050','#50B350' ,'#5050B3' ,'#B3B350','#50B3B3','#B350B3','#DC7F32','#32DC7F','#7F32DC' ,'#DC327F','#327FDC','#7FDC32','#505050','#B3B3B3','#FDF6E3' ,'#FFEDBF');
			$fcolor = array('#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#000',	'#000');
			for ($i = 0; $i< 16; $i++){
				$link  = "<span style='padding:5px 5px 1px 5px;background-color:".$ncolor[$i]."; color:".$fcolor[$i]."'>$i</span>";
				echo $link;
			}
			?>
			<hr />
			  <?php  echo "Today is " . date("m/d/Y"); ?>
			<br />
	OSI - MODEL
	<br/>		C.W. Coleman
	</center>
</div>

</body>
</html>

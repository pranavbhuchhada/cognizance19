<!DOCTYPE html>
<html>
<head>
	<title>Cognizance 2019</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/comingsoon.css?v=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<canvas id = "canvas" style="z-index: -100"></canvas>
		<div class="row">
			<div id="logo" class="text-center col-4">
				<img id="cz_logo" src="assets/cz_logo.png" class="img-fluid" draggable="false">
				<br><button id="contact" class="btn btn-info" onclick="window.location.href='#contactus'">Contact Us!!</button>
			</div>
		</div>
	</div>

	<footer id="contactus">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center pt-5">
				<a href="https://www.facebook.com/czCHARUSAT/" target="_blank" class="fa fa-facebook"></a>
				<a href="https://www.instagram.com/cognizance_charusat/" target="_blank" class="fa fa-instagram"></a>
				<p class="m-3">Copyright © <?php echo date("Y"); ?>. All rights reserved</p>
			</div>
		</div>
	</div>
	</footer>
<script type="text/javascript" src="plugins/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/comingsoon.js"></script>
</body>
</html>
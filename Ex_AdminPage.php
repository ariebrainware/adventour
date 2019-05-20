	<?php /*?><?php 
	require('koneksi_PA.php');
	session_start();
		$nama_admin = $_SESSION['nama_depanAdmin'];
		$tipe_akun = $_SESSION['tipe_akun'];

		if (isset($_SESSION['user_id'])){
			if($tipe_akun == "user" ){
				echo "<script>alert('Anda tidak memiliki akses');window.location='dashboardUser_PA.php';</script>";
			}		
		}if (!isset($_SESSION['user_id'])){
			echo "<script>alert('Harap Login terlebih dahulu');window.location='halamanUtama_PA.php';</script>";
		} 
	error_reporting(E_NOTICE);
	?><?php */?>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>::: B'ware CORP :::</title>
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/normalize.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap-2.3.2/docs/assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap-2.3.2/docs/assets/css/style.css"/>
	<link rel="stylesheet" href="bootstrap-2.3.2/docs/assets/css/bootstrap-responsive.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="bootstrap-2.3.2/img/icon/favicon.png"/>
	<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	
	<!--<script src="JQuery-transit/jquery.transit.min.js"></script>
	<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js"></script>-->
	<!--<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js"></script>
	<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-id.js"></script>-->
	<script src="JQuery-transit/jquery-3.2.1.js"></script>
	<style type="text/css">
		div{
			display:block;					
		}
		#navbar{
			padding: 4px;
			margin-top: 4%;			
		}
		.muted{
		  	font-size: 36px;
		  	font-family: "Tw Cen MT Condensed";
		  	color: rgb(250, 255, 255);
		  	line-height: 0.444;
		  	text-align: right;
		  	left: 93.234px;
		  	top: 37.008px;
		  	z-index: 95;
			margin-top: 5%;
		}
		body{
			background-image: url(bootstrap-2.3.2/img/HeaderBackground.png);		
		}
	</style>
</head>
<body>
<div class="container">
	<div class="masthead">
		<h3 class="muted pull-left"> Adventour </h3>
		<table class="pull-right" cellpadding="5px" border="1px" id="navbar">
			<tr>
				<td>Arie Brainware</td>
				<td>INFO</td>
				<td>SIGN OUT</td>
			</tr>
			
		</table>
	</div>
</div>
</body>
</html>
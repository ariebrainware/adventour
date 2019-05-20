<?php 
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
?>

<html>    
<header>
  <title>::: B'ware CORP :::</title>
</header>

<body>
<?php  
	echo "Hallo ".$_SESSION['nama_depanAdmin']
	?><br>
<a href="InternationalTrip_PA.php">International Trip</a> <br>
<a href="LocalTrip_PA.php">Local Trip</a><br>
<a href="MemberRegistered_PA.php">Member Registered</a><br>
<a href="logoutPage_PA.php">LogOut</a>
</body>


</html>
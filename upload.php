<?php
include '../is_receipt/hundphp.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="../style/ISAFINA.css">
	<link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
<body style="background-size:cover; font:20px Montserrat, sans-serif;">
<?php 
if (@!$_SESSION['paswd']) {
  $re="Login first to start transaction";
  echo '<div class="error"><br>
        <center><p>'.$re.'</p><br><br>
        <a href="login.php"><button class="btn" style="background:lightblue;font-size:20px;">Login</button></a></center>
      </div>';
  
  exit();
}
 ?>
  <div class="container-fluid bg-1 text-center">
	 <div class="header"  style="background:white;width:100%;box-shadow:0 0 10px 0 black;padding:0px;margin:10px auto 0px;color:rgb(44, 99, 13)">
    	<center><h3>YOUTH WITH MISSION TANGA-TANZANIA.</h3></center>
    	 <center><h3>(YWAM)</h3></center>
		  <center>
			<h6>
			<i style="font-family:Lucida">P.o.Box 94 Mkata ,Handeni  ,Tanga <br>
			Mob:+225759939209 </i>
		</h6>
		</center>
<div class="container" >
	<style type="text/css">
		li a{
			color:rgb(91, 68, 41);
		}
		</style>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="navbar-brand" href="#">
        <img src="../pic/ywam_logo.png" alt="logo" style="width:70%;">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Home</a>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="aplication/Sregister.php"style="color:black" >Isafina-pre and Primary-school</a>
                <a class="dropdown-item" href="#"style="color:black" >DTS aplication's</a>
                <a class="dropdown-item" href="#"style="color:black">Outreach's</a>
            </div>
    </li>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">School analysis</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="chart1.php"style="color:black" >Subjects analysis</a>
              <a class="dropdown-item" href="chart2.php"style="color:black" >Class analysis</a>
              <a class="dropdown-item" href="#"style="color:black">Students analysis</a>
              <a class="dropdown-item" href="#"style="color:black">Staffs analysis</a>
          </div>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="front/about.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../is_receipt/sesskil.php" >Logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="../result/upload.php">Update Results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../staffs/Isafina_staff_charting.php">Staff Chat </a>
    </li>
  </ul>
 </div>


  <div class="container" style="color:black">
  	<form class="form" style="width:100%;margin:30px auto 0px">
  	<div class="row">
  		<div class="col-sm-8">
  				<div class="input-group">
					<label>Student name /Number:</label>
					<input type="text" name="Sname" id="Sname" required=" " style="width:60%">
				</div>
  		</div>
  		<div class="col-sm-4">
  			<div class="input-group">
					<label>Subject Name:</label>
					<input type="text" name="Subject" id="Subject" required=" " style="width:60%">
			</div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-sm-8">
  			
  		</div>
  	</div>
  </form>
  </div>
  </div>
</div>


  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/progressbar.js/dist/progressbar.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/misc.js"></script>
  <script src="js/material.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="../assetss/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assetss/js/popper.min.js"></script>
  <script type="text/javascript" src="../assetss/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
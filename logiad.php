<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="ISAFINA.css">
	<link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
<?php
session_start();
@$database=mysqli_connect('localhost','root','reals2100','isafina'); 
$er='';
$fil='';
$nam='';
$staf_no='';
$counter=0;
if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$pwd=$_POST['password'];
	$hsp=md5($pwd);
	if ($email!=empty($email)||$hsp!=empty($hsp)) 
	{ 
		$sql2="SELECT staff_no,email, paswd FROM staffs WHERE email='$email' AND paswd='$hsp'";
		$res=mysqli_query($database,$sql2);
		$check=mysqli_num_rows($res);
		if (!$check) {
			if ($counter!=3) {
				$er="Incorect Username/Password please inter valid details.";
			}
			else{
				header("Location:./register.php");
				
			}
			$counter=$counter+1;
			
		}
		else
		{
			$_SESSION['email']=$email;
			$_SESSION['paswd']=$hsp;
			if ($res-> num_rows!=0) {
			 while ($row=$res-> fetch_assoc()){
			    $staf_no=$row['staff_no'];	
			}
			}
			if ($staf_no==1) {
				header("Location:./hundi.php");
			}
			else{
				echo "Normal staff";
				exit();
			}
		}
	}
	else
	{
		$fil="Fill all part before log in";
	}

}



 ?>
<body style="background-size:cover; font:20px Montserrat, sans-serif;">
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
        <img src="pic/ywam_logo.png" alt="logo" style="width:70%;">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="..\index.php">Home</a>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="../aplication/Sregister.php"style="color:black" >Isafina-pre and Primary-school</a>
                <a class="dropdown-item" href="#"style="color:black" >DTS aplication's</a>
                <a class="dropdown-item" href="#"style="color:black">Outreach's</a>
            </div>
    </li>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Isafina Schools</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="../front/isafina_makata.php"style="color:black" >Isafina Mkata</a>
              <a class="dropdown-item" href="#"style="color:black" >Isafina Mazingara</a>
              <a class="dropdown-item" href="#"style="color:black">Safina Kilimanjaro</a>
              <a class="dropdown-item" href="#"style="color:black">Safina Arusha</a>
          </div>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="../front/about.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#" data-toggle="modal" data-target="#log"  target="new">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../is_receipt/register.php">Join us</a>
    </li>
  </ul>
</div>
	<div class="header" style="background:#5F9EA0; box-shadow:0 0 10px 0 black;">
		<h3 style="font-size:18px">ISAFINA ENGLISH MEDIUM PRE-&-PRIMARY SCHOOL </h3>
		<!-- <img src="../pic/ywam_logo.png"> -->
		<h6><i style="font-size:18px">Login is Adminstrator Only</i></h6>
	</div>
	<form method="POST" action="login.php" style="box-shadow:0 0 10px 0 black;">
		<?php if($er): ?>
			<div class="error">
				<p><?php echo $er; ?></p>
			</div>
		<?php endif ?>
		<?php if($fil): ?>
			<div class="error">
				<p><?php echo $fil; ?></p>
			</div>
		<?php endif ?>
		<?php if($nam): ?>
			<div class="error">
				<p><?php echo $nam; ?></p>
			</div>
		<?php endif ?>
		<div class="input-group">
		<label>User name</label>
		<input type="email" name="email" id="email" required="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" id="password" required="">
	</div>
	<div class="input-group">
		<button type="submit" name="login" id="login" class="btn" style="width:20%;">login</button>
	</div>
	<p>
		Need to register? <a href="register.php">Click here</a>
	</p>
	</form><br><br>
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
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="ISAFINA.css">
	<link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
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
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Join us</a>
    </li>
  </ul>
</div>
	<div class="header" style="background:#5F9EA0; width:40%; box-shadow:0 0 10px 0 black;">
		<h3 style="font-size:18px">ISAFINA ENGLISH MEDIUM PRE-&-PRIMARY SCHOOL </h3>
		<img src="../pic/ywam_logo.png">
		<h6><i style="font-size:18px">User registration.</i></h6>
	</div>
	<form method="POST" action="register.php" style="box-shadow:0 0 10px 0 black;width:40%;">
		<?php if($errors): ?>
			<div class="error">
				<p><?php echo $errors; ?></p>
			</div>
		<?php endif ?>
		<?php if($ex): ?>
			<div class="error">
				<p>Registration fail..!</p>
				<p><?php echo $ex; ?></p>
			</div>
		<?php endif ?>
		<?php if($mis): ?>
			<div class="error">
				<p><?php echo $mis; ?></p>
			</div>
		<?php endif ?>
		<?php if($emp): ?>
			<div class="error">
				<p><?php echo $emp; ?></p>
			</div>
		<?php endif ?>
		<?php if($emp1): ?>
			<div class="error">
				<p><?php echo $emp1; ?></p>
			</div>
		<?php endif ?>
	<div class="input-group">
		<label>Picture</label>
		<input type="file" name="foto" id="foto">
	</div>
	<div class="input-group">
		<label>First name</label>
		<input type="text" name="fname" id="fname" required=" ">
	</div>
	<div class="input-group">
		<label>Last name</label>
		<input type="text" name="lname" id="lname" required="">
	</div>
	<div class="input-group">
		<label>Date of Birth</label>
		<input type="Date" name="dob" id="dob" required="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" id="email" required="">
	</div>
	<div class="input-group">
		<label>Phone</label>
		<input type="text" name="phone" id="phone" required="">
	</div>
	<div class="input-group">
		<label>Home Address</label>
		<input type="text" name="address" id="address" required="">
	</div>
	<div class="input-group">
		<label1>Male</label>
		<input type="checkbox" name="gender" id="gender" value="Male" >
	</div><div class="input-group">
		<label2>Female</label>
		<input type="checkbox" name="gender" id="gender" value="Female">
	</div>
	<div class="input-group">
		<label>Passwords</label>
		<p style="font-size:14px; color:blue"><em><i>(Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters) </i></em></p>
		<input type="Password" name="pwd" id="pwd"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required="">
	</div>
	<div class="input-group">
		<label>Confirm passwords</label>
		<input type="Password" name="pwd1" id="pwd1"  pattern=".{8,}" required="">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Submit</button>
	</div>
	<p>
		Alredy member? <a href="login.php">Click here to sign in</a>
	</p>
	</form><br><br>
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
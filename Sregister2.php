<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="ISAFINA.css">
	<link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css"> <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
   
</head>
<body style="background:#5F9EA0; font: 20px Montserrat, sans-serif;">
	<div class="header" style="box-shadow:0 0 30px 0 black;width:60%;">
		<h3>ISAFINA ENGLISH MEDIUM PRIMARY SCHOOL </h3>
		<img src="../pic/ywam_logo.png">
		<h6><i style="font-size:20px">Student Registration Form</i></h6>
	</div>
	<form class="form-outline" method="POST" action="register.php" style="box-shadow:0 0 30px 0 black;width:60%;">
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
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Picture</label>
				<input type="file" name="foto" id="foto">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>First name</label>
				<input type="text" name="fname" id="fname" required=" ">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>Last name</label>
				<input type="text" name="lname" id="lname" required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="input-group">
				<label>Date of Birth</label>
				<input type="Date" name="dob" id="dob" required="">
	        </div>
		</div>
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-3">
			<label>Gender</label></div>
				<div class="col-sm-4">
					<div class="input-group">
					Male
					<input type="checkbox" name="gender" id="gender" value="Male" >
			     </div>
				</div>
				<div class="col-sm-4">
					<div class="input-group">Female
					<input type="checkbox" name="gender" id="gender" value="Female" >
			     </div>
				</div>
			</div>
			</div>
		</div>
	<div class="row">
		<div class="col-sm-7">
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" id="email" required="">
			</div>
		</div>
		<div class="col-sm-5">
			<div class="input-group">
				<label>Phone</label>
				<input type="text" name="phone" id="phone" required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10"><div class="input-group">
			<label>Home Address</label>
			<input type="text" name="address" id="address" required="">
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<div class="input-group">
				<div class="dropdown">
		            <select name="country" id="country" class="form-control" style="width:250px;background:#ddeedd;border:1px solid " required="">
		            <option>--Select country--</option>
		            <option value="TANZANIA">TANZANIA</option>
		            <option value="KENYA">KENYA</option>
		            <option value="UGANDA">UGANDA</option>
		            <option value="BURUNDI">BURUNDI</option>
		            <option value="RWANDA">RWANDA</option>
		            <option value="CONGO">CONGO</option>
		            </select>
		          </div>
				</div>
	</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Passwords</label>
				<input type="Password" name="pwd" id="pwd"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required="">
				<p style="font-size:14px; color:blue"><em><i>(Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and node_moduleseric characters) </i></em></p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>Confirm passwords</label>
				<input type="Password" name="pwd1" id="pwd1"  pattern=".{8,}" required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<p>
				Alredy member? <a href="logins.php">Click here to sign in</a>
			</p>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<a href="Sregister2.php"><button class="btn btn-inline btn-lg" style="float:left;">Next Page</button></a>
			</div>
		</div>
	</div>
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
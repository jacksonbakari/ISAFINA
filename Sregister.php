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
	<form class="form-outline" method="POST" action="Sregister.php" style="box-shadow:0 0 30px 0 black;width:60%;">
	<center><h6><i style="font-size:20px">Student Important Details</i></h6></center>
	<hr>
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
		<div class="col-sm-10"><div class="input-group">
			<label>Home Address</label>
			<input type="text" name="address" id="address" required="">
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Religion: </label>
				<div class="dropdown">
		            <select name="religion" id="religion" class="form-control"required="">
		            <option>--Select religion--</option>
		            <option value="Christian">Christian</option>
		            <option value="Muslim">Muslim</option>
		            <option value="Hindu">Hindu</option>
		            <option value="Budhi">Budhi</option>
		            <option value="African">African</option>
		            <option value="Other">Other</option>
		            <option ></option>
		            </select>
		          </div>
				</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
			<label>Class enroled: </label>
			<div class="dropdown">
		        <select name="Class" id="Class" class="form-control"required="">
		        	<option>--Select Class--</option>
		            <option value="Baby Class">Baby Class</option>
		            <option value="Nursery Class">Nursery Class</option>
		            <option value="Class one">Class one</option>
		        </select>
		    </div>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Class start from:</label>
				<input type="Date" name="sclas" id="sclas" required="">
	        </div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>End on:</label>
				<input type="Date" name="eclas" id="eclas" required="">
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="input-group">
				<label>Passwords</label>
				<input type="Password" name="pwd" id="pwd"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required="">
				<p style="font-size:14px; color:blue"><em><i>(Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and node_moduleseric characters) </i></em></p>
			</div>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>Confirm passwords</label>
				<input type="Password" name="pwd1" id="pwd1"  pattern=".{8,}" required="">
			</div>
		</div>
	</div>
	<hr>
		<center><h6><i style="font-size:20px">Parent/Gudian Details</i></h6></center>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Parent First name</label>
				<input type="text" name="pfname" id="pfname" required=" ">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>Parent Last name</label>
				<input type="text" name="plname" id="plname" required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
			<div class="input-group">
				<label>Relashionship with Student:</label>
				<input type="text" name="Relashionship" id="Relashionship" required="">
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
		<div class="col-sm-3">
			<div class="input-group">
				<label>Nationality</label>
				<input type="text" name="Nationality" id="Nationality" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Work as:</label>
				<input type="text" name="Work" id="Work" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Employer's Name</label>
				<input type="text" name="Employer" id="Employer" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Work Phone:</label>
				<input type="text" name="WorkP" id="WorkP" required="">
			</div>	
		</div>
	</div>
	<hr>
	<center><h6><i style="font-size:20px">Student Other Related Details</i></h6></center>
	<hr>

	<div class="row">
		<div class="col-sm-6">
			<p><a href="" data-toggle="modal" data-target="#log" >Read School rules</a>
			</p>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<button type="submit" class="btn btn-inline btn-lg" style="float:left;">Submit this form</button></a>
			</div>
		</div>
	</div>
	<div class="container">
		
	</div>
</form><br><br>







<!-- Modal 002-->
  <div id="log" class="modal fade"  role="dialog">
    <div class="modal-dialog modal-lg" role="document">
    
      <!-- Modal content-->
      <div class="modal-content"style="background:#5F9EA0;">
        <div class="modal-header">ISAFINA School rules and regulations:</div>
        <div class="modal-body">
          <div class="container bg-light" style="box-shadow:0 0 30px 0 black;">
			<br><br><p>Ninakubali kuwa : <br><br>
			•	Nitalipa ada yote kama ilivyoelekezwa katika fomu hii nakama pia <br> itafanyiwa marekebisho kulinagana na uendeshaji wa shule. <br> Ninaahidi kwa wakati bila kusubiri dharura . <br> <br>

			•	Ninakubali kwamba usalama wamtoto wangu anapokuja nakuondoka shule <br> ni ukojuuyangu. Ni wajibu wangu kumtibu mtoto wangu au gharama <br>zitakazo tumika kama niswala la dharura. <br> <br>

			•	Ninaahidi kulipa gharama kama mtoto wangu ataharibu kwa bahati mbaya <br> au kukusudi akifanya chochote cha shule. <br> <br>

			•	Ninatoa ruhusa kwa shule kutafuta ushauri wa daktari na niruhusu daktari kufanya matibabu pindi inapotokea dharura au ajali ambapo siwezi kupatikana kwa haraka . <br> <br>

			•	Ninaelewa kwamba shule ya Isafina ikochiniyashirika la Kikristo napamoja na shule kufuata mtaala wakitaifa ,wanafunzi wote watapatiwa mafunzo yakikristo . <br> <br>

			•	Nakubali kwamba ada haitarudishwa kama mwanafunzi hata kuwepo kwasababu ua ugonjwa ,kuhama kusimamishwa au kufukuzwa. <br> <br>

			•	Nimeelewa maelezo ya liyokatika fomu hii, nnakubaliana nayona nitashirikiana na shule ilimalengo ya kumwelewesha mtoto wangu yafanikiwe.  <br> <br>
			</p>
          </div>
        </div>
        <!-- Modal footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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
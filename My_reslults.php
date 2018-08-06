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
<body style="background:#5F9EA0; font: 20px Montserrat, sans-serif;">
  <?php 
if (@!$_SESSION['paswd']) {
  $re="Login first to Look for your results";
  echo '<div class="error"><br>
        <center><p>'.$re.'</p><br><br>
        <a href="../is_receipt/login.php"><button class="btn" style="background:lightblue;font-size:20px;">Login</button></a></center>
      </div>';
  
  exit();
}
 ?>
 <div class="container-fluid bg-1 text-center">
	 <div class="header"  style="background:white;width:70%;box-shadow:0 0 10px 0 black;padding:0px;margin:10px auto 0px;color:rgb(44, 99, 13)">
    	<center><h3>YOUTH WITH MISSION TANGA-TANZANIA.</h3></center>
    	 <center><h3>(YWAM)</h3></center>
		  <center>
			<h6>
			<i style="font-family:Lucida">P.o.Box 94 Mkata ,Handeni  ,Tanga <br>
			Mob:+225759939209 </i>
		</h6>
		</center>
		<div class="container">
			<form action="" method="POST" style="width:60%;background:transparent;">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-11">
                 <div class="input-group">
                  <label>Put your Fullname/ RegNo</label>
                  <input type="text" name="seach" id="seach" required=" ">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-3">
                <button class="btn" name="search1" id="search1" type="submit" style="padding:10px; margin:5px auto 0px">Search <i class="fas fa-search" style="margin:4px auto 0px"></i></button>
              </div>
            </div>
          </form>
          </div>
          <br>
           <?php
                   // connect to database
            $database=mysqli_connect('localhost','root','reals2100','isafina');
            if($database-> connect_error)
            {
              die("Connecion failed:".$database-> connect_error);
            }
          if (isset($_POST['search1'])) {
             $varable=$_POST['seach'];
             if (!empty($varable)) {
               $sql="SELECT * FROM stResult WHERE reg='$varable'||name='$varable'";
               $conn=$database-> query($sql);
               if ($conn) {
                 if ($conn-> num_rows()>0) {
                 while ($row=$conn-> fetch_assoc()){
                  echo "string";
                 }
               }
               else{
                echo "No Result found";
               }
               }
               else{
                echo '<div class="error">
                       <center>Connection Error..!! Please Check your Connection.</center>  
                      </div>';
               }
             }
           } 


           ?>
          <div class="row">
            <div class="col-sm-1"></div>
           <div class="col-sm-3">
             <a href="..\index.php"><button class="btn" style="padding:10px; margin:10px auto 0px">Cancel</button></a>
           </div>
          </div><br>    
        </div>
      <form class="form" style="height:5px; width:70%;background:#5F9EA0;box-shadow:0 0 10px 0 black;"></form>
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
<!DOCTYPE html>
<html>
<head>

	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="hundi.css">
	
   <link rel="stylesheet" type="text/css" href="assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
   
</head>
<body style="background:#5F9EA0; font: 20px Montserrat, sans-serif;">
	<?php session_start();
if (@!$_SESSION['paswd']) {
	$re="Login first to complete transaction";
	echo '<div class="error"><br>
				<center><p>'.$re.'</p><br><br>
				<a href="login.php"><button class="btn" style="background:lightblue;font-size:20px;">Login</button></a></center>
			</div>';
	
	exit();
}
 ?>
<?php 
$check1='';

        // connect to database
		$database=mysqli_connect('localhost','root','reals2100','isafina');
		if($database-> connect_error)
		{
			die("Connecion failed:".$database-> connect_error);
		}
		
		$sql12="SELECT inv_num FROM invoice";
		$result1=$database->query($sql12);
		$check1=mysqli_num_rows($result1);
 ?>
	<form class="form" action="" method="POST" style="box-shadow:0 0 30px 0 black;"><br><br>
		<p style="float:right;font-size:14px"><?php echo "Available Receipt to print :   ". $check1; ?></p>
		<div class="input-group">
			<p>If you input time should be like this <q><i>(<em style="color:red">Thursday 19th of July 2018 02:18:05 PM</em>)</i></q></p>
          <input class="input-group" id="value" name="value" type="search" placeholder="View the list the paste here receipt you want to print" aria-label="Search" style="background:transparent;color:black">
      </div>
      <div class="input-group">
          <button class="btn" name="view" id="view" type="submit">View<i class="fas fa-search" style="float:right;"></i></button>
          <button class="btn" name="search" id="search" type="submit" style="float:right;">Search <i class="fas fa-search" style="float:right;"></i></button>
      </div>
        <?php
        					// connect to database
		$database=mysqli_connect('localhost','root','reals2100','isafina');
		if($database-> connect_error)
		{
			die("Connecion failed:".$database-> connect_error);
		}
		if (isset($_POST['view'])) {

			
		$sql="SELECT inv_num,inv_date,inv_name,rname FROM invoice";
		$result=$database->query($sql);
		if ( $result-> num_rows>0) {
			while ($row=$result-> fetch_assoc()) {
				echo '<form>
							<table>
						
		<strong><em>Trans_no: </em></strong>'.$row["inv_num"].'<br><strong><em>Date: </em></strong>'.$row["inv_date"].'<br><strong><em>Depositor: </em></strong>'.$row["inv_name"].'<br><strong><em>Recever: </em></strong>'.$row["rname"].'</table></form>';
			}
		}}
         ?>
     </form>
	<div id="print_part">
	<div class="header" style="background:#5F9EA0;">
		<center><h3>ISAFINA ENGLISH MEDIUM PRIMARY SCHOOL </h3>
			<h6>
			<i style="font-family:Lucida">P.o.Box 94 Mkata ,Handeni  ,Tanga <br>
			Mob:+225759939209 </i>
		</h6>
		<img src="pic/ywam_logo.png" style="width:15%">
		</center>
	</div>
	<form>
		<table>
			<tr>
				<center>
						<p>
							<u>Payment Receipt</u>
						</p>
					
				</center>
			</tr>
		
			<?php 
			// connect to database
		$database=mysqli_connect('localhost','root','reals2100','isafina');
		if($database-> connect_error)
		{
			die("Connecion failed:".$database-> connect_error);
		}
		if (isset($_POST['search'])) {
			
			$value=$_POST['value'];
		 
		$sql="SELECT inv_num,inv_amount,words,inv_date,inv_name,rname,reason FROM invoice WHERE (inv_num='$value')||(inv_name='$value')||(rname='$value')||(inv_date='$value') LIMIT 1";
		$result=$database->query($sql);

		if ($result-> num_rows>0) {
			while ($row=$result-> fetch_assoc()) {
				echo '
				<tr>
			<th style="width:30%;">Date:</th>
				<td style="width:30%;">'.$row["inv_date"].'</td>
				<th style="width:30%;">Receipt NO:</th>
				<td style="width:30%;">'.$row["inv_num"].'</td>
				</tr>
		<tr>
			<th>Received from:</th>
			<td style="width:30%;">'.$row["inv_name"].'</td>
			
		</tr>
		<tr>
			<th>The total of:</th>
			<td style="width:30%;">'.$row["inv_amount"].' Tsh.</td>
		</tr>
		<tr>
			<th style="width:40%;" >Payment reason:</th>
			<td style="width:40%;"><u>'.$row["reason"].'</u></td>
		</tr>
		<tr>
			<th style="width:40%;" >Receivers Name:</th>
			<td style="width:40%;">'.$row["rname"].'</td>
			<th style="width:40%;" >Signature:</th>
			<td style="width:40%;">.............</td>
		</tr>
		';

			}}
			else{
				$echo="Receipt not found please inter the valid details to fetch your receipt.";
				echo '<div class="error">
				<p>'.$echo.'</p>
			</div>';
				
			} 
			
		}
		?>	
	</table>
	</form>
			
 		
</div>
<script type="text/javascript">
	function print(layer) {
		var generator=window.open(",'name',");
		var layetext=document.getElementById(layer);
		generator.document.write(layetext.innerHTML.replace("Print me"));
		generator.document.close();
		generator.print();
		generator.close();
	}
</script>
<center><br>
   <div>
   `	<a href="index.php"><button class="btn" style="background:lightblue;font-size:20px;">Home</button></a>
   	 	<a href="sesskil.php"><button class="btn" style="background:lightblue;font-size:20px;">Logout <i class="fas fa-log-out fa-2x" style="float:right;"></i></button></a>
		<button type="submit" name="Print" onclick="javascript:print('print_part')"  class="btn" style="background:lightblue;font-size:20px;">Print receipt</button>

	</div>
</center>
<br><br><br><br>
</script>
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/progressbar.js/dist/progressbar.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/misc.js"></script>
  <script src="js/material.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="assetss/js/jquery.min.js"></script>
  <script type="text/javascript" src="assetss/js/popper.min.js"></script>
  <script type="text/javascript" src="assetss/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- End custom js for this page-->
</body> 
</html>
<?php 
 //header("Location:./sesskill.php")
  ?>


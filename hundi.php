<?php
include 'hundphp.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="hundi.css">
</head>
<body style=" font: 20px Montserrat, sans-serif;">
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
	<div id="print_part" >
	<div class="header" style="box-shadow:0 0 30px 0 black;">
		<h3>ISAFINA ENGLISH MEDIUM PRIMARY SCHOOL </h3>
		<img src="pic/ywam_logo.png" style="float:left;">
		<img src="pic/ywam_logo.png" style="float: right;">
		<h6><i style="font-family:Lucida">P.o.Box 94 Mkata ,Handeni  ,Tanga <br>
			Mob:+225759939209 </i></h6>
			<center>
				<p style="font-size:14px">Done by:<q id="user"><?php echo $_SESSION['email']; ?></q></p>
			</center><br>
			<a href="invoice.php"><button type="submit" name="record" id="record" class="btn" style="float:left;height:40px;font-size:18px;text-align:center;">Print only</button></a>

		<p><u>Transaction record form</u></p>
	</div>

		<form id="form" action="hundi.php" method="POST" style="box-shadow:0 0 30px 0 black;">
			<?php if($er): ?>
			<div class="error">
				<p><?php echo $er; ?></p>
			</div>
		<?php endif ?>
		<?php if($fil): ?>
			<div class="error">
				<center><p><?php echo $fil; ?></p></center>
				<br>
			</div><br>
		<?php endif ?>
		<?php if($nam): ?>
			<div class="error">
				<p><?php echo $nam; ?></p>
			</div>
		<?php endif ?>
			<center>
				<table>
 				<tr>
 					<th><label>Date:</label></th>
 					<td id="date"></td>
 					<script>
				document.getElementById('date').innerHTML =Date("25 Mar 2015");
			</script>
 				</tr>
 			</table><br>
			</center>
			<center>
				 			<table>
 				<tr>
 				<th>
 					<label>Received from:</label>
 				</th>
 				<th>
 					<label>Total of:</label>
 				</th>
 			    </tr>
				<tr>
					<td>
						<div class="input-group">
						<input type="text" name="pname" id="pname" style="width:120%">
						</div>
					</td>
					<td>
						<div class="input-group" >
						<input type="text" name="amt" id="amt" style="width:50%;float:right;">
						</div>
					</td>
				</tr>
				<tr>
					<th>In words:</th>
				</tr>
				<tr>
					<td>
						<div class="input-group">
						<input type="text" name="words" id="words" style="width:200%">
						</div>
					</td>
				</tr>
				<tr>
					<th>Reason:</th>
				</tr>
				<tr>
					<td>
						<div class="input-group">
						<input type="text" name="reson" id="reson" style="width:200%">
						</div>
					</td>
				</tr>
				<tr>
					<th>Receivers Name:</th>
					<th>Receivers Code:</th>
				</tr>
				<tr>
					<td>
						<div class="input-group">
						<input type="text" name="rname" id="rname" style="width:120%">
						</div>
					</td>
					<td>
						<div class="input-group" >
						<input type="password" name="password" id="password" style="width:50%;float:right;">
						</div>
					</td>
				</tr>
 			</table>
			</center>
 			<div>
				<button type="submit" name="record" id="record" class="btn" style="float:right;" onclick="myFunction()">Save</button>
			</div>
			<br><br>
	</div>
</form>
<br><br>
<script>
function myFunction() {
    alert('Are you sure you want to record this Transaction');
    
}
</script>
</body>
</html>
<?php
session_start();
$database=mysqli_connect('localhost','root','reals2100','isafina'); 
$er='';
$fil='';
$nam='';
if (isset($_POST['record'])) {
	$pname=$_POST['pname'];
	$em=$_SESSION['email'];
	$rname=$_POST['rname'];
	$amt=$_POST['amt'];
	$reson=$_POST['reson'];
	$words=$_POST['words'];
	$pwd=$_POST['password'];
	$date= date("l jS \of F Y h:i:s A");
	$hsp=md5($pwd);
	if (empty($pname)||empty($hsp)||empty($em)||empty($rname)||empty($reson)||empty($words)||empty($amt)) 
	{ 
		$fil="Please you have to fill all parts before submit.";
	}
      else{
		$sql1="SELECT paswd,email FROM staffs WHERE email ='$em' AND paswd='$hsp'";
		$res=mysqli_query($database,$sql1);
		$check=mysqli_num_rows($res);
		if (!$check) {
			$er="Incorect Username/code Please inter valid details";
			
		}
		else
		{
			$sql2="INSERT INTO invoice(inv_amount,words,inv_date,inv_name,rname,reason) VALUES ('$amt','$words','$date','$pname','$rname','$reson')";
			$result=mysqli_query($database,$sql2);
			if ($result) {
				$fil='Your payment has been Successfuly recorded. <br><a onclick="myFunction()" href="invoice.php"><p style="color:green"><i>You can Print the receipt if you click the print button..!<i/><p/><a/>';
				
			}
			else{
				$fil="payment not success.";
			}
		}
	}
}
 ?>
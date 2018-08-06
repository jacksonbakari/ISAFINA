<?php 
session_start();
// connect to database
$database=mysqli_connect('localhost','root','reals2100','isafina');
// if button clicked
$errors='';
$mis='';
$emp='';
$emp1='';
$ex='';
if (isset($_POST['register'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	@$gender=$_POST['gender'];
	$pwd=$_POST['pwd'];
	$image=$_POST['foto'];
	$pwd1=$_POST['pwd1'];

	if ($pwd1!=$pwd) {
		$mis="Incorect confirmation Password, it must be match";
	}
	elseif (empty($fname)||empty($lname)||empty($email)||empty($dob)||empty($phone)) {
		$emp="fill all parts";
		header("Location:./register.php");
		exit();
	}
	if(empty($gender))
	{
		$errors="Please fill up gender";
	}
	else{
		$sql1="SELECT phone,email FROM staffs WHERE phone='$phone' AND email='$email'";
		$result1=mysqli_query($database,$sql1);
		$chec=mysqli_num_rows($result1);
		if ($chec>0) {
			$ex="User exist, Please select another email/address/phone ";
		}
		else{
		$hspwd=md5($pwd);
	
	// all thing clear
	
		$sql="INSERT INTO staffs (fname,lname,DOB,gender,phone,address,email,image,paswd) VALUES ('$fname','$lname','$dob','$gender','$phone','$address','$email','$image','$hspwd')";
		$result=mysqli_query($database,$sql);
		if ($result) {
			 $sql = "SELECT staff_no FROM staffs WHERE email='$email'";
			 $result1=$database->query($sql);
		    if ($result1-> num_rows>=0) {
			while ($row=$result1-> fetch_assoc()) {
				$get=$row['staff_no'];
			}
			if ($get==1) {
			header("Location:./hundi.php");
			}
			else{
				$emp1="Registered successfuly";
			}
		}
	}
		else{
			$emp1="Registration error";	
			
		}
	}
}
}
 ?>
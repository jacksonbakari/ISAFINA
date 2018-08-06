<?php 
include_once 'common.php';

$succc='';
$er='';


if (isset($_POST['sumit_form'])) {
	@$fname=$_POST['fname'];
	@$midname=$_POST['midname'];
	@$lname=$_POST['lname'];
	@$gende=$_POST['gende'];
	@$DOB=$_POST['DOB'];
	@$address=$_POST['address'];
	@$religion=$_POST['religion'];
	@$class_en=$_POST['class_en'];
	@$start_date=$_POST['start_date'];
	@$end_date=$_POST['end_date'];
	@$pwd=$_POST['pwd'];
	@$pafname=$_POST['pafname'];
	@$palname=$_POST['palname'];
	@$relashioship=$_POST['relashioship'];
	@$email=$_POST['email'];
	@$phone=$_POST['phone'];
	@$nationality=$_POST['nationality'];
	@$work_as =$_POST['work_as'];
	@$empl_name =$_POST['empl_name'];
	@$work_phone =$_POST['work_phone'];
	@$most_pref =$_POST['most_pref'];
	@$least_pref =$_POST['least_pref'];
	@$time_spen =$_POST['time_spen'];
	@$gen_behavior =$_POST['gen_behavior'];
	@$other_relatiosh =$_POST['other_relatiosh'];
	@$fear =$_POST['fear'];
	@$eating_behv =$_POST['eating_behv'];
	@$agree =$_POST['agree '];
	@$list_of_not_agree =$_POST['list_of_not_agree'];
	@$reasons =$_POST['reasons'];
	@$pay_agree =$_POST['pay_agree'];
	@$picture=$_POST['picture'];

	$sql= " SELECT fname,lname,pafname,palname FROM application WHERE (fname ='$fname',address='$address' AND pwd='$pwd')";
	$result1=mysqli_query($database , $sql);
		$chec=mysqli_num_rows($result1);
		if ($chec>0) {
			echo"User exist, Please select another email/address/phone ";
		}
	else{
		$pwd1=md5($pwd);
		$sql1="INSERT INTO application(fname, midname, lname, gender, DOB, address, religion, class_en, start_date, end_date, pwd, pafname, palname, relashioship, email, phone, nationality, work_as, empl_name, work_phone, most_pref, least_pref, time_spend, gen_behavior, other_relatiosh, fear, eating_behv, agree, list_of_not_agree, reasons, pay_agree, picture) VALUES('$fname','$midname','$lname','$gende','$DOB','$address','$religion','$class_en','$start_date','$end_date','$pwd1','$pafname','$palname','$relashioship','$email','$phone','$nationality','$work_as','$empl_name','$work_phone','$most_pref','$least_pref','$time_spen','$gen_behavior','$other_relatiosh','$fear','$eating_behv','$agree','$list_of_not_agree','$reasons','$pay_agree','$picture')";
		$insert=$result1=$database->query($sql1);
		if ($insert) {
			$succc="Form is Successfuly submited ";
		}
	}
}




 ?>
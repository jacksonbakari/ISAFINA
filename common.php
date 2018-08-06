<?php  
// connect to database
		$database=mysqli_connect('localhost','root','reals2100','isafina');
		if($database-> connect_error)
		{
			die("Connecion failed:".$database-> connect_error);
		}
 ?>
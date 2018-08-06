<?php 
include_once 'Sreg.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ISAFINA SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="ISAFINA.css">
	<link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css"> 
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
  <style type="text/css">
        #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }

      #myBtn:hover {
      background-color: #555;
}
</style>
</head>
<body style="background-size:cover; font:20px Montserrat, sans-serif;">
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
		      <a class="nav-link" href="..\index.php">Home</a>
		    </li>
		    <li class="nav-item dropdown">
		            <a class="nav-link active dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
		            <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
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
		    <li class="nav-item">
		      <a class="nav-link " href="../front/about.php">About us</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#" data-toggle="modal" data-target="#log"  target="new">Login</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="../is_receipt/register.php">Join us</a>
		    </li>
		 </ul>
		</div>
	

<div class="header" style="background:#5F9EA0; box-shadow:0 0 10px 0 black;width:80%;">
		<h3>ISAFINA ENGLISH MEDIUM PRE-&-PRIMARY SCHOOL </h3>
		<img src="../pic/ywam_logo.png"> <br> REG:NO TA.03/4/EA.003
		<h6><i style="font-size:20px">Student Registration Form</i></h6>
	</div>
<form class="form-outline" method="POST" action="Sregister.php" style="text-align:left; box-shadow:0 0 10px 0 black;width:80%;">
	<center><h6><i style="font-size:20px">Student Important Details</i></h6></center>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Picture</label>
				<input type="file" name="picture" id="picture">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="input-group">
				<label>First name</label>
				<input type="text" name="fname" id="fname" required=" ">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>Middle name</label>
				<input type="text" name="midname" id="midname">
			</div>
		</div>
		<div class="col-sm-4">
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
				<input type="Date" name="DOB" id="DOB" required="">
	        </div>
		</div>
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-3">
			<label>Gender</label></div>
				<div class="col-sm-4">
					<div class="input-group">
					<label>Male</label>
					<input type="radio" name="gende" id="gende" value="Male">
			     </div>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<label>Female</label>
					<input type="radio" name="gende" id="gende" value="Female" >
			     </div>
				</div>
			</div>
			</div>
		</div>
	<div class="row">
		<div class="col-sm-10"><div class="input-group">
			<label>Home Address</label>
			<input type="text" name="address" id="address" required=""
			placeholder="Eg P.O Box 001, Tanga Tanzania">
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
		        <select name="class_en" id="class_en" class="form-control"required="">
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
				<input type="Date" name="start_date" id="start_date" required="">
	        </div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>End on:</label>
				<input type="Date" name="end_date" id="end_date" required="">
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="input-group">
				<label>Passwords</label>
				<input type="Password" name="pwd" id="pwd" >
				<p style="font-size:14px; color:blue"></p>
			</div>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>Confirm passwords</label>
				<input type="Password" name="pwd" id="pwd" required="">
			</div>
		</div>
	</div>
	<hr>
		<center><h6><i style="font-size:20px">Parent/Gurdian Details</i></h6></center>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Parent First name</label>
				<input type="text" name="pafname" id="pafname" required=" ">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>Parent Last name</label>
				<input type="text" name="palname" id="palname" required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
			<div class="input-group">
				<label>Relashionship with Student:</label>
				<input type="text" name="relashioship" id="relashioship" required="">
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
				<input type="text" name="nationality" id="nationality" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Work as:</label>
				<input type="text" name="work_as" id="work_as" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Employer's Name</label>
				<input type="text" name="empl_name" id="empl_name" required="">
			</div>	
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<label>Work Phone:</label>
				<input type="text" name="work_phone" id="work_phone" required="">
			</div>	
		</div>
	</div>
	<hr>
	<center><h6><i style="font-size:20px">Student Other Related Details</i></h6></center>
	<hr>
	<div class="row">
		<div  class="col-sm-1"></div>
			<div class="col-sm-10">
				<p>Wazazi wapendwa : <br>
				Shule hii ya chekechea iko kwa watoto wote wenye umri kuanzia miaka 3 <br>mpaka 6 nakujitolea muhanga kwetu  kumsaidia ukuaji wa akili,kiroho <br>hisia na kijamii.iliwaweze kutusaidia katika kutatua mahitaji yao .<br> tafadhali eleza juu ya  yafuatayo:-</p>
			</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="input-group">
				<label>Most Prefered Activity:</label>
				<input type="text" name="most_pref" id="most_pref" required="">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>Lest Prefered Activity:</label>
				<input type="text" name="least_pref" id="least_pref" required="">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>Time spend In that activity:</label>
				<input type="text" name="time_spen " id="time_spen " required="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="input-group">
				<label>General Children behaviour: </label>
				<div class="dropdown">
		            <select name="gen_behavior" id="gen_behavior" class="form-control"required="">
		            <option>--General Behaviour--</option>
		            <option value="Bad">Bad</option>
		            <option value="Not Bad">Not Bad</option>
		            <option value="Atleast good">Atleast good</option>
		            <option value="Good">Good</option>
		            <option value="Very good">Very good</option>
		            <option value="Perfectly good">Perfectly good</option>
		            <option ></option>
		            </select>
		          </div>
				</div>
		</div>
		<div class="col-sm-5">
			<div class="input-group">
				<label>Relationship With other Children's:</label>
				<div class="dropdown">
		           <select name="other_relatiosh" id="other_relatiosh" class="form-control"required="">
		            <option>--Relationship with other--</option>
		            <option value="Bad">Bad</option>
		            <option value="Not Bad">Not Bad</option>
		            <option value="Atleast good">Atleast good</option>
		            <option value="Good">Good</option>
		            <option value="Very good">Very good</option>
		            <option value="Perfectly good">Perfectly good</option>
		            <option ></option>
		            </select>
		        </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<label>Is child have fear?</label>
				<input type="text" name="fear" id="fear" required="">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<label>Eating Behaviour:</label>
				<input type="text" name="eating_behv" id="eating_behv" required="">
			</div>
		</div>
		</div>
	
	<hr>
	<center><h6><i style="font-size:20px">This Part is To be Filled by Doctor Only After Download This form:</i></h6></center>
	<hr>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
		<p> <p>MEDICAL EXAMINATION FORM</p><br>
				1.Name of the child :……………………………………………….. <br>
				2. Medical officer Name and title ………………………………………………………………………….. <br>
				3.Name of the hospital ……………………………………………….. <br>
				4. Location and the address of the hospital <br> ……………………………………………..<br><br>

				PLEASE EXAMINE THE ABOVE MENTIONED CHILD <br>
				1.General health…………………………………………………………<br>
				…………………………………………………</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<p> 2. Skin condition:…………………………………………… <br>
		        3.Blood HB ……………………………………B/C……………………WBC  
		        <br>Total……………………………………Differential ………………………<br>
		    </p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<p> 4. Stool ……………………………………………………………………… <br>
				5.Urine ………………………………………………………………………… <br>
		    </p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<p>7.Other allergies………………………………………………………………</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<p>Please add any other comment which should me considered as we 		educate <br>the above kid : <br>
 				……………………………………………………………………… <br>
 				……………………………………………………………………… <br>
 				……………………………………………………………………… <br>
		    </p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<center>
				<p>Name and signature ………………………………………… <br>
				  Official stump……………………………………………… <br>
				  Date …………………………………………………… <br><br>
				   <i style="color:blue">Isafina Primary school appreciates your cooperation .Thank you</i>
		    	</p>
		</center>
		</div>
	</div>	
	<hr>
	<center><h6><i style="font-size:20px">Parent/Gurdian Agreements:</i></h6></center>
	<hr>
	<dir class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
			<br><br><p>Ninakubali kuwa : <br><br>
			1.	Nitalipa ada yote kama ilivyoelekezwa katika fomu hii nakama pia <br> itafanyiwa marekebisho kulinagana na uendeshaji wa shule. <br> Ninaahidi kwa wakati bila kusubiri dharura . <br> <br>

			2.	Ninakubali kwamba usalama wamtoto wangu anapokuja nakuondoka shule <br> ni ukojuuyangu. Ni wajibu wangu kumtibu mtoto wangu au gharama <br>zitakazo tumika kama niswala la dharura. <br> <br>

			3.	Ninaahidi kulipa gharama kama mtoto wangu ataharibu kwa bahati mbaya <br> au kukusudi akifanya chochote cha shule. <br> <br>

			4.	Ninatoa ruhusa kwa shule kutafuta ushauri wa daktari na niruhusu daktari kufanya matibabu pindi inapotokea dharura au ajali ambapo siwezi kupatikana kwa haraka . <br> <br>

			5.	Ninaelewa kwamba shule ya Isafina ikochiniyashirika la Kikristo napamoja na shule kufuata mtaala wakitaifa ,wanafunzi wote watapatiwa mafunzo yakikristo . <br> <br>

			6.	Nakubali kwamba ada haitarudishwa kama mwanafunzi hata kuwepo kwasababu ua ugonjwa ,kuhama kusimamishwa au kufukuzwa. <br> <br>

			7.	Nimeelewa maelezo ya liyokatika fomu hii, nnakubaliana nayona nitashirikiana na shule ilimalengo ya kumwelewesha mtoto wangu yafanikiwe.  <br> <br>
			</p>
		</div>
	</dir>
	<div class="row">
		<div class="col-sm-7">
			<h4>Is there any rule you don't agree with it?</h4>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<label>Yes:</label>
						<input type="radio" value="Yes" name="agree" id="notagree">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<label>No:</label>
						<input type="radio" value="No" name="agree" id="notagree">
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<label>If yes please mention it here:</label>
					<input type="text" name="list_of_not_agree" id="list_of_not_agree" placeholder="eg.1,2,...">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<h5>Analyse the reasons to not agree:</h5>
		</div>
		<div class="col-sm-7">
			  <textarea class="form-control" rows="3" id="reasons" name="reasons" id="reasons" placeholder="Put your reasons here.."></textarea>
		</div>
	</div>	
	<hr>
	<center><h6><i style="font-size:20px">School Fee Payment Structure:</i></h6></center>
	<hr>
	<div class="row">
		<div class="col-sm-12">
		<center>
			<p>ISAFINA has the following structure of Payment to all students:</p>
			<i>As analysed on the table bellow:</i>
		</center>
		</div>
	</div><br>
	<div class="row">
		<div class="col-sm-12">
			<center>
				 <div class="table-responsive">
				    <table class="table">
				      <thead>
				        <tr>
				          <th>Darasa la 1 <br> na wahamiaji</th>
				          <th>Muhulawa I</th>
				          <th>Muhulawa II</th>
				          <th>Muhulawa III</th>
				          <th>Jumla</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td>Fomu ya maombi</td>
				          <td>5,000/=</td>
				          <td>-</td>
				          <td>-</td>
				          <td>5,000/=</td>
				        </tr>
				        <tr>
				          <td>Mchango wa maendeleo</td>
				          <td>50,000/=</td>
				          <td>-</td>
				          <td>-</td>
				          <td>50,000/=</td>
				        </tr>
				        <tr>
				          <td>Ada ya mafunzo</td>
				          <td>150,000/=</td>
				          <td>150,000/=</td>
				          <td>150,000/=</td>
				          <td>450,000/=</td>
				        </tr>
				        <tr>
				          <td>Vitabu</td>
				          <td>16,000/=</td>
				          <td>10,000/=</td>
				          <td>10,000/=</td>
				          <td>36,000/=</td>
				        </tr>
				        <tr>
				          <td>Usafiri</td>
				          <td>-</td>
				          <td>-</td>
				          <td>-</td>
				          <td>-</td>
				        </tr>
				        <tr>
				          <td>Chai na chakula</td>
				          <td>50,000/=</td>
				          <td>50,000/=</td>
				          <td>50,000/=</td>
				          <td>150,000/=</td>
				        </tr>
				        <tr>
				          <td>JUMLA</td>
				          <td>271,000/=</td>
				          <td>210,000/=</td>
				          <td>210,000/=</td>
				          <td>691,000/=</td>
				        </tr>
				      </tbody>
				    </table>
				  </div>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-11">
		<p>Ada  ya kila muhula ilipwe angalau wiki moja kabla ya muhula wa kwanza <br> 		kuanza , naikishalipwa hairudishwi .<br>
			Mzazi mwenye watoto Zaidi ya mmoja wa kwake mwenyewe ,wa kwanza atalipa  <br>ada yote , na wapili atalipwa punguzo la 5% yaada , na watatupunguzo la 10%. <br>
			Baadaye mtapewa utaratibu wa kulipia benki .Mtapewa maelezo mara <br>utaratibu huo utakapo kuwa umekamillika . <br>
		</p>
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<input type="radio" value="Not agree" name="pay_agree" id="pay_agree">
			<label>Not agree payment</label>
		</div>
		<div class="col-sm-5">
			<input type="radio" value="Agree" name="pay_agree" id="pay_agree">
			<label>I agree payment</label>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
				<h4><u>NB:</u></h4>
			<p style="color:red;font-style:italic;">
				Dear Parent..! <br>
				We humbly announce to you that aall of our Schoolbr	  finnancial account will be sent to you soo when you  download the medical form and other related document 
				of our School.<br>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<p><a href="" data-toggle="modal" data-target="#log2" >Read School rules</a>
			</p>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<button type="submit" name="sumit_form" id="sumit_form" class="btn btn-inline btn-lg" style="float:left;">Submit this form</button></a>
		</div>
	</div>
	</div>
</form>
<br><br>







<!-- Modal 002-->
  <div id="log2" class="modal fade"  role="dialog">
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
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
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
    <script type="text/javascript" src="../assetss/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assetss/js/popper.min.js"></script>
  <script type="text/javascript" src="../assetss/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
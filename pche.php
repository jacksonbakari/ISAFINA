<!DOCTYPE html>
<html lang="en-GB">
<head>
 <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Transgood</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  plugin css for this page
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="assetss/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
<body>
 
<div id="container">
 
<h1>Create a simple password strength checker</h1>
 
<h2 class="bolded">by Siddharth for the lovely folks at Net Tuts</h2>
 
<p>Type in your password to get visual feedback regarding the strength of your password.</p>
<p>I assure you, I am not stealing your passwords. The form doesn't not submit. You can look through the source if you are suspicious. :)</p> 
 
 <label for="password" id="label"></label>
<input type="password" id="password" onkeyup="check()">

<script type="text/javascript">
	function check()
	{   

		var pdw1=document.getElementById('password');
		var pwd=pdw1.value;
		var special="!@#$%^&*?()?|'/";
		var score=0;
		for (var i = 0; i <pdw.length; i++) {
			if (special.indexOf(pdw.charAt(i))>-1) {
				score+=20;
			}
		}
		if (/[a-z]/.test(pdw)) {
			score+=20;
		}
		if (/[A-Z]/.test(pdw)) {
			score+=20;
		}
		if (/[\d]/.test(pdw)) {
			score+=20;
		}
		if (pdw.length>=8) {
			score+=20;
		}
		var strength="";
		var bg="";
		if (score>=100) {
			strength="Strong";
			bg="green";
		}
		else if (score>=80) {
			strength="Medium";
			bg="gray";
		}
		else if (score>=60) {
			strength="Weak";
			bg="maroon";
		}
		else {
			strength="Very Weak";
			bg="red";
		}
		document.getElementById("label").innerHTML=strength;
		pdw1.style.color="white";
		pdw1.style.backgroundColor=bg;
		

	}
</script>
</div>
  <!-- body wrapper -->
  <!-- plugins:js -->
  <script src="../../node_modules/material-components-web/dist/material-components-web.min.js"></script>
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/misc.js"></script>
  <script src="../../js/material.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>
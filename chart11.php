<html>
  <head>
    <title>ISAFINA SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="style/ISAFINA.css">
   <link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php 
$a=39;
$Subj1=80;
$Subj2=86;
$Subj3=45;
$Subj4=24;
$Subj5=67;
$Total=($Subj1+$Subj2+$Subj3+$Subj4+$Subj5);
$Average=$Total/4;
if (($Average>=80)&&($Average<=100)) {
  $Grade="A";
  $b="true";
}
elseif (($Average>=60)&&($Average<80)) {
  $Grade="B";
  $b="true";
}
elseif (($Average>=40)&&($Average<60)) {
  $Grade="C";
  $b="true";
}
elseif (($Average>=35)&&($Average<40)) {
 $Grade="D";
 $b="false";
}
else{
  $Grade="F";
  $b="false";
}
 ?>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Class One');
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Subj 1');
        data.addColumn('number', 'Subj 2');
        data.addColumn('number', 'Subj 3');
        data.addColumn('number', 'Subj 4');
        data.addColumn('number', 'Subj 5');
        data.addColumn('number', 'Total');
        data.addColumn('number', 'Average');
        data.addColumn('number', 'Grade');
        data.addColumn('number', 'Position');
        data.addColumn('boolean', 'Pass');
        data.addRows([
          ['','Mike Bulsis',{v:1, f:'<?php echo $Subj1 ?>'},{v: 10, f: '<?php echo $Subj2 ?>'},{v: 7,  f: '<?php echo $Subj3 ?>'},{v: 7,  f: '<?php echo $Subj4 ?>'},{v: 7,  f: '<?php echo $Subj5 ?>'},{v: 7,  f: '<?php echo $Total ?>'},{v: 7,  f: '<?php echo $Average ?>'},{v: 7,  f: '<?php echo $Grade?>'},{v: 7,  f: ''},<?php echo $b?>],
          ['','jackson bakari',{v:1, f:'<?php echo $Subj1 ?>'},{v: 10, f: '<?php echo $Subj2 ?>'},{v: 7,  f: '<?php echo $Subj3 ?>'},{v: 7,  f: '<?php echo $Subj4 ?>'},{v: 7,  f: '<?php echo $Subj5 ?>'},{v: 7,  f: '<?php echo $Total ?>'},{v: 7,  f: '<?php echo $Average ?>'},{v: 7,  f: '<?php echo $Grade?>'},{v: 7,  f: ''},<?php echo $b?>],
          ['','Mike Bulsis',{v:1, f:'<?php echo $Subj1 ?>'},{v: 10, f: '<?php echo $Subj2 ?>'},{v: 7,  f: '<?php echo $Subj3 ?>'},{v: 7,  f: '<?php echo $Subj4 ?>'},{v: 7,  f: '<?php echo $Subj5 ?>'},{v: 7,  f: '<?php echo $Total ?>'},{v: 7,  f: '<?php echo $Average ?>'},{v: 7,  f: '<?php echo $Grade?>'},{v: 7,  f: ''},<?php echo $b?>],
          
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: false, width: '100%', height: '100%'});
      }
    </script>
  </head>
 <body style="background-size:cover; font:20px Montserrat, sans-serif;">
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
        <img src="../pic/ywam_logo.png" alt="logo" style="width:70%;">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="..\index.php">Home</a>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="aplication/Sregister.php"style="color:black" >Isafina-pre and Primary-school</a>
                <a class="dropdown-item" href="#"style="color:black" >DTS aplication's</a>
                <a class="dropdown-item" href="#"style="color:black">Outreach's</a>
            </div>
    </li>
    </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">School analysis</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01" style="color:white;background:white;" >
              <a class="dropdown-item" href="chart1.php"style="color:black" >Subjects analysis</a>
              <a class="dropdown-item" href="chart2.php"style="color:black" >Class analysis</a>
              <a class="dropdown-item" href="#"style="color:black">Students analysis</a>
              <a class="dropdown-item" href="chart9.php"style="color:black">Staffs analysis</a>
          </div>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="front/about.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../is_receipt/sesskil.php" >Logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="is_receipt/register.php">Update Profile</a>
    </li>
  </ul>
    </div>
    <div class="container" style="height:500px;">
      <div class="row">
      <div class="col-sm-1"></div>
        <div class="col-sm-11" id="table_div" style="width:100%;"></div>
      </div>
    </div>

  </div>
  <!-- Footer -->
<footer class="container-fluid bg-4 text-center bg-dark" style="height:130px">
  <h5 style="color:white">Follow us:</h5>
  <style type="text/css">
    i{
      width:2.5%;
    }
  </style>
    <a href="https://www.instagram.com" target="new"><i class="fab fa-instagram fa-1x" style="color:black"></i></a>
        <a href="https://www.gmail.com" target="new">  <i class="fab fa-google-plus fa-1x" style="color:red"></i></a>
        <a href="https://www.facebook.com" target="new"> <i class="fab fa-facebook-f fa-1x" style="color: blue"></i></a>
        <a href="https://www.twitter.com" target="new"> <i class="fab fa-twitter fa-1x" style="color:rgb(98, 181, 255)"></i></a>
        <a href="https://www.whatsapp.com" target="new"> <i class="fab fa-whatsapp fa-1x" style="color: green"></i></a>
          <a href="https://www.youtube.com" target="new"> <i class="fab fa-youtube fa-1x" style="color: red"></i></a><br><br>
  <span class="text-muted">&copy Copyright  2018 <a class="text-green" href="#" target="_blank">YWAM Tanga</a>. All rights reserved.</span>
            </div>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
              <span class="mt-0 text-right" style="color:black">Hand-crafted &amp; made by:   <i class="mdi mdi-heart text-red"><q  style="color:green">Clavery Emily</q></i></span>
            </div>
     
          </div>
        </div> 
</footer>
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
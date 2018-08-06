<html>
  <head>
    <title>ISAFINA SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="style/ISAFINA.css">
   <link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{v:'Clavery', f:'Clavery Emily<div style="color:red;font-style:italic;width:40% auto">Reginal Diretor (YWAM Tanga)</div>'},
           '', 'Reginal Diretor'],
          [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Head Of School(ISAFINA)</div>'},'Clavery', ''],
           [{v:'Mary', f:'Mary<div style="color:red; font-style:italic">Head Of School(Mazingara)</div>'},'Clavery', ''],
          ['Bob', 'Mary', 'Bob Sponge'],
          ['Bb', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', ''],
          ['Bobo1', 'Bob', 'Bob Sponge'],
          ['Bobo2', 'Bob', 'Bob Sponge'],
          ['Bobo3', 'Bob', 'Bob Sponge'],
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
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
              <a class="dropdown-item" href="chart11.php"style="color:black">Students analysis</a>
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
    <div class="container">
      <div class="row">
        <div class="col-sm-12" id="chart_div" style="width:100%; height:200px;"></div>
      <div class="row">
        <div class="col-sm-5">
        <h4>The students results</h4>
        <p>gefhjdgsjfhdgfhgdfgdsfjhsgdfsd</p>
        <p>gefhjdgsjfhdgfhgdfgdsfjhsgdfsd</p>
        <p>gefhjdgsjfhdgfhgdfgdsfjhsgdfsd</p>
        <p>gefhjdgsjfhdgfhgdfgdsfjhsgdfsd</p>
      </div>
      </div>
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
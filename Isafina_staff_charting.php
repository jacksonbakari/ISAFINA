<?php
include '../is_receipt/hundphp.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>ISAFINA SCHOOL</title>
  <link rel="stylesheet" type="text/css" href="staff.css">
  <link rel="stylesheet" type="text/css" href="../assetss/bootstrap/dist/css/bootstrap.min.css">
   <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assetss\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
<body style="background-size:cover; font:20px Montserrat, sans-serif;">
<?php 
if (@!$_SESSION['paswd']) {
  $re="Login first to start transaction";
  echo '<div class="error"><br>
        <center><p>'.$re.'</p><br><br>
        <a href="../is_receipt/login.php"><button class="btn" style="background:lightblue;font-size:20px;">Login</button></a></center>
      </div>';
  
  exit();
}
 ?>
<div class="sidenav" style="background:#5F9EA0;">
  <a class="nav-link" href="..\index.php">Home</a>
  <a class="nav-link" href="../staffs/index.php">To Staff</a>
  <a class="nav-link" href="#clients">Clients</a>
  <a class="nav-link" href="#contact">Contact</a>
  <a class="nav-link" href="#" data-toggle="modal" data-target="#log"  target="new">Send Text</a>
  <hr style="background:white">
    <h6 style="color:white">Online Now</h6>
  <div class="chip">
      <img src="../pic/family.jpg" alt="Person" width="96" height="96">
      John Doe
  </div>
<div class="chip">
  <img src="../pic/family.jpg" alt="Person" width="96" height="96">
  John Doe
</div>
</div>


<div class="main">
  <div class="header">
  
<h2>Staff Chat</h2>
<style type="text/css">
  p{
    color:black;
    font-size:18px;
}
</style>
<div class="container">
  <img src="../pic/founder.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="../pic/family.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="../pic/founder.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="../pic/family.jpg" alt="Avatar" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>

</div>
</div>



<!-- ========to do listttt========= -->
<style>

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header1 {
  background:#5F9EA0;
  padding: 30px 10px;
  color: white;
  text-align: center;
  margin:30px auto 0px;
}

/* Clear floats after the header */
.header1:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}
.li{
  width:40%;
  margin:20px auto 0px;
  color:black;

}
</style>
<div id="myDIV" class="header1" style="width:40%">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL" class="li">
  <li>Hit the gym</li>
  <li class="checked">Pay bills</li>
  <li>Meet George</li>
  <li>Buy eggs</li>
  <li>Read a book</li>
  <li>Organize office</li>
</ul>
<br>
<br>
<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

<!-- Modal 002-->
  <div id="log" class="modal fade"  role="dialog">
    <div class="modal-dialog modal-lg" role="document">
    
      <!-- Modal content-->
      <div class="modal-content"style="background:rgb(232, 241, 214)">
        <div class="modal-header">
          <div class="row">
              <h3  style="float:right; color:black;font:20px Montserrat, sans-serif;">Chating here:</h3>
            </div>
        </div>
        <div class="modal-body">
          <div class="cont">
            <div class="row">
              <div class="col-sm-12">
              <form class="form-outline">
                  <div class="row">
                    <div class="input-group">
                      <label>Staff name /Staff Number:</label>
                      <input class="form-control" type="text" name="name" id="name" required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-group">
                      <label>Text:</label>
                      <input class="form-control" type="text" name="text" id="text" required=" " style="height:40px">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-group">
                      <button class="btn" type="submit" name="send" id="send">Send</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
          </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
  </div>

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

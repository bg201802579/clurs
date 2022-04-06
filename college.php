<?php


session_start();
 
if(!isset($_SESSION["CollegeLogin"]) || $_SESSION["CollegeLogin"] !== true){
    header("location: collprofile.php");
    exit;

    
}?>




<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 120px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #050A30;
  overflow-x: hidden;
  padding-top: 20px;
  text-align: center;
  box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.89);
}

.sidenav a {
  padding: 20px 20px 20px 16px;
  text-decoration: none;
  font-size: 10px;
  color: #818181;
  display: block;
 
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: #465a9cc7;
}

.sidenav a:active {
  color: #f1f1f1;
  background-color: #465a9cc7;
}

.main {margin-top: 50px;
  margin-left: 120px; 
  font-size: 28px; 
  padding: 0px 10px;
}



/*----------------------------------------------------------------------------HEADER*/
.header {
    position: fixed;
    top:0;
    padding: 50px 900px;
    background: #050A30;
      box-shadow: 7px 0 10px 0 rgba(0, 0, 0, 0.89);
}


.headtxt{
    position: absolute;
    top: 8px;
    left: 200px;
    color: white;
    
}

@media only screen and (min-device-width:225px) and (max-device-width: 980px ){
    .sidenav {
    background-color: #050A30;
  overflow: auto;
  white-space: nowrap;
  height: 30%;
  margin-top: 176%;
  width:100%;
  
}

.sidenav a {
    
bottom: 1px;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
}
 


.sidenav a:hover {
  color: #f1f1f1;
  background-color: #465a9cc7;
}

.sidenav a:active {
  color: #f1f1f1;
  background-color: #465a9cc7;
}

.main {margin-top: 50px;
  margin-left: -0px; 
  font-size: 28px; 
  padding: 0px 10px;
}


.header {
    position: fixed;
    top:0;
    padding: 50px 900px;
    background: #050A30;
      box-shadow: 7px 0 10px 0 rgba(0, 0, 0, 0.89);
}


.headtxt{
    position: absolute;
    top: 8px;
    left: 20px;
    color: white;
    
}




}
</style>
<body>



<div class="sidenav">
    
  <a href="notification.php"><i class="fa fa-bell-o" style="font-size:22px"></i> <br><br> Notification</a>
  <a href="Profile.php"><i class="fa fa-user-o" style="font-size:22px" align="center"></i><br> <br>Profile</a>
  <a href="college.php"><i class="fa fa-university" style="font-size:22px"></i><br> <br>College Department</a>
    <a href="reserve.php"><i class="fa fa-plus-square" style="font-size:22px"></i><br> <br>Reserve Unit</a>
    <a href="unit.php"><i class="fa fa-desktop" style="font-size:22px"></i><br> <br>Unit Status</a>
    <a href="index.php"><i class="fa fa-bell-o" style="font-size:22px"></i> <br><br> log out</a>

</div>
<div class="header">
  <p class="headtxt">College Details</p>
</div>

<div class="main">
 
<br><br>

  <p>asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh asadxasdbsjdhfbjhsd fjsd fjhsd fjsd fjhsd fjhasfjhsd fjas dh </p>
</div>
   

   
</body>
</html> 

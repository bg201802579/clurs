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
    <link rel="stylesheet" href="css/colloverview.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>List of Lab Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<style>

</style>
<body>



<div class="sidenav">
    
<a href="colloverview.php"><i class="fa fa-home" style="font-size:24px"></i> <br><br> Home</a>
    <a href="collcreatelab.php"><i class="fa fa-plus-circle" style="font-size:24px"></i><br> <br>Create College Labolatory</a>
    <a href="collcreate.php"><i class="fa fa-desktop" style="font-size:24px"></i><br> <br>Create Lab Admins</a>
    <a href="collassignpc.php"><i class="fa fa-usb" style="font-size:24px"></i><br> <br>Assign Pc Unit</a>
    <a href="collprofile.php"><i class="fa fa-vcard" style="font-size:24px"></i><br> <br>My Profile</a>
    <a href="collogout.php"><i class="fa fa-mail-forward" style="font-size:24px"></i> <br><br> log out</a>
</div>
<div class="header">
  <p class="headtxt"><i class="fa fa-desktop" style="font-size:24px"></i>  LIST OF LAB ADMINISTRATORS</p>
</div>


<br><br>
<div class="main">
<button class="accordion"><i class="fa fa-user-circle-o" style="font-size:24px"></i>  Computer Availability</button>
<div class="panel">


No display for now

</div>
<hr>
<button class="accordion"><i class="fa fa-mortar-board" style="font-size:24px"></i> List of College Labolatories in <?php echo $_SESSION["collename"]?></button>
<div class="panel">
  <?php include './includes/listoflabolatories.php'?>

</div>

<hr>
<button class="accordion"><i class="fa fa-desktop" style="font-size:24px"></i> Lab Administrator of <?php echo $_SESSION["collename"]?></button>
<div class="panel">
  <?php include './includes/listoflabadmin.php' ?>
<br><br><br><br><br><br>
</div>
   </div>
   <SCRIpt>

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

    $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
</SCRIpt>

   
</body>
</html> 

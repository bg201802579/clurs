<?php


session_start();
 
if(!isset($_SESSION["passlogin"]) || $_SESSION["passlogin"] !== true){
    header("location: index_s.php");
    exit;
}





?>


<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/css_supprofile.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title><?php echo htmlspecialchars($_SESSION["sup_firstname"]) ?> 's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>



<div class="sidenav">
<a href="supoverview.php"><i class="fa fa-home" id="icons"></i> <br><br> Home</a>
    <a href="supcreatelab.php"><i class="fa fa-plus-circle" id="icons"></i><br> <br>College Labolatory</a>
    <a href="supcreate.php"><i class='fas fa-dice-d20' id="icons"></i><br> <br>Create Admins</a>
    <a href="supassignpc.php"><i class="fa fa-usb" style="font-size:24px"></i><br> <br>Assign Pc Unit</a>
    <a href="supprofile.php"><i class="fa fa-vcard" id="icons"></i><br> <br>My Profile</a>
    <a href="logout.php"><i class="fa fa-mail-forward" id="icons"></i><br> <br>Log out</a>
</div>
<div class="header">
  <p class="headtxt"><i class="fa fa-vcard" id="icons"></i> Super Admin Profile</p>
</div>

<div class="main">

        <br><br>
        <div class="card">
        <p class="botom">WMSU CLURS Super Admin</p>
          <img src="./media/wmsulogo.png" alt="John" class="imgprof"  >
          <h2 class="nameTxt"> <?php echo $_SESSION["sup_firstname"] ." ".$_SESSION["sup_lastname"]?></h2>
          <p class="title"><?php  echo htmlspecialchars($_SESSION["username"]) ?></p>
          <p class="title"> Active since :<?php  echo htmlspecialchars($_SESSION["time"])?></p>
          <p  class="botom">Western Mindanao State University</p>
          <input class="editP" onclick="document.getElementById('id01').style.display='block'" type="button" value="Edit Profile"><a class="editPs" href="sur-reset-password.php"  >Change Password</a>
          
          
        
</div>
<div id="id01" class="modal">
            
            <form class="modal-content animate" action="supprofile.php" method="post">
            

            
                    
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               
                <div class="container">
                <h2 class="portal">Edit Profile</h2>
                <label for="uname"><b>First Name</b></label>
                <input type="text" placeholder="Enter Username" name="sup_firstname" required>

                <label for="psw"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="laname" required>
                <label for="psw"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="emaill" required>
                <button>submit</button>


                
               

                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
               
                </div>
            </form>
            </div>
           



   
</body>

</html> 

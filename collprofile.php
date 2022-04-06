<?php


session_start();
 
if(!isset($_SESSION["CollegeLogin"]) || $_SESSION["CollegeLogin"] !== true){
    header("location: index_c.php");
    exit;

    
}?>

<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/collprofile.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>College Administrator <?php echo htmlspecialchars($_SESSION["col_username"]) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

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
  <p class="headtxt">College Administrator Profile</p>
</div>

<div class="main">

        <br><br>
        <div class="card">
        <p class="botom">WMSU CLURS College Admin</p>
          <img src="./media/wmsulogo.png" alt="John" class="imgprof"  >
          <h2 class="nameTxt"><?php  echo $_SESSION["col_username"]?></h2>
          <p class="title"><?php echo $_SESSION["firstname"]. " ".$_SESSION["lastname"];?></p>
          <p class="title"> Active since : <?php  echo htmlspecialchars($_SESSION["colltime"])?></p>
          <p  class="botom">Department of : <?php  echo htmlspecialchars($_SESSION["collename"]) ?> </p>
          <input class="editP" onclick="document.getElementById('id01').style.display='block'" type="button" value="Change Password">
          
          
        
</div>
<div id="id01" class="modal">


<?php

include_once 'colreset-password.php'?>
                
                    
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               
                <h2>Reset Password</h2>
                      <p>Please fill out this form to reset your password.</p>
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                        <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                    </div>
                                      <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            </form>
               
                </div>
            
            </div>
           



   
</body>

</html> 

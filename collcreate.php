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
    <link rel="stylesheet" href="css/collcreate.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Super Admin dashboard</title>
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
  <p class="headtxt"><i class="fa fa-desktop" style="font-size:24px"></i> Create Labolatory Admins for <?php echo " ". $_SESSION["collename"] ?></p>
</div>

<div class="main">
  <div class="wrapper">
      <?php include './includes/collcreatecolegelabolatory.php'?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           
                
                <input placeholder="Firts Name"  type="text" name="dkalab_firstname"  <?php echo (!empty($dkalab_firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dkalab_firstname; ?>">
                <span class="invalid-feedback"><?php echo $dkalab_firstname_err; ?></span>
            
                <input  placeholder="last Name" type="text" name="dkalab_lastname"   <?php echo (!empty($dkalab_lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dkalab_lastname; ?>">
                <span class="invalid-feedback"><?php echo $dkalab_lastname_err; ?></span>
            
                <input  placeholder="<?php echo $_SESSION["collename"] ?>" type="text" name="dkalab_collname"   <?php  echo (!empty($dkalab_collname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $_SESSION["collename"] ?>">
                <span class="invalid-feedback"><?php echo $dkalab_collname_err; ?></span>
            
                <input placeholder="User Name" type="text" name="dkalab_username"   <?php echo (!empty($dkalab_username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dkalab_username; ?>">
                <span class="invalid-feedback"><?php echo $dkalab_username_err; ?></span>
           
                <input placeholder="Password" type="password" name="password"   <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
           
                <input placeholder="Confirm your password" type="password" name="confirm_password"   <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            
                
                <input class="amin" type="submit" class="btn btn-primary" value="Submit">
                <input  class="amin" type="reset" class="btn btn-secondary ml-2" value="Reset">
            
                
        </form>
 </div>
</div>
  <script>
</script>
 
   

   
</body>
</html> 

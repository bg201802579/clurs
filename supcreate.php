<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/sup_create.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Create College \ Lab Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
  <p class="headtxt"><i class='fas fa-dice-d20' style='font-size:24px'></i>  CREATE WMSU ADMIN</p>
</div>

<div class="main">
 
<br>
</head>
<body>


    <button class="tablink" onclick="display('super', this, 'red')" id="defaultOpen"><i class="fa fa-user-plus" style="font-size:24px"></i> <br> College Admin</button>
    <button class="tablink" onclick="display('labttd', this, 'green')"><i class="fa fa-users" style="font-size:24px"></i> <br> Lab Attendant</button>
        <div id="super" class="tabcontent">
          <div class="sep">
                <?php include './includes/supcreatecolladmin.php'?>                         
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <input placeholder="First Name"  type="text" name="coll_firstname"  <?php echo (!empty($coll_firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $coll_firstname; ?> ">
        <span class="invalid-feedback"><?php echo $coll_firstname_err; ?></span>
      
        <input placeholder="Last Name"  type="text" name="coll_lastname"  <?php echo (!empty($coll_lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $coll_lastname; ?>">
        <span class="invalid-feedback"><?php echo $coll_lastname_err; ?></span>
        

        <label class="mawawala_kana" for="coll_collname"><i class="fa fa-bank" style="font-size:24px"></i> College</label>
        <select class="optn" name="coll_collname"  <?php echo (!empty($coll_collname_err)) ? 'is-invalid' : ''; ?> value="<?php echo $coll_collname;?>">
        
                    <option value=''>Select Collage Course</option>
                    <?php $sql = mysqli_query($link, "SELECT cre_name FROM crsunitde ORDER BY crs_id DESC");
                    while ($row = mysqli_fetch_array($sql)) {
                        $crs_id = $row['crs_id'];
                        $cre_name = $row['cre_name'];
                        ?>
                        <option value = "<?php echo $cre_name; ?>"><?php echo $cre_name; ?></option>
                    <?php } ?>
               
        </select>
        <span class="invalid-feedback"><?php echo $coll_collname_err; ?></span>
   
       <input placeholder="User Name" type="text" name="col_username" class="form-control <?php echo (!empty($col_username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $col_username; ?>">
        <span class="invalid-feedback"><?php echo $col_username_err; ?></span>
 
        <input placeholder="Password" type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
   
        <input placeholder="Confirm College Admin Password" type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span> 
        <input id="amin" style=" padding: 10px 30px; border:none;" type="submit" class="btn btn-primary" value="Submit">
        <input  id="amin" style=" padding: 10px 30px; border:none;" type="reset" class="btn btn-secondary ml-2" value="Reset">
   
</form>
       </div>
        </div>

<div id="labttd" class="tabcontent">
  
<div class="sep">


       <form action="" method="post">
                      <input class="collinput" type="text" name="colfname" Placeholder="First name">
                      <input class="collinput" type="text" name="collname" Placeholder="Last name">
                      <input class="collinput" type="text" name="usename" Placeholder="Username">
                      <input class="collinput" type="text" name="coll" Placeholder="College">
                      <input class="collinput" type="password" name="coll" Placeholder="Password">
                  <button style="padding:15px; 10px" type="submit">Submit</button>
                  </form>
          </div>
</div>




<script>
function display(displayname,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(displayname).style.display = "block";
  elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();
</script>
   </div>
   

   
</body>
</html> 

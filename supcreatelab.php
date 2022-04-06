<?php


session_start();
 
if(!isset($_SESSION["passlogin"]) || $_SESSION["passlogin"] !== true){
    header("location: index_s.php");
    exit();
}
 include 'create.php'
?>

<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/sup_createlab.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Creat Labolatory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
  <p class="headtxt"><i class="fa fa-plus-circle" id="icons"></i> Add Computer Labolatory </p>
</div>



<div class="main">

 
<br><br><div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5"> <i class="fa fa-plus-circle" id="icons"></i> Create Computer Lab</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label class="">Course Name</label>
                            <input type="text" name="cre_name" id="dess" class="addssss <?php echo (!empty($cre_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cre_name; ?>">
                            <span class="invalid-feedback"><?php echo $cre_name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Room Destination</label><br>
                            <input name="crs_roomnumb" id="dess" class="addssss <?php echo (!empty($crs_roomnumb_err)) ? 'is-invalid' : ''; ?>"><?php echo $crs_roomnumb; ?>
                            <span class="invalid-feedback"><?php echo $crs_roomnumb_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Numbers of unit</label>
                            <input type="number" min="1" max="15" name="unit_num" id="dess" class="addssss <?php echo (!empty($unit_num_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $unit_num; ?>">
                            <span class="invalid-feedback"><?php echo $unit_num_err;?></span>
                        </div>
                        <br><input class="amin" type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div></div>
   

   
</body>
</html> 

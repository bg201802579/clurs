<?php


session_start();
include 'create.php';
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
    <link rel="stylesheet" href="css/collcrseatelab.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Coll Create Labolatory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<style>
    
body {
    font-family: "Lato", sans-serif;
  }
  
  .amin{
    padding: 12px 15px;
    border:none;
    background-color: green;
    color: white;
  
  }
  
  
  .amin:hover{
    padding: 12px 30px;
    border:none;
    background-color: gray;
    color: white;
    transition: padding 1s;
    
  }


  .invalid-feedback{
    font-size:10px;
    color : yellow;

}

  .sidenav {
    height: 100%;
    width: 120px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #cccaca;
    overflow-x: hidden;
    padding-top: 20px;
    text-align: center;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.89);
    border-top: 1px solid black;
  }
  
  .sidenav a {
    padding: 20px 20px 20px 16px;
    text-decoration: none;
    font-size: 10px;
    color: #746c6c;
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
  
  .main {background-image: url("./css/1wmsu.png");
    
    background-color: #333026;
   height: 652px; 
   background-position: center; 
   background-repeat: no-repeat;
   background-size: cover;
   margin-top: 50px;
    margin-left: 120px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
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
      font-size: 20px;
      top: 8px;
      left: 200px;
      color: white;
      
  }
  
  .wrapper{   position:fixed;
              padding: 20px 10%;
              background-color: #050A30;
              border: 1px solid white;
              height: 450px;
              width: 400px;
              color:white;
              font-size: 22px;
              opacity: 0.9;
              margin-left: 20px;
              box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.89);
             
             
          }
  
  
  @media only screen and (min-device-width:225px) and (max-device-width: 980px ){
      .sidenav {
      background-color:  #e0dede;
    overflow: auto;
    white-space: nowrap;
    height: 30%;
    margin-top: 176%;
    width:100%;
    
  }
  
  .sidenav a {
      
  bottom: 1px;
    display: inline-block;
    color: #15188a;
    text-align: center;
    padding: 12px;
    text-decoration: none;
  }
   
  
  
  .sidenav a:hover {
    color: #f1f1f1;
    background-color: #465a9cc7;
    padding: 2px ;
  }
  
  .sidenav a:active {
    color: #f1f1f1;
    background-color: #465a9cc7;
  }
  
  .main {margin-top: 50px;
    margin-left: -0px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
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
    
<a href="colloverview.php"><i class="fa fa-home" style="font-size:24px"></i> <br><br> Home</a>
    <a href="collcreatelab.php"><i class="fa fa-plus-circle" style="font-size:24px"></i><br> <br>Create College Labolatory</a>
    <a href="collcreate.php"><i class="fa fa-desktop" style="font-size:24px"></i><br> <br>Create Lab Admins</a>
    <a href="collassignpc.php"><i class="fa fa-usb" style="font-size:24px"></i><br> <br>Assign Pc Unit</a>
    <a href="collprofile.php"><i class="fa fa-vcard" style="font-size:24px"></i><br> <br>My Profile</a>
    <a href="collogout.php"><i class="fa fa-mail-forward" style="font-size:24px"></i> <br><br> log out</a>
</div>
<div class="header">
  <p class="headtxt">Create Computer Labolatory </p>
</div>

<div class="main">
 

   
<br><br><div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5"> <i class="fa fa-plus-circle" id="icons"></i> Create Computer Lab</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       
                            <label class="">Course Name</label>
                            <input type="text" placeholder="<?php echo $_SESSION["collename"]?>" name="cre_name" id="dess" class="addssss <?php echo (!empty($cre_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $_SESSION["collename"] ?>">
                            <span class="invalid-feedback"><?php echo $cre_name_err;?></span>
                        
                            <label>Room Destination</label><br>
                            <input name="crs_roomnumb" id="dess" class="addssss <?php echo (!empty($crs_roomnumb_err)) ? 'is-invalid' : ''; ?>"><?php echo $crs_roomnumb; ?>
                            <span class="invalid-feedback"><?php echo $crs_roomnumb_err;?></span>
                        
                            <br><label>Numbers of unit</label>
                            <input type="text" name="unit_num" id="dess" class="addssss <?php echo (!empty($unit_num_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $unit_num; ?>">
                            <span class="invalid-feedback"><?php echo $unit_num_err;?></span>
                        <input class="amin" type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div></div>
   </div>
   

   
</body>
</html> 

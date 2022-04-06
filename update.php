<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
        background-image: url("./media/1wmsu.png");
        background-color: #333026;
        height: 102%; 
        background-position: center; 
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 50px;
        margin-left: 120px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 10px;
     }   
     .fill{
   background-color: #DDD5F4;
   padding: 20px 10px;
   margin-right: 50%;
   border: 2px solid #444791;
   color: #333026;
   
   z-index: 1;
 }


 
 .no{
     padding: 13px 20px;
     background-color: #050a30;
     color: white;
 }
 .no:hover{
    padding: 13px 20px;
     background-color: #454b6c;
     color: white;
 }


 .yes{

    padding: 20px 20px;
     background-color: green;
     color: white;
     border: none;
 }

 .yes:hover{
     padding: 20px 20px;
     background-color: red;
     color: white;
 }


 input{
     padding: 10px 20px;
 }


 i{
     margin-left: 30px;
 }

 label{
    font-size: 25px;
 }

 .invalid-feedback{
     font-size:13px;
     color : red;

 }


    </style>
</head>
<body>
    
            <div class="fill">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <?php include './includes/supupdatecollegecourse.php'?>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="crs">
                            <label >Course Name</label><br>
                            <i class='fab fa-buysellads' style='font-size: 30px'> </i>  <input type="text" name="cre_name" class="form-control <?php echo (!empty($cre_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cre_name; ?>">
                            <br> <span class="invalid-feedback"><?php echo $cre_name_err;?></span>
                        </div>
                        <div class="crs">
                            <label>Room Destination</label><br>
                            <i class='fas fa-compass' style='font-size:30px'></i>  <input name="crs_roomnumb" class="form-control <?php echo (!empty($crs_roomnumb_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $crs_roomnumb;?>">
                            <br> <span class="invalid-feedback"><?php echo $crs_roomnumb_err;?></span>
                        </div>
                        <div class="crs">
                            <label>Number of Units</label><br>
                            <i class="material-icons" style="font-size:36px">computer</i>  <input type="text" name="unit_num" class="form-control <?php echo (!empty($unit_num_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $unit_num; ?>">
                            <br><span class="invalid-feedback"><?php echo $unit_num_err;?></span>
                        </div>
                        <input type="hidden" name="crs_id" value="<?php echo $crs_id; ?>"/> <br><br>
                        <input type="submit" class="yes" value="Submit"> 
                        <a href="supoverview.php" class="no">Cancel</a>
                    </form>
                </div>
            </div> 
</body>
</html>
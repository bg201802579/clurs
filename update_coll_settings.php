<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/update_coll_settings.css">

</head>
<body>
    
            <div class="fill">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <?php include './includes/scollupdatecollegecourse.php'?>
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
                        <a href="colloverview.php" class="no">Cancel</a>
                    </form>
                </div>
            </div> 
</body>
</html>
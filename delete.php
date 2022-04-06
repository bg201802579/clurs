<?php

if(isset($_POST["crs_id"]) && !empty($_POST["crs_id"])){

    require_once "config.php";
    

    $sql = "DELETE FROM crsunitde WHERE crs_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
   
        mysqli_stmt_bind_param($stmt, "i", $param_crs_id);
        
   
        $param_crs_id = trim($_POST["crs_id"]);
        
        if(mysqli_stmt_execute($stmt)){
  
            header("location: supoverview.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    mysqli_stmt_close($stmt);
   
    mysqli_close($link);
} else{
 
    if(empty(trim($_GET["crs_id"]))){
      
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    
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
   background-color: #e4dfdf;
   padding: 30px 10px;
   margin-right: 50%;
   border: 2px solid #444791;
   
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

    </style>
</head>
<body>
    <div class="fill">
        <div class="container-fluid">
           
                
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="crs_id" value="<?php echo trim($_GET["crs_id"]); ?>"/>
                            <p>Are you sure you want to delete this College Course?</p> <br>
                            <p>
                                <input type="submit" class="yes" value="Yes" >   <a href="supoverview.php" class="no">No</a>
                                
                            </p>
                        </div>
                    </form>
            
                  
        </div>
    </div>
</body>
</html>
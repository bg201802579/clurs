<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "config2.php";
    
    $sqli = "DELETE FROM college WHERE id = ?";
    
    if($stmt = mysqli_prepare($link1, $sqli)){
        mysqli_stmt_bind_param($stmt, "i", $param_crs_id);
        
        $param_crs_id = trim($_POST["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            header("location: supoverview.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    mysqli_stmt_close($stmt);
    
    mysqli_close($link1);
} else{
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
        exit();
    }
}
?>
<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "config3.php";
    
    $sqlis = "DELETE FROM dkalab WHERE id = ?";
    
    if($stmt = mysqli_prepare($link2, $sqlis)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = trim($_POST["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            header("location: colloverview.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    mysqli_stmt_close($stmt);
    
    mysqli_close($link2);
} else{
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
        exit();
    }
}
?>


<?php
require_once "config.php";
 
$cre_name = $crs_roomnumb = $unit_num = "";
$cre_name_err = $crs_roomnumb_err = $unit_num_err = "";
 
if(isset($_POST["crs_id"]) && !empty($_POST["crs_id"])){
    $crs_id = $_POST["crs_id"];
    
    $input_cre_name = trim($_POST["cre_name"]);
    if(empty($input_cre_name)){
        $cre_name_err = "Please enter a Course Name.";
    } elseif(!filter_var($input_cre_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $cre_name_err = "Please enter a valid Course Name.";
    } else{
        $cre_name = $input_cre_name;
    }
    
    $input_crs_roomnumb = trim($_POST["crs_roomnumb"]);
    if(empty($input_crs_roomnumb)){
        $crs_roomnumb_err = "Please enter an Room Destination.";     
    } else{
        $crs_roomnumb = $input_crs_roomnumb;
    }
    $input_unit_num = trim($_POST["unit_num"]);
    if(empty($input_unit_num)){
        $unit_num_err = "Please enter the Number Of units.";     
    } elseif(!ctype_digit($input_unit_num)){
        $unit_num_err = "Please enter a positive integer value.";
    } else{
        $unit_num = $input_unit_num;
    }
    if(empty($cre_name_err) && empty($crs_roomnumb_err) && empty($unit_num_err)){
        $sql = "UPDATE crsunitde SET cre_name=?, crs_roomnumb=?, unit_num=? WHERE crs_id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssi", $param_cre_name, $param_crs_roomnumb, $param_unit_num, $param_crs_id);
            $param_cre_name = $cre_name;
            $param_crs_roomnumb = $crs_roomnumb;
            $param_unit_num = $unit_num;
            $param_crs_id = $crs_id;
            if(mysqli_stmt_execute($stmt)){
                header("location: supoverview.php");
                exit();
            } else{
                echo "Your Request is error";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
} else{
    if(isset($_GET["crs_id"]) && !empty(trim($_GET["crs_id"]))){
        $crs_id =  trim($_GET["crs_id"]);
        
        $sql = "SELECT * FROM crsunitde WHERE crs_id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_crs_id);
            
            $param_crs_id = $crs_id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    $cre_name = $row["cre_name"];
                    $crs_roomnumb = $row["crs_roomnumb"];
                    $unit_num = $row["unit_num"];
                } else{
                    exit();
                }
                
            } else{
                echo "error";
            }
        }
        
        mysqli_stmt_close($stmt);
        
        mysqli_close($link);
    }  else{
        exit();
    }
}
?>
 
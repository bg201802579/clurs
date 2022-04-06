<?php
require_once "config.php";
 
$cre_name = $crs_roomnumb = $unit_num = "";
$cre_name_err = $crs_roomnumb_err = $unit_num_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_cre_name = trim($_POST["cre_name"]);
    if(empty($input_cre_name)){
        $cre_name_err = "Please enter a Course Name.";
    } elseif(!filter_var($input_cre_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $cre_name_err = "Please enter a Course Cre_name.";
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
        $unit_num_err = "Please enter the Numbers of Unit";     
    } elseif(!ctype_digit($input_unit_num)){
        $unit_num_err = "Please enter a positive integer value.";
    } else{
        $unit_num = $input_unit_num;
    }
    
    if(empty($cre_name_err) && empty($crs_roomnumb_err) && empty($unit_num_err)){
        $sql = "INSERT INTO crsunitde (cre_name, crs_roomnumb, unit_num) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $param_cre_name, $param_crs_roomnumb, $param_unit_num);
            $param_cre_name = $cre_name;
            $param_crs_roomnumb = $crs_roomnumb;
            $param_unit_num = $unit_num;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: supoverview.php");
                exit();
            } else{
                echo "cant proceed";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
}
?>
 

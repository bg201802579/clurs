<?php require_once "config.php";
 
 $coll_firstname = $coll_lastname  = $coll_collname  = $col_username = $created_at =  $password = "";
 $col_username_err = $password_err = $login_err = "";
  
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  
     if(empty(trim($_POST["col_username"]))){
         $col_username_err = "Please enter username.";
     } else{
         $col_username = trim($_POST["col_username"]);
     }
     
     if(empty(trim($_POST["password"]))){
         $password_err = "Please enter your password.";
     } else{
         $password = trim($_POST["password"]);
     }
     
     if(empty($col_username_err) && empty($password_err)){
         $sql = "SELECT id, coll_firstname , coll_lastname , coll_collname, col_username, password , created_at FROM college WHERE col_username = ?";
         
         if($stmt = mysqli_prepare($link, $sql)){
             mysqli_stmt_bind_param($stmt, "s", $param_col_username);
             $param_col_username = $col_username;
             
             if(mysqli_stmt_execute($stmt)){
                 mysqli_stmt_store_result($stmt);
                 
                 if(mysqli_stmt_num_rows($stmt) == 1){       
                     mysqli_stmt_bind_result($stmt, $id, $coll_firstname, $coll_lastname,  $coll_collname, $col_username,  $hashed_password ,$created_at);
                     if(mysqli_stmt_fetch($stmt)){
                         if(password_verify($password, $hashed_password)){
                             session_start();
                             
                             $_SESSION["CollegeLogin"] = true;
                             $_SESSION["id"] = $id;
                             $_SESSION["firstname"] = $coll_firstname; 
                             $_SESSION["lastname"] = $coll_lastname;  
                             $_SESSION["collename"] = $coll_collname; 
                             $_SESSION["col_username"] = $col_username;  
                             $_SESSION["colltime"] = $created_at;
                             $_SESSION["password"] = $password;                        
                             
                             header("location: collprofile.php");
                         } else{
                             $login_err = "Invalid username or password.";
                         }
                     }
                 } else{
                     $login_err = "Invalid username or password.";
                 }
             } else{
                 echo " Your Request Cannot be Procced.";
             }
 
             mysqli_stmt_close($stmt);
         }
     }
     
     mysqli_close($link);
 }
 ?>
 